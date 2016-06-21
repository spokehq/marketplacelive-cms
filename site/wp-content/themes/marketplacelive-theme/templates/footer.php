<footer class="content-info" role="contentinfo">

    <div class="vignette"></div>

    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-md-7">
                    <div class="adjustment">
                        <div class="title">A COMMUNITY BUILDING FOR DIGITAL SUCCESS</div>
                    </div>
                </div>

                <div class="col-md-5">

                    <div class="social-wrapper">
                        <ul class="social">
	                       	<?php 
		                 $home = get_page_by_title('A Community for Building Digital Success');
		                 $vimeo = get_field('vimeo_link', $home);
		                 $google = get_field('google_plus_link', $home);
		                 $twitter = get_field('twitter_link', $home);
		                 $linkedin = get_field('linkedin_link', $home);
		                 $facebook = get_field('facebook_link', $home);
		                 $instagram = get_field('instagram_link', $home);
		                  if ($vimeo) {?>
                            <li class="item"><a href="<?php echo $vimeo;?>" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                          <?php }
	                      if ($instagram) { ?>
                            <li class="item"><a href="<?php echo $instagram;?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                          <?php }
	                       if($google) { ?>
	                       		<li class="item"><a href="<?php echo $google;?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
	                       <?php }
		                   if($twitter) {?>
			                   	<li class="item"><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
	                       	<?php }
		                    if ($linkedin) { ?>
                            	<li class="item"><a href="<?php echo $linkedin;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <?php }
	                        if ($facebook) { ?>
	                            <li class="item"><a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
	                       <?php } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="news">
                <div class="bird">
                    <img class="tbird" src="<?= get_template_directory_uri(); ?>/dist/images/soc-twitter.svg" alt="">
                </div>
                <div class="col-sm-4">

                    <!--  Twitter Feed  -->
                    <?php dynamic_sidebar('sidebar-footer-1'); ?>
                </div>

                <div class="col-sm-2 col-sm-offset-1">
                    <!--  Footer Menu  -->
                    <?php dynamic_sidebar('sidebar-footer-2'); ?>
                </div>

                <!--  Register Link  -->
                <div class="col-sm-3 col-sm-offset-2">
                    <div class="button-wrapper">
                        <a href="https://marketplacelive2016.eventbrite.com/"
                           class="btn btn-standard" type="button" target="_blank" >REGISTER</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">

            <!--  MARKETPLACELIVE info  -->
                <?php dynamic_sidebar('sidebar-footer-3'); ?>
            </div>

            <!--  Hosting Message  -->
            <div class="col-sm-offset-2 col-sm-6">
                <div class="hosting clearfix"><span class="proudly-hosted">PROUDLY&nbsp;HOSTED&nbsp;BY</span>
                    <a href="https://www.digitalrealty.com/" target="_blank" title="www.digitalrealty.com"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer-telx-logo.png"
                                                                                                                alt="Digital Realty | TELX" class="digital-realty"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
    var sc_project=10991407;
    var sc_invisible=1;
    var sc_security="be3e9043";
    var sc_https=1;
    var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "http://www.");
    document.write("<sc"+"ript type='text/javascript' src='" +
        scJsHost+
        "statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="hit counter"
                                      href="http://statcounter.com/" target="_blank"><img
                class="statcounter"
                src="//c.statcounter.com/10991407/0/be3e9043/1/" alt="hit
counter"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->