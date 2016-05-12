<div class="top-content">
    <header class="banner navbar navbar-default navbar-static-top" role="banner">
        <div class="container">

            <div class="navbar-header">
                <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">Marketplace<span>LIVE</span></a>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
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

    <div class="container">
        <div class="col-sm-3"></div>
        <div class="col-sm-8">
            <div class="page-header">


                <H4>A COMMUNITY BUILDING FOR DIGITAL SUCCESS</H4>

                <?php use Roots\Sage\Titles; ?>
                    <H1><?= Titles\title(); ?></H1>


            </div>
        </div>
    </div>
</div>
