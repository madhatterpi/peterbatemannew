<?php use Roots\Sage\Titles; ?>

<?php

// variables
$title_subheader = get_field('title-subheader');
$backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
$backgroundPageImg = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), 'full');

?>

<section class="banner" 
<?php
  if ( $backgroundImg ) { ?>
    style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: center; ">
  <?php } else { ?>
    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero/notepad.jpg') no-repeat; background-size: cover; background-position: center; ">
  <?php }
?>

  <div class="banner__overlay"></div>
  <img src="<?php echo $url ?>" />

  <div class="banner__text">
    <?php if ( is_post_type_archive('services') ) { ?>
      <h1 class="banner__header">Services</h1>
      <div class="banner__subheader">Let me do the nerdy bits</div>
    <?php } elseif ( is_post_type_archive('portfolio') ) { ?>
      <h1 class="banner__header">Portfolio</h1>
      <div class="banner__subheader">Browse my latest work</div>
    <?php } elseif ( is_home() ) { ?>
      <h1 class="banner__header">Blog</h1>
      <div class="banner__subheader">News, views and Wordpress tips</div>
    <?php }elseif ( is_404() ) { ?>
      <h1 class="banner__header">404</h1>
    <?php } else { ?>
      <h1 class="banner__header"><?= Titles\title(); ?></h1>
      <div class="banner__subheader"><?php echo $title_subheader ?></div>
    <?php } ?>
    <?php if ( is_singular( 'portfolio' ) && is_singular( 'portfolio' ) ) { ?>
      <a class="banner__website-link" href="<?php the_field("website-link") ?>"><?php echo the_field("website-link") ?></a>
    <?php } ?>
  </div>

</section>
