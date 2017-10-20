<article class="blog-section__article" <?php post_class(); ?>>
  <div class="blog-section__image">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
  </div>

  <div class="blog-section__details">
    <header>
      <h2 class="blog-section__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <p class="blog-section__entry-summary">
      <?php the_excerpt_max_charlength(160); ?>
    </p>
    <p class="blog-section__time"><?php get_template_part('templates/entry-meta');   ?></p>
  </div>
</article>
