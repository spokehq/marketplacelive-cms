<footer class="content-info" role="contentinfo">
  <div class="">
    <div class="row">
        <div class="col-sm-6">
            <div class="adjustment">
                <h4>A COMMUNITY BUILDING FOR DIGITAL SUCCESS</h4>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="vignette">
                <ul class="social">
                    <li class="item"><a href="https://vimeo.com/telx"
                                        target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-vimeo.svg"
                                                             target="_blank" alt=""></a></li>
                    <li class="item"><a href="https://plus.google.com/+TelxGroup"
                                        target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/googleplus.svg"
                                                             target="_blank" alt=""></a></li>
                    <li class="item"><a href="https://twitter.com/TelxMPLIVE"
                                        target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-twitter.svg"
                                                             target="_blank" alt=""></a></li>
                    <li class="item"><a href="http://www.linkedin.com/company/telx"
                                        target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-linkedin.svg"
                                                             target="_blank" alt=""></a></li>
                    <li class="item"><a href="https://www.facebook.com/MarketplaceLive/"
                                        target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-fb.svg"
                                                             target="_blank" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <h4>IN THE NEWS</h4>

            <img class="alignleft" src="{$profile_image}">
            <a href="https://www.twitter.com/{$user_twitter_name}">@{$user_twitter_name}</a>
            <br />
            {$user_description}
            <ul class="pages">
                {$tweets_start}
                <li>{$tweet_text}<br />{$tweet_time}</li>
                {$tweets_end}
            </ul>
            <?php dynamic_sidebar('sidebar-footer-1'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <?php dynamic_sidebar('sidebar-footer-2'); ?>
        </div>
        <div class="col-sm-3">
            <a href="https://marketplacelive2016.eventbrite.com/" class="btn btn-standard" type="button" target="_blank" >REGISTER</a>
        </div>
        <div class="col-sm-offset-6">
            <div class="hosting"><span class="proudly-hosted">PROUDLY&nbsp;HOSTED&nbsp;BY</span>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer-telx-logo.png" alt="Digital Realty | TELX" class="digital-realty"></div>
            </div>
        </div>
    </div>


    <div class="row">
      <?php dynamic_sidebar('sidebar-footer-full-bottom'); ?>
      <div class="col-sm-12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>