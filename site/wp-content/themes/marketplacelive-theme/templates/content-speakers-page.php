
<!-- .main removed from base template  -->

    <main id="main" class="main">

        <div class="container">

            <?php if( have_rows('introduction') ):

            // assignments

            $link_target = "_blank";                                   // pre-assign link target value
            $count = "1";                                              // row margin overrides

            $intro = get_field('introduction');

            ?>

            <div class="row">
                <div class="main-content-row custom<?php echo $count++; ?>">
                    <div class="col-sm-offset-2 col-sm-8">
                        <div class="text-wrapper introduction">
                            <?php echo $intro; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif ?>

            <?php // flexible content layout

             if( have_rows('build_speaker') ):

                while( have_rows('build_speaker') ): the_row();

                // check row layout
                    if( get_row_layout() == 'add_speaker' ):
                        
                        if( have_rows('image') ):
                            while ( have_rows('image') ) : the_row();

                                $image = get_sub_field('image');
                                echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';

                            endwhile;
                            
                        endif;

                        if( have_rows('full_name') ):
                            while ( have_rows('full_name') ) : the_row();

                                $full_name = get_sub_field('full_name');
                                echo $full_name;

                            endwhile;
                        endif;

                        if( have_rows('title') ):
                            while ( have_rows('title') ) : the_row();

                                $title = get_sub_field('title');
                                echo $title;

                            endwhile;
                        endif;

                        if( have_rows('company') ):
                            while ( have_rows('company') ) : the_row();

                                $company = get_sub_field('company');
                                echo $company;

                            endwhile;
                        endif;

                        if( have_rows('short_heading') ):
                            while ( have_rows('short_heading') ) : the_row();

                                $heading = get_sub_field('short_heading');
                                echo $heading;

                            endwhile;
                        endif;

                        if( have_rows('bio') ):
                            while ( have_rows('bio') ) : the_row();

                                $bio = get_sub_field('bio');
                                echo $bio;

                            endwhile;
                        endif;

                        echo '<div class="modal-social clearfix">';
                            echo '<div class="modal-social-wrapper">';
                                echo '<ul class="social">';

                                    if( have_rows('google_url') ):
                                        while ( have_rows('google_url') ) : the_row();
                                            $google = get_sub_field('google_url');
                                            echo '<li class="item"><a href="' . $google . '" 
                                                      target="_blank"><i class="fa fa-google-plus"></a></li>';
                                        endwhile;
                                    endif;

                                    if( have_rows('twitter_url') ):
                                        while ( have_rows('twitter_url') ) : the_row();
                                            $twitter = get_sub_field('twitter_url');
                                            echo '<li class="item"><a href="' . $twitter . '" 
                                                      target="_blank"><i class="fa fa-twitter"></a></li>';
                                        endwhile;
                                    endif;

                                    if( have_rows('linkedin_url') ):
                                        while ( have_rows('linkedin_url') ) : the_row();
                                            $linkedIn = get_sub_field('linkedin_url');
                                            echo '<li class="item"><a href="' . $linkedIn . '" 
                                                      target="_blank"><i class="fa fa-linkedin"></a></li>';
                                        endwhile;
                                    endif;

                                    if( have_rows('facebook_url') ):
                                        while ( have_rows('facebook_url') ) : the_row();
                                            $facebook = get_sub_field('facebook_url');
                                            echo '<li class="item"><a href="' . $facebook . '" 
                                                      target="_blank"><i class="fa fa-facebook-official"></a></li>';
                                        endwhile;
                                    endif;

                                echo'</ul>'; // .social
                            echo'</div>'; // .modal-social-wrapper
                       echo '</div>'; // .modal-social


                    endif; // end add_speaker


                endwhile; // end build_speaker
            else :

                // no layouts found

            endif; ?>



        </div> <!-- /.container -->

    </main>


