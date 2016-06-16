<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'speakers-header'); ?>
 <?php get_template_part('templates/content', 'speakers-page'); ?>
<?php endwhile; ?>
