  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Lobster|Pontano+Sans" rel="stylesheet">
  <script src="https://use.fontawesome.com/880aaf2fa6.js"></script>

<!-- The overlay -->
<div class="nav-home" class="overlay">

  <div class="site-header__logo">
        <div class="site-header__logo__graphic "><a href="<?php echo home_url(); ?>">Peter Bateman</a></div>
      </div>

  <div class="menu-icon">
      <div class="menu-icon__middle"></div>
  </div>

  <!-- Overlay content -->
  <div class="overlay-content">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
  </div>

</div>
