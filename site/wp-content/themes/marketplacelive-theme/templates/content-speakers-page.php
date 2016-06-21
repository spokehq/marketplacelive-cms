
<!-- .main removed from base template  -->

    <main id="main" class="main">

        <div class="container">

            <?php

                // assignments

                $link_target = "_blank";                                   // pre-assign link target value
                $count = "1";                                              // row margin overrides



                ?>


                <div class="row">
                    <div class="main-content-row custom<?php echo $count++; ?>">
                        <div class="col-sm-12">
                            <div class="text-wrapper introduction <?php echo get_field('heading_color'); ?>">
                                <?php the_field('heading'); ?>
                            </div>
                        </div>
                    </div>
                </div>




            <?php // flexible content layout

            if( have_rows('build_speaker') ) :

                while( have_rows('build_speaker') ) : the_row();

                    // check row layout
                    if( get_row_layout() == 'add_speaker' ):


                        if( have_rows('full_name') ) :
                            while ( have_rows('full_name') ) : the_row();

                                echo the_sub_field('full_name');
                               // echo $full_name;

                            endwhile;
                        endif;




                    endif; // end add_speaker


                endwhile; // end build_speaker


            endif; ?>






        </div> <!-- /.container -->

    </main>


