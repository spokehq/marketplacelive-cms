<div class="top-content">

    <div class="big-kahuna">
        <div class="container">
            <div class="row">

                <div class="col-md-offset-2 col-md-9  col-xs-12 ">
                    
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/rect-blue.svg" alt="" class="rect-blue">
                    

                    <div class="page-header">
                        <?php use Roots\Sage\Titles; ?>
                        <div class="title"><?= Titles\title(); ?></div>
                        <h1><strong><?php the_field('hero_title'); ?></strong>

                            <?php the_field('hero_text'); ?></h1>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="social-wrapper">
                    <div class="col-sm-4  col-xs-12">
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
                    <div class="col-sm-4 col-md-offset-4">
                        <a href="https://marketplacelive2016.eventbrite.com/"
                           class="btn btn-standard" type="button" target="_blank" >REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Login -->



