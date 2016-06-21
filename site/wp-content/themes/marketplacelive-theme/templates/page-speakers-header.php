<div class="top-content">

    <div class="big-kahuna">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <span class="telx-intro"><?php the_field('hero_text') ?></span>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <div>
                        <img src="<?= get_template_directory_uri(); ?>/dist/images/rect-blue.svg" alt="" class="rect-blue">
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
	                    <?php
		                 $home = get_page_by_title('A Community for Building Digital Success');
		                 $vimeo = get_field('vimeo_link', $home);
		                 $google = get_field('google_plus_link', $home);
		                 $twitter = get_field('twitter_link', $home);
		                 $linkedin = get_field('linkedin_link', $home);
		                 $facebook = get_field('facebook_link', $home);
		                 $instagram = get_field('instagram_link', $home);
		                
		                if ($vimeo) { ?>
	                        <li class="item"><a href="<?php echo $vimeo;?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                        <?php }
	                    if ($instagram) { ?>
			                <li class="item"><a href="<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
		                <?php }
						if($google) { ?>                        
	                        <li class="item"><a href="<?php echo $google;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	                    <?php }
		                if ($twitter) { ?>
	                        <li class="item"><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
	                    <?php } 
		                if ($linkedin) { ?>
	                        <li class="item"><a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
	                    <?php }
		                if($facebook) { ?>
	                        <li class="item"><a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
	                    <?php } ?>
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



