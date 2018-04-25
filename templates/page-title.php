<?php

// variables
$title_subheader = get_field('title-subheader');
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

?>

<section class="banner" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; ">
  <div class="banner__overlay"></div>
  <img src="<?php echo $url ?>" />
  <div class="banner__text">
    <h1 class="banner__header"><?php the_title(); ?></h1>
    <p class="banner__subheader"><?php echo $title_subheader ?></p>
  </div>
</section>
