

<div class="portfolio">
  <h2 class="portfolio__header">portfolio</h2>

  <div class="portfolio-container">

    <div class="col col-md col-one project ido">

      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 51;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',   true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo $queried_post->post_title; ?></h2>
          <p class="project__meta"><?php echo $post_meta_details; ?></p>
          <div class="project__buttons">
            <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a>
            <a class="button button__projects" href="http://localhost:3000/peterbateman/?p=51">Case Study</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-md col-two">
      <p class="col-link">design</p>
    </div>
    <div class="col col-md col-three project pps">
      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 49;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',     true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo   $queried_post->post_title; ?></h2>
          <p class="project__meta"><?php echo $post_meta_details; ?></p>
          <div class="project__buttons">
            <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a>
            <a class="button button__projects"   href="http://localhost:3000/peterbateman/?p=49">Case Study</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-md col-four">
      <p class="col-link">performance</p>
    </div>
    <div class="col col-md col-five project">
      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 53;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',     true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo   $queried_post->post_title; ?></h2>
          <p class="project__meta"><?php echo $post_meta_details; ?></p>
          <div class="project__buttons">
            <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a>
            <a class="button button__projects"   href="http://localhost:3000/peterbateman/?p=53">Case Study</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-md col-six">
      <p class="col-link">engaging</p>
    </div>
  </div>
</div>
