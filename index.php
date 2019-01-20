<section class="banner"
  style="
  background-image: url('<?= get_template_directory_uri(); ?>/dist/images//hero/macrev.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  ">
  <div class="banner__overlay"></div>
  <img src="<?php echo $url ?>" />
  <div class="banner__text">
  	<h1 class="banner__header">Blog</h1>
  	<div class="banner__subheader">News, views and Wordpress tips</div>
  </div>
</section>

<section class="section blog section-padded">
	<div class="blog-section">

		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part('templates/content-blog', get_post_type() != 'post' ? get_post_type() : get_post_format());
			} // end while
		} // end if
		?>

	</div>
</section>
