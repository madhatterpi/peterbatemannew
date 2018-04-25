

<section class="section portfolio-s">
  <!-- <h2 class="portfolio__header">portfolio</h2> -->

  <div class="portfolio-container">

    <div class="col col-md col-one project ido">

      <?php
        $post_id = 51;
        $queried_post = get_post($post_id);
        $post_meta_details = get_post_meta($post_id, 'project-details',   true);
        $post_meta_url = get_post_meta($post_id, 'project-url',   true);
        ?>

      <img class="project__image" src="<?php echo $queried_post->post_image; ?>" alt="">

      <div class="project__overlay" >
        <a class="project__overlay__stuff" href="http://localhost:3000/peterbateman/?p=51">



          <h2 class="project__header"><?php echo $queried_post->post_title; ?></h2>
            <!-- <p class="project__meta"><?php echo $post_meta_details; ?></p> -->
            <div class="project__buttons">
              <!-- <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a> -->
              <a class="button button__projects" href="http://localhost:3000/peterbateman/?p=51">view project</a>
            </div>
        </a>
      </div>
    </div>
    <div class="col col-md col-two project beccaanndesigns">
      <!-- <p class="col-link">design</p> -->
      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 53;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',   true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo $queried_post->post_title; ?></h2>
            <!-- <p class="project__meta"><?php echo $post_meta_details; ?></p> -->
            <div class="project__buttons">
              <!-- <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a> -->
              <a class="button button__projects" href="http://localhost:3000/peterbateman/?p=53">case study coming soon</a>
            </div>
        </div>

      </div>
      <a class="gogo" href="http://localhost:3000/peterbateman/?p=53"></a>
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
          <!-- <p class="project__meta"><?php echo $post_meta_details; ?></p> -->
          <div class="project__buttons">
            <!-- <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a> -->
            <a class="button button__projects"   href="http://localhost:3000/peterbateman/?p=49">view project</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-md col-four project tennis">
      <!-- <p class="col-link">performance</p> -->
      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 242;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',   true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo $queried_post->post_title; ?></h2>
            <!-- <p class="project__meta"><?php echo $post_meta_details; ?></p> -->
            <div class="project__buttons">
              <!-- <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a> -->
              <a class="button button__projects" href="http://localhost:3000/peterbateman/?p=242">case study coming soon</a>
            </div>
        </div>
      </div>
    </div>
    <div class="col col-md col-five project feather">
      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 228;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',     true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo   $queried_post->post_title; ?></h2>
          <!-- <p class="project__meta"><?php echo $post_meta_details; ?></p> -->
          <div class="project__buttons">
            <!-- <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a> -->
            <a class="button button__projects"   href="http://localhost:3000/peterbateman/?p=228">case study coming soon</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col col-md col-six project beeswax">
      <!-- <p class="col-link">engaging</p> -->
      <div class="project__overlay">
        <div class="project__overlay__stuff">


        <?php

          $post_id = 244;
          $queried_post = get_post($post_id);
          $post_meta_details = get_post_meta($post_id, 'project-details',   true);
          $post_meta_url = get_post_meta($post_id, 'project-url',   true);
          ?>
          <h2 class="project__header"><?php echo $queried_post->post_title; ?></h2>
            <!-- <p class="project__meta"><?php echo $post_meta_details; ?></p> -->
            <div class="project__buttons">
              <!-- <a class="button button__projects" href="<?php echo $post_meta_url; ?>">View Site</a> -->
              <a class="button button__projects" href="http://localhost:3000/peterbateman/?p=244">case study coming soon</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
