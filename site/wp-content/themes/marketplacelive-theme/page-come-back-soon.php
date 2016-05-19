<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'comeback-header'); ?>
  <?php get_template_part('templates/content', 'comeback-page'); ?>
<?php endwhile; ?>
