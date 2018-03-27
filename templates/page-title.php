<?php

// variables
$title_subheader = get_field('title-subheader');
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');

?>

<section class="title" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; ">
  <div class="title__overlay"></div>
  <img src="<?php echo $url ?>" />
  <div class="title__page__text">
    <h1 class="title__page-title"><?php the_title(); ?></h1>
    <p class="title__page-subheader"><?php echo $title_subheader ?></p>
  </div>



</section>
