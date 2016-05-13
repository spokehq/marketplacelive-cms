<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
            A COMMUNITY BUILDING FOR DIGITAL SUCCESS
        </div>
        <div class="col-sm-6">
            <!--  SOCIAL LINKS -->

        </div>
    </div>
    <div class="row">
        <div class="midsection">
            <div class="col-sm-6">
                <?php dynamic_sidebar('sidebar-footer-1'); ?>
            </div>
            <div class="col-sm-3">
                <?php dynamic_sidebar('sidebar-footer-2'); ?>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-standard" type="button" data-toggle="modal" data-target="#regModal">REGISTER</button>
            </div>
            <div class="col-sm-offset-6">
                <div class="hosting"><span class="proudly-hosted">PROUDLY&nbsp;HOSTED&nbsp;BY</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/footer-telx-logo.png" alt="Digital Realty | TELX" class="digital-realty"></div>
            </div>
        </div>
    </div>


    <div class="row">
      <?php dynamic_sidebar('sidebar-footer-full-bottom'); ?>
      <div class="col-sm-12">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
      </div>
    </div>
  </div>
</footer>