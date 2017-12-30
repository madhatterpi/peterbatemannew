<?php
/**
 * Template Name: Portfolio Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'title'); ?>
<?php get_template_part('templates/page', 'portfolio'); ?>
<?php get_template_part('templates/page', 'blog'); ?>
<?php endwhile; ?>
