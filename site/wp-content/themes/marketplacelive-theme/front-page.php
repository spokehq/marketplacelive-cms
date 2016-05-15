<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'home-header'); ?>
  <?php get_template_part('templates/content', 'home-page'); ?>
<?php endwhile; ?>
