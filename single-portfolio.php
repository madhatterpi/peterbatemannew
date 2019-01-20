<?php get_template_part('templates/page', 'title'); ?>

<section class="portfolio-section">

  <div class="section">
    <div class="portfolio-intro">
      <div class="column portfolio-intro__col">
        <h2 class="header header--lined portfolio__header">the brief</h2>
        <p><?php the_field('portfolio-brief'); ?></p>
      </div>
      <div class="column portfolio-intro__col">
        <h2 class="header header--lined portfolio__header">objectives</h2>
        <?php if( get_field('objective-one') ): ?>
          <div class="cell">
            <span class="bullet-line"></span><span class="portfolio-into__objectives"><?php the_field('objective-one'); ?></span>
          </div>
        <?php endif; ?>

        <?php if( get_field('objective-two') ): ?>
          <div class="cell">
            <span class="bullet-line"></span><span class="portfolio-into__objectives"><?php the_field('objective-two'); ?></span>
          </div>
        <?php endif; ?>

        <?php if( get_field('objective-three') ): ?>
          <div class="cell">
            <span class="bullet-line"></span><span class="portfolio-into__objectives"><?php the_field('objective-three'); ?></span>
          </div>
        <?php endif; ?>

        <?php if( get_field('objective-four') ): ?>
          <div class="cell">
            <span class="bullet-line"></span><span class="portfolio-into__objectives"><?php the_field('objective-four'); ?></span>
          </div>
        <?php endif; ?>


      </div>
    </div>
  </div>

<div class="pic">
  <div class="column portfolio-image__container">
    <?php
    $image = get_field('portfolio-brief-image');
    $size = 'large'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
      echo wp_get_attachment_image( $image, $size );
    }
    ?>
    <img class="portfolio-reveal" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>
</div>

<div class="section">
  <div class="row">
    <div class="column content-padding">
      <h2 class="header header--lined portfolio__header">the approach</h2>
      <p><?php the_field('portfolio-approach'); ?></p>
    </div>
  </div>
</div>

<div class="pic">
  <div class="column portfolio-image__container">
    <?php
    $image = get_field('portfolio-approach-image');
    $size = 'large'; // (thumbnail, medium, large, full or custom size)
    if( $image ) {
    	echo wp_get_attachment_image( $image, $size );
    }
    ?>
    <img class="portfolio-reveal  box-shadow" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>
</div>

<div class="section padding-bottom-none">
  <div class="row">
    <div class="column content-padding">
      <h2 class="header header--lined portfolio__header">the results</h2>
      <p><?php the_field('portfolio-results'); ?></p>
      <?php
        if ( get_field("portfolio-review") ) {
          ?>
            <p class="portfolio__review">"<?php the_field('portfolio-review'); ?>"</p>
          <?php
        }
       ?>
    </div>
  </div>

      <div class="portfolio-button__outer flex-center">
        <a class="button button--border" href="<?php echo the_permalink() ?>/portfolio">back to portfolio</a>
      </div>





</div>

</section>

<?php get_template_part('templates/page', 'get-started'); ?>
