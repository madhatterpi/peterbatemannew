<article class="blog-section__article" <?php post_class(); ?>>
  <div class="blog-section__image">
    <a class="blog-section__image--zoom" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-crop' ); ?></a>
  </div>

  <div class="blog-section__details">
    <span class="blog-section__catagory"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span>
    <header>
      <h2 class="header header--lined blog-section__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <span class="blog-section__date"><?= get_the_date(); ?></span>

  </div>
</article>
