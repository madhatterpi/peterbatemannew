<section class="container-fluid services-section section">

  <div class="services-section__row">
    <p class="services-section__intro">Whether you need a completely new site along with a new logo or an overhaul of an e-commerce site, I have the skill set to help you produce it.</p>
  </div>

  <?php
  $args = array(
    'post_type' => 'services',
    'post_status' => 'publish',
    'posts_per_page' => '9'
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
      $title_link = strtolower(get_the_title());


      if ( (++$count == 4) || ($count == 7) ) {
        echo '</div><div class="services-section__row skills">';
      }
      // Output
      ?>

      <div class="skills__column skills__column--small">
      <div class="skills__flex">
          <div class="skills__icon show">
            <?php echo $icon; ?>
          </div>
          <h2 class="header skills__header"><?php echo $title; ?></h2>
        </div>
        <p class="skills__text"><?php echo $excerpt; ?></p>
        <a class="skills__read" href="<?php echo get_site_url(); ?>/services/<?php echo sanitize_title_with_dashes($title_link); ?>">Read More</a>
      </div>

      <?php
      endwhile;
    wp_reset_postdata();
  endif;
  ?>
  </div>




    </div>
</section>
