<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'come-back-soon-header'); ?>
  <?php get_template_part('templates/content', 'come-back-soon-page'); ?>
<?php endwhile; ?>
