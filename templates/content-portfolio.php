<section class="section">


<div class="section">
  <div class="row">
    <p><?php the_field('portfolio-text-one'); ?></p>
  </div>
</div>

<div class="pic">
<?php
$image = get_field('portfolio-image-top');
$size = 'large'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

  echo wp_get_attachment_image( $image, $size );

}
?>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

</div>

<div class="section">
  <div class="row">
    <p><?php the_field('portfolio-text-two'); ?></p>
  </div>
</div>

<div class="pic">
  <?php

  $image = get_field('portfolio-image-middle');
  $size = 'large'; // (thumbnail, medium, large, full or custom size)

  if( $image ) {
  	echo wp_get_attachment_image( $image, $size );
  }
  ?>
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<div class="section">
  <div class="row">
    <p><?php the_field('portfolio-text-three'); ?></p>
  </div>
</div>



</section>
