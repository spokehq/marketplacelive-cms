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
                <div class="col-sm-12">
                    <button class="btn btn-standard" type="button" data-toggle="modal" data-target="#regModal">REGISTER</button>

                </div>
            </div>
        </div>

    </div>


</div>
<!-- Modal Login -->
<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="regModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="ex">&times;</span></button>
                <h4 class="modal-title" id="regModalLabel"></h4>
            </div>
            <div class="container">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="modal-body">
                        <div
                            class="presents tk-fira-sans-2">Telx and Digital Realty Present
                        </div>
                        <h2 class="tk-fira-sans-2"><b>Connect</b> with <br>the <b>foundation</b> of the <b>digital economy.</b></h2>
                        <h3 class="tk-fira-sans-2">The <b>22nd</b> of <b>September</b> at <b>Spring Studios.</b></h3> <script src="//app-abm.marketo.com/js/forms2/js/forms2.min.js"></script> <form
                            id="mktoForm_1330"></form>
                        </div>
                </div>
            </div>
            <div class="modal-footer">

            </div>
            <div class="col-sm-2"></div>
        </div>

    </div>
</div>
</div>