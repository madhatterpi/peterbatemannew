<?php
/**
 * Template Name: Portfolio Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'title'); ?>
<?php get_template_part('templates/page', 'intro'); ?>
<?php get_template_part('templates/page', 'portfolio'); ?>
<?php get_template_part('templates/page', 'get-started'); ?>
<?php endwhile; ?>
