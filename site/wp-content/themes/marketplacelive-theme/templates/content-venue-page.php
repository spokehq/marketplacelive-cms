<!-- .main removed from base template  -->

<main class="main">

    <?php if( have_rows('venue_row_layout') ):

        // assignments

        $link_target = "_blank";                                   // pre-assign link target value
        $count = "1";                                              // row margin overrides



        ?>


        <div class="row">
            <div class="main-content-row custom<?php echo $count++; ?>">
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="text-wrapper introduction <?php echo get_field('introduction_color'); ?>">
                        <?php the_field('venue_introduction'); ?>
                    </div>
                </div>
            </div>
        </div>



        <?php while( have_rows('venue_row_layout') ): the_row();

            // vars

            $heading = get_sub_field('venue_heading');
            $heading_color = get_sub_field('heading_color');
            $desc = get_sub_field('venue_description');
            $toggle_cta = get_sub_field('add_venue_cta');             // display button?
            $cta_button = get_sub_field('venue_cta');
            $cta_link = get_sub_field('venue_cta_link');
            $cta_tab = get_sub_field('venue_new_tab');
            $which_image = get_sub_field('venue_image_spot');         // left or right?
            $image_left = get_sub_field('venue_image_on_left');
            $image_right = get_sub_field('venue_image_on_right');

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
                                        <h2 class="<?php echo $heading_color ?>"><?php echo $heading; ?></h2>
                                    </div>

                                    <div class="description">
                                        <?php echo $desc; ?>
                                    </div>
          <!-- TODO: fix hardcoded target -->
<!--                                    --><?php //if ( $toggle_cta === "Yes" ) {
//
//                                        // show CTA button
//
//
//                                        ?>

                                        <div class="cta">
                                            <a class="btn btn-standard clearfix"
                                               target="_blank"
                                               href="<?php echo $cta_link; ?>" ><?php echo $cta_button; ?></a>
                                        </div>

<!--                                    --><?php //} else {
//
//                                        // we do not display the CTA
//
//                                    } ?>
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
                                        <h2 class="<?php echo $heading_color ?>"><?php echo $heading; ?></h2>
                                    </div>

                                    <div class="description">
                                        <?php echo $desc; ?>
                                    </div>

<!--                                    --><?php //if ( $toggle_cta === "Yes" ) {
//
//                                        // show CTA button
//
//
//                                        ?>
<!-- TODO: fix hardcoded target -->
                                        <div class="cta">
                                            <a class="btn btn-standard clearfix"
                                               target="_blank"
                                               href="<?php echo $cta_link; ?>" ><?php echo $cta_button; ?></a>
                                        </div>

<!--                                    --><?php //} else {
//
//                                        // we do not display the CTA
//
//                                    } ?>
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




