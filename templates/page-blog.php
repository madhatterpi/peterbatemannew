<div class="section blog">
<h2 class="blog-section__header">blog</h2>
<div class="blog-section">

	<?php
	// the query
	$the_query = new WP_Query( array(
		 'category_name' => 'blog',
		 'posts_per_page' => 3,
		 "orderby" => "date"
	 )); ?>

	<?php if ( $the_query->have_posts() ) : ?>

		<!-- pagination here -->

		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php get_template_part('templates/content-blog', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<!-- pagination here -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>


</div>
</div>
