<?php $main_row = new WP_Query(array(
    'post_type' => 'custom_page'
)); ?>

<!-- queries of member post type -->
<?php while ( $main_row->have_posts()) : $main_row->the_post(); ?>

    <?php if( have_rows('row_layout') ): ?>


            <?php while( have_rows('row_layout') ): the_row();

                // vars

                $heading = get_sub_field('row_heading');
                $desc = get_sub_field('row_description');
                $toggle_cta = get_sub_field('add_cta');             // display button?
                $cta_button = get_sub_field('cta_name');
                $cta_link = get_sub_field('cta_link');
                $which_image = get_sub_field('image_spot');         // left or right?
                $image_left = get_sub_field('image_on_left');
                $image_right = get_sub_field('image_on_right');
                $full_image = get_sub_field('add_image_and_link');      // add a full width image? Default is 'no'.
                $span_image = get_sub_field('add_full_image');
                $span_url = get_sub_field('add_url_link');
                $span_overlay = get_sub_field('add_text_overlay');  // text placed over image span

                ?>


            <div class="row">

                <?php if ( $which_image === "Left" ) {

                        // image on left

                    ?>

                    <div class="main-content-row">
                       <div class="right-text">

                           <div class="col-sm-4">
                               <img src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>"
                                    class="image-left img-responsive" />
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

                <?php } elseif ( $which_image === "Right" ) {

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
                                <img src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>" class="image-right img-responsive" />
                            </div>

                        </div>
                    </div>


                <?php } else {
                    // do nothing

                 } ?>

                <?php if ( $full_image === "Yes" ) {

                    // display image

                ?>

                    <div class="main-content-row">
                        <div class="full-image">

                            <div class="col-sm-12">
                                <div class="image-container">

                                    <a href="<?php echo $span_url; ?>" class="">
                                        <img src="<?php echo $span_image['url']; ?>" alt="<?php echo $span_image['alt']; ?>"
                                        class="span-image center-block img-responsive" />
                                    </a>

                                    <h2 class="span-overlay">

                                        <?php echo $span_overlay; ?>

                                    </h2>

                                </div>
                            </div>

                        </div>
                    </div>



                <?php } elseif ( $full_image === "No" ) {

                    // do nothing

                 } else {

                    // do nothing

                } ?>
                
            </div>

            <?php endwhile; ?>



    <?php endif; ?>

<?php endwhile; ?>