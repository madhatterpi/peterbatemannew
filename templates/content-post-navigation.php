<div class="section less-padding">
  <div class="row">
    <div class="column">
      <div class="portfolio-navigation">
        <div class="portfolio-navigation__box portfolio-navigation__box--side">
          <?php previous_post_link(); ?>
        </div>
        <div class="portfolio-navigation__box portfolio-navigation__box portfolio-navigation__box--middle">
          <a href="<?php echo get_site_url()?>/portfolio">
            <?php
              if( is_singular("portfolio") ) {
                echo "Back to portfolio";
              } else if ( is_singular("services") ) {
                echo "Back to all services";
              } else {
                echo "Back to all blog posts";
              }

            ?>
         </a>
        </div>
        <div class="portfolio-navigation__box portfolio-navigation__box--side">
          <?php next_post_link(); ?>
        </div>
      </div>
    </div>

  </div>

</div>
