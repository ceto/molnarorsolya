<header class="banner" role="banner">
  <div class="wrap container">
    <div class="wrapped clearfix">
      <a class="brand" title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/">
      <img src="<?php echo  get_template_directory_uri().'/assets/img/logo.png'; ?>" alt="<?php bloginfo('name'); ?>">
      </a>
      <nav class="nav-main clearfix" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills', 'depth'=>'1'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>