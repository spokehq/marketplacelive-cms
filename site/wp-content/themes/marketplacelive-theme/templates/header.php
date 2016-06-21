<header class="banner navbar navbar-default navbar-static-top" role="banner">
    <div class="container">

        <div class="header-wrap">
            <div class="navbar-header">

                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                    <!--                    Marketplace<span>LIVE</span>-->
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/marketplacelive-logo.svg" alt="MarketplaceLIVE">
                </a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">

                    <div id="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
            </div>

            <nav class="collapse navbar-collapse" role="navigation">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
                endif;
                ?>
            </nav>
        </div>

    </div>
</header>