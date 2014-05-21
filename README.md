#####The setup includes:
* box:       precise64 (http://files.vagrantup.com/precise64.box)* webserver: apache
* database:  mysql
* PHP:       PHP 5.3

####Next steps:
**If you have not installed Vagrant yet, go to http://downloads.vagrantup.com/**
** You must also install vagrant-hostsupdater from https://github.com/cogitatio/vagrant-hostsupdater**

##Starting a new Project
Fork or clone this Repository

Go into this directory and

$ vagrant up

Afterwards you may access your box  from the same directory with

$ vagrant ssh

More documentation:
* Vagrant >= 1.1: http://docs.vagrantup.com/v2/vagrantfile/ssh_settings.html
* Vagrant <  1.1: http://docs-v1.vagrantup.com/v1/docs/getting-started/ssh.html

####Please change the following **project**: files:
**Vagrantfile**

      # in case you have a couple VMs running at the same time

      config.vm.network :private_network, ip: "{SOMETHING.UNIQUE.GOES.HERE}"

      ...

      v.customize ["modifyvm", :id, "--name", "{SOMETHING}.{DEV}"]

**manifests/default.pp**

    Config Vars Section

        $dev_site_name = '{SOMETHING}.{DEV}'

        ...
        # these are not for root MySQL but a MySQL user
        $db_name    = '{DATABASE_NAME}'
        $db_user    = '{DATABASE_USER}'
        $db_pass    = '{DATABASE_PASSWORD}'
        
####Lastly

You may need to edit your **local**: hosts file and add a hostname/IP mapping to be able to accesss the site at it's $dev_site_name.

[Wiki Page](https://bitbucket.org/jaredrhodes/lamp-project-template-ubuntu-12.04-lts/wiki)