<!-- .main removed from base template  -->

<main class="main">


    <div class="container">
        <div class="row">
            <div class="main-content-row">
                <?php the_field('venue_introduction'); ?>
            </div>
        </div>
    </div>

    <?php if( have_rows('venue_row_layout') ): ?>


        <?php while( have_rows('venue_row_layout') ): the_row();

            // vars

            $heading = get_sub_field('venue_heading');
            $desc = get_sub_field('venue_description');
            $toggle_cta = get_sub_field('add_venue_cta');             // display button?
            $cta_button = get_sub_field('venue_cta');
            $cta_link = get_sub_field('venue_cta_link');
            $cta_tab = get_sub_field('venue_new_tab');
            $which_image = get_sub_field('venue_image_spot');         // left or right?
            $image_left = get_sub_field('venue_image_on_left');
            $image_right = get_sub_field('venue_image_on_right');



            ?>




            <?php if ( $which_image === "Left" ) {

                // image on left

                ?>
                <div class="row">
                    <div class="main-content-row left-img">
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

                                    <div class="cta">
                                        <a class="btn btn-standard clearfix" href="<?php echo $cta_link; ?>" ><?php echo $cta_button; ?></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } elseif ( $which_image === "Right" ) {

                // image on right

                ?>
                <div class="row">
                    <div class="main-content-row right-img">
                        <div class="left-text">
                            <div class="col-sm-4 col-sm-offset-3">
                                <div class="text-wrapper">
                                    <div class="heading">
                                        <h2><?php echo $heading; ?></h2>
                                    </div>

                                    <div class="description">
                                        <?php echo $desc; ?>
                                    </div>

                                    <div class="cta">
                                        <a class="btn btn-standard clearfix" href="<?php echo $cta_link; ?>" ><?php echo $cta_button; ?></a>
                                    </div>
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




