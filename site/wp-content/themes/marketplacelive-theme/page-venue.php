<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'venue-header'); ?>
 <?php get_template_part('templates/content', 'venue-page'); ?>
<?php endwhile; ?>
