<footer class="footer">
  <div class="footer__inner">
    <div class="footer__legal">
      <div class="logo">
        <a href="<?php echo get_site_url(); ?>/home">Peter Bateman</a>
      </div>
      <div class="footer__telephone footer__contact__item">
        <i class="fas fa-fw fa-phone"></i>
        <a href="tel:07464699230">07464 699230</a>
      </div>
      <div class="footer__email footer__contact__item">
        <i class="fas fa-fw fa-envelope"></i>
        <a href="mailto:peter_bateman@hotmail.co.uk">peter_bateman@hotmail.co.uk</a>
      </div>
      <div class="footer__address footer__contact__item">
        <i class="fas fa-fw fa-map-marker"></i>
        <a href="#">111 Hampton Road,<br>Bristol,<br>BS6 6JG</a>
      </div>
    </div>

    <div class="footer__navigation">
      <h3 class="footer__header">navigation</h3>
      <nav>
    <?php
        wp_nav_menu( array('container_class' => 'menu-footer',
        'theme_location' => 'secondary') ); ?>
      </nav>
    </div>

    <div class="footer__contact">
      <div class="footer__navigation">
        <h3 class="footer__header">Latest Tweet</h3>
      </div>
      <?php echo do_shortcode("[custom-twitter-feeds]") ?>
      <!-- <div class="footer__navigation">
        <h3 class="footer__header">get in touch</h3>
      </div> -->

    </div>
  </div>

  <div class="footer-bottom">
    <hr>
    <div class="footer-bottom__inner">
      <div class="footer-bottom__legal">
        <p><a href="<?php echo get_site_url(); ?>/terms-and-conditions">terms and conditions</a> | <a href="<?php echo   get_site_url(); ?>/cookie-policy">cookie policy</a>
        </p>
        <p class="footer__copyright">&copy; <?php echo date("Y"); ?> Peter Bateman. All rights reserved.</p>
      </div>





      <div class="footer__social-icons">
        <a href="https://twitter.com/PeterBateman4" class="footer-icon"><i class="fab fa-facebook-f"   aria-hidden="true"></i></a>
        <a href="https://twitter.com/PeterBateman4" class="footer-icon"><i class="fab fa-twitter"   aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

</footer>
