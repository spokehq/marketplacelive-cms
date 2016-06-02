
<!-- .main removed from base template  -->

    <main class="main">

        <?php

        // assignments

        $link_target = "_blank";                                   // pre-assign link target value
        $count = "1";                                              // row margin overrides

        ?>

        <div class="row">
   
            <div class="main-content-row custom<?php echo $count++; ?>">
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="connect-title">
                        <?php the_field('connect_page_heading'); ?>
                    </div>
                </div>
            </div>

        </div>




        <div class="row">
            <div class="main-content-row custom<?php echo $count++; ?>">

                <div class="col-sm-offset-2 col-sm-8">
                    <?php if( have_rows('add_connection') ): ?>


                        <?php while( have_rows('add_connection') ): the_row();

                            // Telx Member vars

                            $t_role = get_sub_field('functional_role');
                            $t_member = get_sub_field('member_name');
                            $t_title = get_sub_field('member_title');
                            $t_phone = get_sub_field('member_phone');
                            $t_email = get_sub_field('member_email');



                            ?>


                            <div class="member-wrapper">
                                <div class="col-md-6 ">
                                   <div class="role">
                                       <?php if ($t_role): ?>
                                           <?php echo $t_role ?>
                                       <?php endif; ?>
                                   </div>
                                   <div class="member">
                                       <?php if ($t_member): ?>
                                           <?php echo $t_member ?>
                                       <?php endif; ?>
                                   </div>
                                   <div class="title">
                                       <?php if ($t_title): ?>
                                           <?php echo $t_title ?>
                                       <?php endif; ?>
                                   </div>
                                   <div class="digits">
                                       <?php if ($t_phone): ?>
                                           <a href="tel:<?php echo
                                           preg_replace("/[.,+,-,' ']/", "", $t_phone); ?>"><?php echo $t_phone ?></a>
                                       <?php endif; ?>
                                   </div>
                                   <div class="digits">
                                       <?php if ($t_email): ?>
                                           <a href="mailto:<?php echo
                                           antispambot( $t_email ) ?>" ><?php echo antispambot( $t_email ) ?></a>
                                       <?php endif; ?>
                                   </div>
                               </div>
                            </div>



                        <?php endwhile; ?>

                    <?php endif; ?>
                 </div>
            </div>
        </div>


        <div class="main-content-row custom<?php echo $count++; ?>">
            <div class="row">
                <div class="social-wrapper">
                    <div class="col-sm-offset-2 col-sm-8">
                        <ul class="social">
                            <li class="item"><a href="https://vimeo.com/telx"
                                                target="_blank"><i class="fa fa-vimeo"></i></a></li>
                            <li class="item"><a href="https://plus.google.com/+TelxGroup"
                                                target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li class="item"><a href="https://twitter.com/TelxMPLIVE"
                                                target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="item"><a href="http://www.linkedin.com/company/telx"
                                                target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li class="item"><a href="https://www.facebook.com/MarketplaceLive/"
                                                target="_blank"><i class="fa fa-facebook-official"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>


        <div class="secondary-content-row custom<?php echo $count++; ?>">
            <div class="row">

                <div class="col-sm-offset-2 col-sm-8">
                    <h2 class="heading">
                        <?php echo get_field('connect_first_heading'); ?>
                    </h2>

                    <div class="description">
                        <?php echo get_field('first_section'); ?>
                    </div>
                </div>

            </div>
        </div>

        <div class="secondary-content-row custom<?php echo $count++; ?>">
            <div class="row">

                <div class="col-sm-offset-2 col-sm-8">
                    <h2 class="heading">
                        <?php echo get_field('connect_second_heading'); ?>
                    </h2>

                    <div class="description">
                        <?php echo get_field('second_section'); ?>
                    </div>
                </div>

            </div>
        </div>

    </main>


