<div class="blog-section__outer">
<div class="column">

<h2 class="blog-section__header header">related articles</h2>
<div class="blog-section">

<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>3,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
	<?php get_template_part('templates/content-blog', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>

<?php
endwhile;
}
wp_reset_query();
}
?>
</div>
</div>
</div>
