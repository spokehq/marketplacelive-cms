<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'connect-header'); ?>
 <?php get_template_part('templates/content', 'connect-page'); ?>
<?php endwhile; ?>
