
<!-- .main removed from base template  -->

    <main class="main">

        <?php

        // assignments

        $link_target = "_blank";                                   // pre-assign link target value
        $count = "1";                                              // row margin overrides

        ?>

        <?php

        // check if the flexible content field has rows of data
        if( have_rows('build_agenda') ):

            // loop through the rows of data
            while ( have_rows('build_agenda') ) : the_row();

                // check current row layout
                if( get_row_layout() == 'new_agenda_item' ):

                    // check if the nested repeater field has rows of data
                    if( have_rows('time_position') ):

                        $time_position = get_sub_field( 'time_position' );

                        echo $time_position;

                    endif; // time field

                    // check if the nested repeater field has rows of data
                    if( have_rows('time') ):

                        $time = get_sub_field( 'time' );

                        echo $time;

                    endif; // time field

                    // check if the nested repeater field has rows of data
                    if( have_rows('set_period') ):

                        $period = get_sub_field( 'set_period' );

                        echo $period;

                    endif; // set_period field

                    // check if the nested repeater field has rows of data
                    if( have_rows('session_title') ):

                        $session_title = get_sub_field( 'session_title' );

                        echo $session_title;

                    endif; // session_title field

                    // check if the nested repeater field has rows of data
                    if( have_rows('short_text') ):

                        $short_text = get_sub_field( 'short_text' );

                        echo $short_text;

                    endif; // short_text field

                    // check if the nested repeater field has rows of data
                    if( have_rows('speaker') ):

                        $speaker = get_sub_field( 'speaker' );

                        echo $speaker;

                    endif; // speaker field

                    // check if the nested repeater field has rows of data
                    if( have_rows('location') ):

                        $location = get_sub_field( 'location' );

                        echo $location;

                    endif; // location field

                    // check if the nested repeater field has rows of data
                    if( have_rows('description') ):

                        $description = get_sub_field( 'description' );

                        echo $description;

                    endif; // description field

                endif; // new_agenda_item ( layout: repeater )

            endwhile; // build_agenda ( flexible content )

        else :

            // no layouts found

        endif;

        ?>


    </main>


