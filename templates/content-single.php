<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <?php get_template_part('templates/page', 'title'); ?>

    </header>
    <div class="entry-content">
      <?php
      if ( in_category('development') || in_category('promotion') || in_category('web-design') ) {
      get_template_part('templates/content-services');
      } else if ( in_category('portfolio') ) {
      get_template_part('templates/content-portfolio');
      } else {
        get_template_part('templates/content-blogpost');
      }
      ?>

    </div>
    <!-- <footer> -->
      <!-- <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?> -->
     <!-- </footer>  -->
  </article>
<?php endwhile; ?>
