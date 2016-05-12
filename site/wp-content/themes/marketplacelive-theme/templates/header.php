<div class="top-content">
<!--    <img src="--><?//= get_template_directory_uri(); ?><!--/assets/images/banner-main.jpg" alt="" class="banner-main img-responsive">-->
    <header class="banner navbar navbar-default navbar-static-top" role="banner">
        <div class="container">


            <div class="navbar-header">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Marketplace<span>LIVE</span></a>

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
    </header>

    <div class="big-kahuna">
        <div class="container">
            <div class="col-sm-3"></div>
            <div class="col-sm-8">
                <div>
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/rect1.svg" alt="" class="rect1">
                </div>
                <div class="page-header">


                    <H4>A COMMUNITY BUILDING FOR DIGITAL SUCCESS</H4>

                    <?php use Roots\Sage\Titles; ?>
                    <H1><?= Titles\title(); ?></H1>


                </div>
                <button class="btn btn-default" type="submit">REGISTER</button>

            </div>
        </div>

    </div>
</div>
