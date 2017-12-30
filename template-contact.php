<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'title'); ?>
<?php get_template_part('templates/page', 'contact'); ?>
<?php get_template_part('templates/page', 'blog'); ?>
<?php endwhile; ?>
