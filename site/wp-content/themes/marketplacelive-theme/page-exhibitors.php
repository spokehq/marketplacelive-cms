<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'exhibitors-header'); ?>
 <?php get_template_part('templates/content', 'exhibitors-page'); ?>
<?php endwhile; ?>
