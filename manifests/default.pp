

# repo including most config
$project_path = '/var/www'

# public accessible site path
$public_path = '/var/www/site'

# what to name the site?
$dev_site_name = 'testsite.dev' # like example.com

# mysql creds, whatever you want them to be
$db_name    = 'testsite'
$db_user    = 'testsite'
$db_pass    = 'test24site!'


group { 'puppet': ensure => present }
Exec { path => [ '/bin/', '/sbin/', '/usr/bin/', '/usr/sbin/' ] }
File { owner => 0, group => 0, mode => 0644 }

class {'apt':
  always_apt_update => true,
}

Class['::apt::update'] -> Package <|
    title != 'python-software-properties'
and title != 'software-properties-common'
|>

    
file { '/home/vagrant/.bash_aliases':
  ensure => 'present',
  source => 'puppet:///modules/puphpet/dot/.bash_aliases',
}

package { [
    'build-essential',
    'vim',
    'curl',
    'git-core',
    'htop',
  ]:
  ensure  => 'installed',
}

exec { "set-timezone":
  command =>  "sudo ln -sf /usr/share/zoneinfo/America/Detroit /etc/localtime"
}

service { 'ufw':
  ensure => 'stopped',
}

class { 'apache': }

apache::dotconf { 'custom':
  content => 'EnableSendfile Off',
}

apache::module { 'rewrite': }

apache::vhost { $dev_site_name:
  server_name   => $dev_site_name,
  serveraliases => [
],
  docroot       => $public_path,
  port          => '80',
  env_variables => [
],
  priority      => '1',
}

class { 'php':
  service       => 'apache',
  module_prefix => '',
  require       => Package['apache'],
}

php::module { 'php5-mysql': }
php::module { 'php5-cli': }
php::module { 'php5-curl': }
php::module { 'php5-intl': }
php::module { 'php5-mcrypt': }

class { 'php::devel':
  require => Class['php'],
}

class { 'php::pear':
  require => Class['php'],
}



php::pecl::module { 'xhprof':
  use_package     => false,
  preferred_state => 'beta',
}

apache::vhost { 'xhprof':
  server_name => 'xhprof',
  docroot     => '${project_path}/xhprof/xhprof_html',
  port        => 80,
  priority    => '1',
  require     => Php::Pecl::Module['xhprof']
}


class { 'xdebug':
  service => 'apache',
}

class { 'composer':
  require => Package['php5', 'curl'],
}

puphpet::ini { 'xdebug':
  value   => [
    'xdebug.default_enable = 1',
    'xdebug.remote_autostart = 0',
    'xdebug.remote_connect_back = 1',
    'xdebug.remote_enable = 1',
    'xdebug.remote_handler = "dbgp"',
    'xdebug.remote_port = 9000'
  ],
  ini     => '/etc/php5/conf.d/zzz_xdebug.ini',
  notify  => Service['apache'],
  require => Class['php'],
}

puphpet::ini { 'php':
  value   => [
    'date.timezone = "America/Detroit"'
  ],
  ini     => '/etc/php5/conf.d/zzz_php.ini',
  notify  => Service['apache'],
  require => Class['php'],
}

puphpet::ini { 'custom':
  value   => [
    'display_errors = On',
    'error_reporting = -1'
  ],
  ini     => '/etc/php5/conf.d/zzz_custom.ini',
  notify  => Service['apache'],
  require => Class['php'],
}


class { 'mysql::server':
  config_hash   => { 'root_password' => 'akt@1687' }
}

mysql::db { $db_name:
  grant    => [
    'ALL'
  ],
  user     => $db_user,
  password => $db_pass,
  host     => 'localhost',
  charset  => 'utf8',
  require  => Class['mysql::server'],
}


exec { "import-schema":
      command => "mysql -u ${db_user} --password=${db_pass} ${db_name} < ${project_path}/db/schema.sql",
      onlyif  => "[ -f ${project_path}/db/schema.sql ]",
      require  =>  [
        Class['mysql::server'],
        Class['mysql::config']
      ],
}

exec { "import-data":
      command => "mysql -u ${db_user} --password=${db_pass} ${db_name} < ${project_path}/db/data.sql",
      onlyif  => "[ -f ${project_path}/db/data.sql ]",
      require => Exec['import-schema'],
}

class { 'phpmyadmin':
  require => [Class['mysql::server'], Class['mysql::config'], Class['php']],
}

apache::vhost { 'phpmyadmin':
  server_name => 'phpmyadmin',
  docroot     => '/usr/share/phpmyadmin',
  port        => 80,
  priority    => '10',
  require     => Class['phpmyadmin'],
}

file { 'git-hook-pre-commit':
  path    => "${project_path}/.git/hooks/pre-commit",
  ensure  => present,
  mode    => 744,
  content => "
#! /bin/sh

# export schema
mysqldump -u ${db_user} --password=${db_pass} --no-data --no-create-db ${db_name} > db/schema.sql

#export data
mysqldump -u ${db_user} --password=${db_pass} --no-create-info --skip-extended-insert ${db_name} > db/data.sql
# be sure we add and commit the new databases
git add db/*",
  require => Package['git-core'],
}

file { 'git-hook-post-checkout':
  path    => "${project_path}/.git/hooks/post-checkout",
  ensure  => present,
  mode    => 744,
  content => "
#! /bin/sh

# drop and recreate database
mysql -u ${db_user} --password=${db_pass} -e 'DROP DATABASE ${db_name}';
mysql -u ${db_user} --password=${db_pass} -e 'CREATE DATABASE ${db_name}';

# import schema
mysql -u ${db_user} --password=${db_pass} ${db_name} < db/schema.sql
#import data
mysql -u ${db_user} --password=${db_pass} ${db_name} < db/data.sql
git add db/*",
  require => Package['git-core'],
}

# file to guarantee modulepath is correct
  file {'/etc/puppet/puppet.conf':
    path      => '/etc/puppet/puppet.conf',
    content  => "
[main]
  modulepath = ${project_path}/modules",
    ensure  => present,
  }
