<?php

// vars
$title_subheader = get_field('title-subheader');

?>

<div class="title">


  <?php
  if (!in_category('blog')) {
    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );
  };
  ?>
  <div class="title__overlay">

  </div>
  <img src="<?php echo $url ?>" />
  <h1 class="title__page-title"><?php the_title(); ?></h1>
  <!-- <p class="title__page-subheader">php echo $title_subheader ?></p> -->
</div>
