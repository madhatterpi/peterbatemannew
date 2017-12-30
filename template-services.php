<?php
/**
 * Template Name: Services Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'title'); ?>
<?php get_template_part('templates/page', 'services'); ?>
<?php get_template_part('templates/page', 'review'); ?>
<?php endwhile; ?>
