<div class="p">
  <?php

  $image = get_field('portfolio-image-top');
  $size = 'large'; // (thumbnail, medium, large, full or custom size)

  if( $image ) {

  	echo wp_get_attachment_image( $image, $size );

  }


  ?>
<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

</div>
<p><?php the_field('portfolio-text-top'); ?></p>
<div class="p">
  <?php

  $image = get_field('portfolio-image-middle');
  $size = 'large'; // (thumbnail, medium, large, full or custom size)

  if( $image ) {

  	echo wp_get_attachment_image( $image, $size );

  }

  ?>


</div>
