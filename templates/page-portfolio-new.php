

<section class="section portfolio-s">
  <div class="portfolio-container">

    <?php
    // Portfolio array
    $args = [
        'category_name'    => 'portfolio',
        'posts_per_page'   => -1,
        'order'            => 'ASC'
    ];


// Portfolio query
$portfolio_query = new WP_Query( $args ); ?>

<?php if ( $portfolio_query->have_posts() ) : ?>

	<!-- pagination here -->
	<!-- the loop -->
	<?php while ( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
    <?php
      // Variables
      $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      $url = get_permalink( $post->ID );
      $i = 0;
      if( $i > 3 )
             $class = 'omega';
           else
             $class = '';
    ?>


<a class="col col-md col-one project <?php echo $class ?>" style="background: url('<?php echo $thumbnail_url ?>'); background-position: 50% 50%; background-size: cover;" href="<?php echo $url ?>">
      <div class="project__inner">
        <div class="project__text">
          <h2 class="project__header"><?php the_title(); ?></h2>
          <span class="project__subheader"><?php echo get_post_meta(get_the_ID(), 'project-details', true); ?></span>
        </div>
      </div>

  </a>
  <?php $i++; ;
  endwhile ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


  </div>
</section>
