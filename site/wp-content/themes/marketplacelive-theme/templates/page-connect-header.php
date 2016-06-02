<div class="top-content">

    <div class="big-kahuna">
        <div class="">
            <div class="row">
                
                <div class="col-md-offset-4 col-md-7 col-xs-offset-1 col-xs-10">
                    <div>
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/blue-tall.svg" alt="" class="rect-blue">
                    </div>


                    <div class="page-header">
                        <?php use Roots\Sage\Titles; ?>
                        <div class="title"><?= Titles\title(); ?></div>
                        <h1><strong><?php the_field('hero_title'); ?></strong><br>

                            <?php the_field('hero_text'); ?></h1>
                    </div>
                    
                </div>
            </div>


            <div class="row">
                <div class="social-wrapper">
                    <div class="col-sm-offset-2 col-sm-4  col-xs-12">
                        <ul class="social">
                            <li class="item"><a href="https://vimeo.com/telx"
                                                target="_blank"><i class="fa fa-vimeo"></i></a></li>
                            <li class="item"><a href="https://plus.google.com/+TelxGroup"
                                                target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li class="item"><a href="https://twitter.com/TelxMPLIVE"
                                                target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="item"><a href="http://www.linkedin.com/company/telx"
                                                target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="item"><a href="https://www.facebook.com/MarketplaceLive/"
                                                target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 ">
                        <a href="https://marketplacelive2016.eventbrite.com/"
                           class="btn btn-standard" type="button" target="_blank" >REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Login -->



