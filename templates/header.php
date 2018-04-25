  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Roboto+Slab:400,700" rel="stylesheet">
  <meta name="theme-color" content="#f3f5f7" />

<!-- The overlay -->
<header class="nav-home" class="overlay">
  <div class="header-container">
  <div class="site-header__logo">
        <div class="site-header__logo__graphic "><a href="<?php echo home_url(); ?>">Peter Bateman</a></div>
      </div>

  <div class="menu-icon">
      <div class="menu-icon__middle"></div>
  </div>

  <!-- Overlay content -->
  <div class="main-menu">
    <div class="main-menu-container">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>
        <div class="icons">
          <a href="https://twitter.com/PeterBateman4" class="header-icon"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
          <a href="https://twitter.com/PeterBateman4" class="header-icon"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        </div>
    </div>

  </div>

  </div>



</header>
