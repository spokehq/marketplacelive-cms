
<!-- .main removed from base template  -->

<main class="main">

    <?php if( have_rows('exhibitors_row_layout') ):

        // assignments

        $link_target = "_blank";                                   // pre-assign link target value
        $count = "1";                                              // row margin overrides

        ?>



    <div class="row">
        <div class="main-content-row custom<?php echo $count++; ?>">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="text-wrapper introduction">
                    <?php the_field('exhibitors_introduction'); ?>
                </div>
            </div>
        </div>
    </div>





        <?php while( have_rows('exhibitors_row_layout') ): the_row();

        // vars

        $heading = get_sub_field('exhibitors_heading');
        $desc = get_sub_field('exhibitors_description');
        $toggle_cta = get_sub_field('add_exhibitors_cta');             // display button?
        $cta_button = get_sub_field('exhibitors_cta');
        $cta_link = get_sub_field('exhibitors_cta_link');
        $cta_tab = get_sub_field('exhibitors_new_tab');
        $which_image = get_sub_field('exhibitors_image_spot');         // left or right?
        $image_left = get_sub_field('exhibitors_image_on_left');
        $image_right = get_sub_field('exhibitors_image_on_right');

        // Determine if link will open a new tab

        if ( $toggle_cta === "Yes") {

            if ( $cta_tab === "Yes" ) {

                $link_target = "_blank";

            } else {

                $link_target = "_parent";

            }
        } else {

            // no cta link

        }

        ?>




        <?php if ( $which_image === "Left" ) {

            // image on left

            ?>
            <div class="row">
                <div class="main-content-row left-img custom<?php echo $count++; ?>">
                    <div class="right-text">

                        <div class="col-sm-4">
                            <img src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>"
                                 class="image-left parallax img-responsive" />
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="text-wrapper">
                                <div class="heading">
                                    <h2><?php echo $heading; ?></h2>
                                </div>

                                <div class="description">
                                    <?php echo $desc; ?>
                                </div>

                                <?php if ( $toggle_cta === "Yes" ) {

                                    // show CTA button


                                    ?>

                                    <div class="cta">
                                        <a class="btn btn-standard clearfix"
                                           target="<?php echo $link_target; ?>"
                                           href="<?php echo $cta_link; ?>" ><?php echo $cta_button; ?></a>
                                    </div>

                                <?php } else {

                                    // we do not display the CTA

                                } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <?php } elseif ( $which_image === "Right" ) {

            // image on right

            ?>
            <div class="row">
                <div class="main-content-row right-img custom<?php echo $count++; ?>">
                    <div class="left-text">
                        <div class="col-sm-5 col-sm-offset-2">
                            <div class="text-wrapper">
                                <div class="heading">
                                    <h2><?php echo $heading; ?></h2>
                                </div>

                                <div class="description">
                                    <?php echo $desc; ?>
                                </div>

                                <?php if ( $toggle_cta === "Yes" ) {

                                    // show CTA button


                                    ?>

                                    <div class="cta">
                                        <a class="btn btn-standard clearfix"
                                           target="<?php echo $link_target; ?>"
                                           href="<?php echo $cta_link; ?>" ><?php echo $cta_button; ?></a>
                                    </div>

                                <?php } else {

                                    // we do not display the CTA

                                } ?>
                            </div>
                        </div>

                        <!--  stack this image on top when in mobile view or remove image -->
                        <div class="col-sm-4 col-sm-offset-1">
                            <img src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>" class="image-right img-responsive" />
                        </div>

                    </div>
                </div>
            </div>

        <?php } else {
            // do nothing

        } ?>


    <?php endwhile; ?>

    <?php endif; ?>




    <!-- Exhibitors -->
            <div class="container">


                <!-- Exhibitors  -->
                <?php
                if(is_page('exhibitors')) {
                    $args = array(
                        'vendor_type'	   =>  'exhibitor',
                        'orderby'          => 'title',
                        'order'            => 'ASC',
                        'post_type'        => 'sponsor',
                        'post_status'      => 'publish',
                        'posts_per_page'   => -1
                    );

                    $myposts = get_posts( $args );
                    // set up grid here
                    echo ' <div class="row">';
                        echo ' <div class="main-content-row grid-layout" >';

                        foreach ($myposts as $post) : setup_postdata( $post );
                            // this is what opens your modal - edit as needed
                            // reformat company title
                            $company = get_the_title();
                            $company = str_replace(' ', '-', $company);
                            $logo = wp_get_attachment_image(get_field('company_logo'),'thumbnail');?>

                            <!-- Button Trigger  -->
                            <div class="col-sm-3">
                                <button class="show-modal center-block" type="button"  data-toggle="modal" data-target="#<?php echo $company;?>"><?php echo $logo; ?></button>
                            </div>

                            <!-- Modal  -->
                            <?php
                            $url = get_field('company_url');
                            $prettyUrl = get_field('company_url_name');
                            $snippet = get_field('company_snippet');
                            $twitter = get_field('company_twitter_url');
                            $linkedIn = get_field('company_linkedin_url');
                            $facebook = get_field('company_facebook_url');
                            $email = get_field('company_email'); ?>


                            <div class="modal fade" id="<?php echo $company;?>" role="dialog" arial-labelledby="<?php echo $company;?>-label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="x-close" aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3><?php the_title();?></h3>
                                        <?php if($url) {
                                            echo '<span class="company-url clearfix">';
                                            if($prettyUrl) {
                                                echo $prettyUrl;
                                            } else {
                                                echo $url;
                                            }
                                            echo '</a>';
                                        }

                                        if ($snippet) {
                                            echo '<div class="snippet clearfix">'.$snippet.'</div>';
                                        }
                                        if ($twitter || $linkedIn || $facebook) { ?>
                                        <div class="modal-social clearfix">
                                            <div class="modal-social-wrapper">
                                                <ul class="social">
                                                    <?php if($twitter) { ?>
                                                        <li class="item"><a href="<?php echo $twitter;?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                                    <?php }
                                                    if ($linkedIn) { ?>
                                                        <li class="item"><a href="<?php echo $linkedIn;?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                                    <?php }
                                                    if($facebook) {?>
                                                        <li class="item"><a href="<?php echo $facebook;?>" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            <?php }
                                            if ($email) { ?>
                                                <div class="modal-email-wrapper">
                                                    <a href="mailto:<?php echo $email;?>" class="email" target="_blank"><i class="fa fa-envelope-o"></i></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div><!-- end .modal-dialog  -->
                            </div><!-- end modal  -->
                        <?php endforeach;
                        // close grid here
                        echo '</div><!-- end .main-content-row -->';
                    echo '</div><!-- end .row -->';
                    wp_reset_postdata();
                } // end exhibitors

                    if(is_page('sponsors')) {
                        $argsAll = array(
                            'vendor_type'	   =>  'sponsor',
                            'post_type'        => 'sponsor',
                            'post_status'      => 'publish',
                            'orderby'          => 'title',
                            'order'            => 'ASC',
                            'posts_per_page'   => -1
                        );

                        $sponsors = get_posts($argsAll);
                        // set up grid here
                        echo ' <div class="row">';

                        foreach ($argsAll as $post) : setup_postdata( $post );
                            // this is what opens your modal - edit as needed
                            // reformat company title
                            $company = get_the_title();
                            $company = str_replace(' ', '-', $company);
                            $logo = wp_get_attachment_image(get_field('company_logo'),'thumbnail');?>

                            <!-- Button Trigger  -->
                            <div class="col-sm-3">
                                <button class="show-modal center-block" type="button"  data-toggle="modal" data-target="#<?php echo $company;?>"><?php echo $logo; ?></button>
                            </div>

                            <!-- Modal  -->
                            <?php
                            $url = get_field('company_url');
                            $prettyUrl = get_field('company_url_name');
                            $snippet = get_field('company_snippet');
                            $twitter = get_field('company_twitter_url');
                            $linkedIn = get_field('company_linkedin_url');
                            $facebook = get_field('company_facebook_url');
                            $email = get_field('company_email'); ?>


                            <div class="modal fade" id="<?php $company;?>" role="dialog" arial-labelledby="<?php echo $company;?>-label" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-header">
                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="x-close" aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3><?php the_title();?></h3>
                                        <?php if($url) {
                                            echo '<span class="company-url clearfix">';
                                            if($prettyUrl) {
                                                echo $prettyUrl;
                                            } else {
                                                echo $url;
                                            }
                                            echo '</a>';
                                        }

                                        if ($snippet) {
                                            echo '<div class="snippet clearfix">'.$snippet.'</div>';
                                        }
                                        if ($twitter || $linkedIn || $facebook) { ?>
                                        <div class="modal-social clearfix">
                                            <div class="modal-social-wrapper">
                                                <ul class="social">
                                                    <?php if($twitter) { ?>
                                                        <li class="item"><a href="<?php echo $twitter;?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/dist/images/rsoc-twitter.svg" alt="" class="rsoc icon"></</li>
                                                    <?php }
                                                    if ($linkedIn) { ?>
                                                        <li class="item"><a href="<?php echo $linkedIn;?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/dist/images/rsoc-linkedin.svg" alt="" class="rsoc icon"></a></li>
                                                    <?php }
                                                    if($facebook) {?>
                                                        <li class="item"><a href="<?php echo $facebook;?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/dist/images/rsoc-faceook.svg" alt="" class="rsoc icon"></a></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                            <?php }
                                            if ($email) { ?>
                                                <div class="modal-email-wrapper">
                                                    <a href="mailto:<?php echo $email;?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/dist/images/rsoc-email.svg" alt="" class="rsoc"></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div><!-- end .modal-dialog  -->
                            </div><!-- end modal  -->
                        <?php endforeach;
                        // close grid here
                        echo '</div><!-- end .main-content-row -->';
                    echo '</div><!-- end .row -->';
                    wp_reset_postdata();


                }  // end sponsors

                ?>

            </div> <!-- /.container -->

</main>

