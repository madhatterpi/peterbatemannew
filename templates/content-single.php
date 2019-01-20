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

  </article>

  <?php get_template_part('templates/page', 'related-posts'); ?>
  
<?php endwhile; ?>



<?php get_template_part('templates/page', 'get-started'); ?>
