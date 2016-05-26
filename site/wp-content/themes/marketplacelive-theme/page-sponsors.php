<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'sponsors-header'); ?>
 <?php get_template_part('templates/content', 'sponsors-page'); ?>
<?php endwhile; ?>
