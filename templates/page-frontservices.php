<section class="container-fluid services-section section">

  <div class="skills">
    <h1 class="header header--lined services-section__header">What I do</h1>
    <p class="services-section__intro">Whether you need a completely new site along with a new logo or an overhaul of an e-commerce site, I have the skill set to help you produce it.</p>
  </div>

  <?php
  $args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => '4'
  );
  $services_loop = new WP_Query( $args );
  $count = 0;
  ?>
    <div class="services-section__row skills">
      <?php
  if ( $services_loop->have_posts() ) :
    while ( $services_loop->have_posts() ) : $services_loop->the_post();
      // Set variables
      $title = get_the_title();
      $excerpt = get_the_excerpt();
      $icon = get_field("icon");
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );


      if (++$count == 3) {
        echo '</div><div class="services-section__row skills">';
      }
      // Output
      ?>

      <div class="skills__column">
        <div class="skills__flex">
          <div class="skills__icon show">
            <?php echo $icon; ?>
          </div>
          <h2 class="header skills__header"><?php echo $title; ?></h2>
        </div>
        
        <p class="skills__text"><?php echo $excerpt; ?></p>
      </div>

      <?php
      endwhile;
    wp_reset_postdata();
  endif;
  ?>


  </div>

  <a class="button button--border button--no-margin skills-btn" href="<?php echo site_url('/services') ?>">Find out more</a>


    </div>
</section>
