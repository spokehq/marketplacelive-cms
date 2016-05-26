
<!-- .main removed from base template  -->

<main class="main">
    <div class="container">
        <div class="main-content-row">

            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <?php the_field('connect_page_heading'); ?>
                </div>
            </div>
            <div class="row">



                <div class="col-sm-offset-1 col-sm-10">
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
                                <div class="col-sm-6 ">
                                   <div class="role">
                                       <?php echo $t_role ?>
                                   </div>
                                   <div class="member">
                                       <?php echo $t_member ?>
                                   </div>
                                   <div class="title">
                                       <?php echo $t_title ?>
                                   </div>
                                   <div class="phone">
                                       <?php echo $t_phone ?>
                                   </div>
                                   <div class="email">
                                       <?php echo $t_email ?>
                                   </div>
                               </div>
                            </div>



                        <?php endwhile; ?>

                    <?php endif; ?>
                 </div>
            </div>
        </div>

        <div class="main-content-row">
            <div class="row">
                <div class="social-wrapper">
                    <div class="col-sm-offset-2 col-sm-8 col-xs-12">
                        <ul class="social">
                            <li class="item"><a href="https://vimeo.com/telx"
                                                target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-vimeo.svg"
                                                                     target="_blank" alt=""></a></li>
                            <li class="item"><a href="https://plus.google.com/+TelxGroup"
                                                target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/googleplus.svg"
                                                                     target="_blank" alt=""></a></li>
                            <li class="item"><a href="https://twitter.com/TelxMPLIVE"
                                                target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-twitter.svg"
                                                                     target="_blank" alt=""></a></li>
                            <li class="item"><a href="http://www.linkedin.com/company/telx"
                                                target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-linkedin.svg"
                                                                     target="_blank" alt=""></a></li>
                            <li class="item"><a href="https://www.facebook.com/MarketplaceLive/"
                                                target="_blank"><img class="icon" src="<?= get_template_directory_uri(); ?>/dist/images/soc-fb.svg"
                                                                     target="_blank" alt=""></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>


