<header class="banner">
  <div class="container">
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"></a>

    <nav class="nav-primary navbar" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sp-navbar-collapse-1">
            <div class="mobile-burger">
              <span class="sr-only">Toggle navigation</span>
              <div class="bar bar-left"></div>
              <div class="bar bar-middle"></div>
              <div class="bar bar-right"></div>
            </div>
          </button>
          <a href="#">
            <div class="logo" href="/">
              <a href="/" class="logo-link fade_l">
                <svg width="17" height="31">
                  <g id="logo_black">
                    <path d="M5.6,13.9c0.4,1.3,1.5,2,3.1,2c1.5,0,2.6-0.7,2.6-1.8c0-0.9-0.6-1.3-1.8-1.6l-3.7-0.8C3,11.1,0.8,9.6,0.8,6.3
                    c0-3.8,3.1-6.2,7.4-6.2c4.7,0,7.4,2.6,7.9,5.9h-4.9c-0.4-1.1-1.3-1.9-2.9-1.9c-1.4,0-2.4,0.6-2.4,1.7c0,0.8,0.6,1.3,1.6,1.5
                    l3.8,0.9c3.3,0.8,5.1,2.6,5.1,5.5c0,3.9-3.3,6.2-7.5,6.2c-4.6,0-7.7-2.2-8.4-6H5.6z"></path>
                    <rect id="Rectangle-4" x="0" y="26" width="17" height="5" fill="transparent">
                     <rect id="Rectangle-4" x="0" y="26" width="17" height="5" fill="transparent"></rect>
                   </rect>
                  </g>
                </svg>
              </a>
            </div>
          </a>
        </div>
      

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right collapse navbar-collapse', 'menu_id' => 'sp-navbar-collapse-1']);
        endif;
        ?>
        <!-- / .navbar-collapse -->    
      </div> <!-- / .container-fluid -->
    </nav> <!-- / .nav-primary navbar -->
  </div> <!-- / .container -->
</header>