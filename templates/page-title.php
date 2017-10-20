<div class="title">


  <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
  <div class="title__overlay">

  </div>
  <img src="<?php echo $url ?>" />
  <h1 class="title__page-title"><?php the_title(); ?></h1>
  <p class="title__page-subheader"><?php the_post_thumbnail();
echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
</div>
