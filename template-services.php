<?php
/**
 * Template Name: Services Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'title'); ?>
<?php get_template_part('templates/page', 'services-new'); ?>
<?php get_template_part('templates/page', 'get-started'); ?>
<?php endwhile; ?>
