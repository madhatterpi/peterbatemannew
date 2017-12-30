<div class="container-fluid services-section">
  <div class="services-section__row">
      <h2 class="header services-section__header">what I do</h2>
      <p class="services-section__intro">Whether you need a completely new site along with a new logo or an overhaul of an e-commerce site, I have the skill set to help you produce it. A great looking site is nothing without good promotion and with knowledge of the latest Google algorithm and SEO practices I can help your site grow its user base.</p>
    </div>

    <div class="services-section__row skills">
      <div class="skills__column">
        <h2 class="header skills__column__header">web design</h2>
        <i class="fa fa-desktop fa-fw sr-icon sr-icon--first" aria-hidden="true"></i>
          <ul class="skills__list">
            <?php get_template_part('templates/content', 'services-titles'); ?>
          </ul>
      </div>
      <div class="skills__column">
        <h2 class="header skills__column__header">development</h2>
        <i class="fa fa-cog fa-fw sr-icon sr-icon--second" aria-hidden="true"></i>
          <ul class="skills__list">
            <?php

            $args = array('category_name' => 'development');
            $category_posts = new WP_Query($args);

            if($category_posts->have_posts()) :
            while($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>

            <li class="skills__list__item"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>


            <?php
            endwhile;
            else:
            ?>

            Oops, there are no posts.

            <?php
            endif;
            ?>
          </ul>
      </div>
      <div class="skills__column">
        <h2 class="header skills__column__header">promotion</h2>
        <i class="fa fa-bar-chart fa-fw sr-icon sr-icon--third" aria-hidden="true"></i>
          <ul class="skills__list">
            <?php

            $args = array('category_name' => 'promotion');
            $category_posts = new WP_Query($args);

            if($category_posts->have_posts()) :
            while($category_posts->have_posts()) :
            $category_posts->the_post();
            ?>

            <li class="skills__list__item"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>


            <?php
            endwhile;
            else:
            ?>

            Oops, there are no posts.

            <?php
            endif;
            ?>
          </ul>
      </div>
    </div>
</div>
