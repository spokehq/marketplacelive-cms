<div class="top-content">

    <div class="big-kahuna">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <span class="telx-intro"><?php the_field('hero_text') ?></span>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div>
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/rect1.svg" alt="" class="rect-red">
                    </div>


                    <div class="page-header">
                        <?php use Roots\Sage\Titles; ?>
                        <div class="title"><?= Titles\title(); ?></div>
                      <h1><?php the_field('hero_title'); ?></h1>
                    </div>
                    
                </div>
            </div>


            <div class="row">
                <div class="social-wrapper">
                    <div class="col-sm-4  col-xs-12">
                        <ul class="social">
                            <li class="item"><a href="https://vimeo.com/telx"
                                                target="_blank"><i class="fa fa-vimeo"></i></a></li>
                            <li class="item"><a href="https://plus.google.com/+TelxGroup"
                                                target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li class="item"><a href="https://twitter.com/MPLevent"
                                                target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="item"><a href="http://www.linkedin.com/company/telx"
                                                target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="item"><a href="https://www.facebook.com/MarketplaceLive/"
                                                target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 col-md-offset-4">
                        <a href="https://marketplacelive2016.eventbrite.com/"
                           class="btn btn-standard" type="button" target="_blank" >REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Login -->



