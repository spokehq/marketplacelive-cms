<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'agenda-header'); ?>
 <?php get_template_part('templates/content', 'agenda-page'); ?>
<?php endwhile; ?>
