<?php $main_row = new WP_Query(array(
    'post_type' => 'main_event_row'
)); ?>

<!-- queries of member post type -->
<?php while ( $main_row->have_posts()) : $main_row->the_post(); ?>

    <?php if( have_rows('event_row_layout') ): ?>


            <?php while( have_rows('event_row_layout') ): the_row();

                // vars

                $heading = get_sub_field('row_heading_title');
                $desc = get_sub_field('event_row_description');
                $toggle_cta = get_sub_field('toggle_call_to_action'); // display button?
                $cta_button = get_sub_field('cta_name');
                $cta_link = get_sub_field('cta_link');
                $which_image = get_sub_field('pitch_image_side'); // left or right?
                $image_left = get_sub_field('pitch_image_left');
                $image_right = get_sub_field('pitch_image_right');
                $oembed = get_sub_field('full_width_video');

                ?>

            <?php
                 $i = 1;
            ?>

            <div class="row">

                <?php if ( $which_image === "Left" ) {

                        // image on left

                    ?>

                    <div class="main-content-row">
                       <div class="right-text">

                           <div class="col-sm-4">
                               <img src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt'] ?>" class="image-left img-responsive" />
                           </div>
                           <div class="col-sm-8">
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

                <?php } elseif ( $which_image == "Right" ) {

                        // image on right

                    ?>

                    <div class="main-content-row">
                        <div class="left-text">

                            <div class="col-sm-8">
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

                            <!--  stack this image on top when in mobile view or remove image -->
                            <div class="col-sm-4">
                                <img src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt'] ?>" class="image-right img-responsive" />
                            </div>

                        </div>
                    </div>


                <?php } else { ?>
                    <div class="main-content-row">
                        <div class="full-video">

                            <div class="col-sm-12">
                                <div class="embed-container">
                                    <?php echo $oembed['url']; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php } ?>

            </div>

            <?php endwhile; ?>



    <?php endif; ?>

<?php endwhile; ?>