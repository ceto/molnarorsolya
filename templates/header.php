<aside class="tiptop">
    <div class="tiptop__tel">Telefon: <a href="tel:+36 70 433 7511">+36 70 433
            7511</a>
        &middot;
        <a href="https://www.facebook.com/akozmetikusom" class="face"><i class="ion-social-facebook"></i></a>
        &middot;
        <a href="https://www.instagram.com/molnar_kozmetika/" class="insta"><i class="ion-social-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
            <path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"/>
            <path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28zM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112z"/>
        </svg></i></a>
        &middot;
        <div class="tiptop__lang"><?php do_action('wpml_add_language_selector'); ?></div>
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
