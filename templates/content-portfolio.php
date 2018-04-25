<section class="portfolio-section">

  <div class="section">
    <div class="row">
      <h2 class="portfolio__header">the brief</h2>
      <p><?php the_field('portfolio-text-two'); ?></p>
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

<img class="portfolio-reveal" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

</div>

<div class="section">
  <div class="row">
    <h2 class="portfolio__header">the approach</h2>
    <p><?php the_field('portfolio-text-three'); ?></p>
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
  <img class="portfolio-reveal  box-shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<div class="section padding-bottom-none">
  <div class="row">
    <h2 class="portfolio__header">the results</h2>
    <p><?php the_field('portfolio-text-four'); ?></p>
  </div>
</div>

<div class="section less-padding">
  <div class="row">
    <h2 class="portfolio__header">what the client said</h2>
    <p>"<?php the_field('portfolio-text-five'); ?>"</p>
    <a href="" class="button button--border">visit site</a>
  </div>

</div>


</section>

<?php get_template_part('templates/page', 'get-started'); ?>
