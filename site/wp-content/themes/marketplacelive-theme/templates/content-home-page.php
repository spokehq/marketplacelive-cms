

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
                $video_row = get_sub_field('add_video_row');      // add a full width image? Default is 'no'.
                $video_heading = get_sub_field('add_video_title');
                $oembed = get_sub_field('select_video');
                $video_desc = get_sub_field('video_desc');  // text placed over image span

                ?>




                <?php if ( $which_image === "Left" ) {

                        // image on left

                    ?>
                <div class="row">
                    <div class="main-content-row left-img">
                       <div class="right-text">

                           <div class="col-sm-4">
                               <img src="<?php echo $image_left['url']; ?>" alt="<?php echo $image_left['alt']; ?>"
                                    class="image-left img-responsive" />
                           </div>
                           <div class="col-sm-8">
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
                            <div class="col-sm-8">
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
                            <div class="col-sm-4">
                                <img src="<?php echo $image_right['url']; ?>" alt="<?php echo $image_right['alt']; ?>" class="image-right img-responsive" />
                            </div>

                        </div>
                    </div>
                </div>

                <?php } else {
                    // do nothing

                 } ?>


                <?php if ( $video_row === "Yes" ) {

                    // display oembed

                ?>
                <div class="container">
                    <div class="row">

                            <div class="col-sm-1"></div>

                            <div class="col-sm-10">
                                <div class="embed-container">

                                    <?php echo $oembed; ?>

                                </div>
                            </div>
                            <div class="col-sm-1"></div>
                        
                    </div>
                </div>


                <?php } elseif ( $video_row === "No" ) {

                    // do nothing

                 } else {

                    // do nothing

                } ?>
                


            <?php endwhile; ?>

    <?php endif; ?>

