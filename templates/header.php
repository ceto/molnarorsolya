<aside class="tiptop">
    <div class="tiptop__tel">Telefon: <a href="tel:+36 70 433 7511">+36 70 433
            7511</a>
        &middot;
        <a href="https://www.facebook.com/akozmetikusom" class="face"><i class="ion-social-facebook"></i></a>
        &middot; <div class="tiptop__lang"><?php do_action('wpml_add_language_selector'); ?></div>
    </div>
    <div class="tiptop__actions">
        <a href="https://molnarkozmetika.salonic.hu/selectSpecialization/?placeId=1481" target="_blank">Online
            időpontfoglalás <i class="ion-compose"></i></a>
    </div>
</aside>
<header class="banner" role="banner">
    <div class="wrap container">
        <div class="wrapped clearfix">
            <a class="brand" title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/">
                <img src="<?php echo  get_template_directory_uri().'/assets/img/mo_kozmetika_logo.png'; ?>"
                    alt="<?php bloginfo('name'); ?>">
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