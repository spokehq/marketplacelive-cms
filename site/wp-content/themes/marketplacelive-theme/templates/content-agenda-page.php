
<!-- .main removed from base template  -->

    <main id="main" class="main">

        <div class="container">

            <!-- Create a top fading bar  -->
            <div class="main-content-row left-agenda custom<?php echo $count++; ?>">

                <div class="col-xs-12 col-sm-offset-1 col-sm-4 col-md-offset-2 col-md-3">
                    <div class="time">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="top-bar"></div>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <div class="session">
                    </div>
                </div>

            </div> <!-- /.main-content-row -->


        <?php

        // assignments

        $link_target = "_blank";                                   // pre-assign link target value
        $count = "1";                                              // row margin overrides
        $int = "1";

        ?>

        <?php if( have_rows('new_agenda_items') ): ?>

                <!-- parent repeater -->
                <?php while( have_rows('new_agenda_items') ): the_row();

                    // vars
                    $position = get_sub_field('time_position');
                    $start = get_sub_field('set_time');
                    $period = get_sub_field('time_period');
                    $title = get_sub_field('session_title');
                    $short = get_sub_field('short_text');


                    ?>

                        <?php if( $position === "left" ): ?>
                        <div class="row">

                            <div class="agenda-wrapper">

                                <div class="main-content-row left-agenda custom<?php echo $count++; ?>">

                                   <div class="col-xs-12 col-sm-offset-1 col-sm-4 ">
                                       <div class="time">
                                           <span class="start"><?php echo $start; ?></span>
                                           <span class="period"><?php echo $period; ?></span>
                                       </div>
                                   </div>

                                    <div class="col-sm-1">
                                        <div class="bar"></div>
                                    </div>

                                    <div class="col-xs-12 col-sm-4">
                                        <div class="session">
                                            <!-- Open modal -->
                                            <div class="title"><button type="button" data-toggle="modal" data-target="#modal<?php echo $int;?>"><?php echo $title; ?></button></div>
                                            <div class="short"><button type="button" data-toggle="modal" data-target="#modal<?php echo $int;?>"><?php echo $short; ?></button></div>
                                        </div>
                                    </div>

                                </div> <!-- /.main-content-row -->

                                <!-- Modal  -->
                                <?php   $location = get_sub_field('session_location');
                                        $description = get_sub_field('long_description');?>


                                <div class="modal fade" id="modal<?php echo $int++;?>" role="dialog" aria-labelledby="<?php echo $title;?>-label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
<!--                                        <div class="modal-header">-->
<!---->
<!--                                        </div>-->
                                        <button class="close" data-dismiss="modal" aria-label="Close">
                                            <span class="x-close" aria-hidden="true">&times;</span>
                                        </button>

                                        <div class="modal-body">



                                            <?php if($start) {
                                                echo '<span class="start">' . $start .'</span>' . '<span class="period">' . $period .'</span>';
                                            } else {
                                                // this is a required element
                                            }
                                            ?>
                                            <?php if($title) {
                                                echo '<h3>' . $title . '</h3>';
                                            } else {
                                                // print nothing
                                            }





                                                if ( have_rows('speakers') ): // sub-repeater

                                                // this is an optional field
                                                if ( have_rows('speaker_images') ): the_row();

                                                echo '<div class="speaker-images">';
                                                    echo '<ul>';
                                                        while( have_rows('speaker_images') ): the_row();
                                                        // display speaker image(s) to left of names
                                                        $image = get_sub_field('speaker_image');


                                                        echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

                                                        endwhile;
                                                        echo '</ul>';
                                                    echo '</div>';

                                                                endif;


                                                                echo '<div class="speakers">';
                                                    echo '<ul>';
                                                        while( have_rows('speakers') ): the_row();
                                                        // display each speaker as a list item
                                                        $speaker = get_sub_field('add_speaker');
                                                        $title = get_sub_field('speaker_title');

                                                        // TODO add style to add colon after speaker

                                                        echo '<li class="speaker" >' . $speaker . '<span class="colon"> : </span>' . $title . '</li>';
                                                        endwhile;
                                                        echo '</ul>';
                                                    echo '</div>';
                                                                endif; // end of speakers repeater

                                                                if($location) { // TODO add style to add colon after location
                                                                echo '<p class="location"><span>Location</span>' . '<span class="colon"> : </span>' . $location . '</p>';
                                                                                                                                                                       }

                                                                                                                                                                       if ($description) { ?>
                                                <div class="description">
                                                    <?php echo $description;?>
                                                </div>




                                            <?php } ?>




                                        </div>
                                    </div><!-- end .modal-dialog  -->
                                </div><!-- end modal  -->
                            </div><!-- end .agenda-wrapper  -->
                        </div><!-- /.row -->


                <?php endif; // end position === "left"  ?>


                        <?php if( $position === "right" ): ?>
                            <div class="row">

                                <div class="agenda-wrapper">

                                    <div class="main-content-row left-agenda custom<?php echo $int; ?>">

                                        <div class="col-xs-12 col-sm-4 col-sm-push-6">
                                            <div class="time">
                                                <span class="start"><?php echo $start; ?></span>
                                                <span class="period"><?php echo $period; ?></span>
                                            </div>
                                        </div>

                                        <div class="col-sm-1 col-sm-push-1">
                                            <div class="bar"></div>
                                        </div>

                                        <div class="col-xs-12 col-sm-offset-1 col-sm-4 col-sm-pull-5 ">
                                            <div class="session">
                                                <div class="title"><button type="button" data-toggle="modal" data-target="#modal<?php echo $int;?>"><?php echo $title; ?></button></div>
                                                <div class="short"><button type="button" data-toggle="modal" data-target="#modal<?php echo $int;?>"><?php echo $short; ?></button></div>
                                            </div>
                                        </div>

                                    </div> <!-- /.main-content-row -->

                                    <!-- Modal  -->
                                    <?php   $location = get_sub_field('session_location');
                                    $description = get_sub_field('long_description');?>


                                    <div class="modal fade" id="modal<?php echo $int++;?>" role="dialog" aria-labelledby="<?php echo $title;?>-label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">

                                            <button class="close" data-dismiss="modal" aria-label="Close">
                                                <span class="x-close" aria-hidden="true">&times;</span>
                                            </button>

                                            <div class="modal-body">

                                                <?php if($start) {
                                                    echo '<span class="start">' . $start .'</span>' . '<span class="period">' . $period .'</span>';
                                                } else {
                                                    // this is a required element
                                                }
                                                ?>
                                                <?php if($title) {
                                                    echo '<h3>' . $title . '</h3>';
                                                } else {
                                                    // print nothing
                                                }


                                                if ( have_rows('speakers') ): // sub-repeater

                                                   // this is an optional field
                                                    if ( have_rows('speaker_images') ): the_row();

                                                        echo '<div class="speaker-images">';
                                                            echo '<ul>';
                                                            while( have_rows('speaker_images') ): the_row();
                                                                // display speaker image(s) to left of names
                                                                $image = get_sub_field('speaker_image');


                                                                echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';

                                                            endwhile;
                                                            echo '</ul>';
                                                        echo '</div>';

                                                    endif;


                                                    echo '<div class="speakers">';
                                                        echo '<ul>';
                                                            while( have_rows('speakers') ): the_row();
                                                                // display each speaker as a list item
                                                                $speaker = get_sub_field('add_speaker');
                                                                $title = get_sub_field('speaker_title');

                                                                // TODO add style to add colon after speaker

                                                                echo '<li class="speaker" >' . $speaker . '<span class="colon"> : </span>' . $title . '</li>';
                                                            endwhile;
                                                    echo '</ul>';
                                                echo '</div>';
                                               endif; // end of speakers repeater

                                                if($location) { // TODO add style to add colon after location
                                                    echo '<p class="location"><span>Location</span>' . '<span class="colon"> : </span>' . $location . '</p>';
                                                }

                                                if ($description) { ?>
                                                    <div class="description">
                                                        <?php echo $description;?>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div><!-- end .modal-dialog  -->
                                    </div><!-- end modal  -->
                                </div><!-- end .agenda-wrapper  -->
                            </div><!-- /.row -->


                         <?php endif; // end position == "right" ?>


                <?php endwhile; // end parent repeater ?>


        <?php endif; // new_agenda_items ?>
        </div> <!-- /.container -->

    </main>


