<?php
/*
Template Name: Árlista Sablon
*/
?>
<?php while (have_posts()) : the_post(); ?>
<nav class="nav-sub wrap" role="navigation">
  <div class="wrapped clearfix">
    <h3>Kozmetikai kezelések árai</h3>
    <?php
      if (has_nav_menu('arlista_navigation')) :
        wp_nav_menu(array('theme_location' => 'arlista_navigation', 'menu_class' => 'nav nav-pills'));
      endif;
    ?>
  </div><!-- /.wrapped -->
</nav>
<div class="main <?php echo roots_main_class(); ?>" role="main"> 

  <div class="arlistawrap wrap clearfix">
    <div class="wrapped">    
    <article <?php post_class(); ?>>
      <header>
        <h1><?php echo roots_title(); ?></h1>
      </header>
      <div class="entry-content">

        <?php 
        $arblokkok = get_post_meta( get_the_ID(), 'kezelescsoport', true );

        foreach ( (array) $arblokkok as $key => $entry ) { ?>
          <section class="arblokk">
            <h3 class="arblokk__title">
              <?php echo esc_html( $entry['title'] ); ?>
            </h3>

            <?php
              $items=$entry['kezelesesar']; 
              foreach ( (array) $items as $ikey => $ientry ) {
                $ito=str_getcsv($ientry, ";");
                ?>
                <div class="arblokk__item">
                  <h4 class="arblokk__itemname"><?php echo $ito['0']; ?></h4>
                  <span class="arblokk__ar"><?php echo $ito['1']; ?></span>
                  <p class="arblokk__itemdescr"><?php echo $ito['2']; ?></p>
                </div>
              
              <?php } ?>


            <footer class="arblokk__footer">
              <?php echo wpautop( $entry['footer'] ); ?>
            </footer>
          </section>

        <?php } ?>

      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <?php // comments_template('/templates/comments.php'); ?>
    </article>
    </div><!-- /.wrapped -->
  </div><!-- /.arlistagyujtowrap -->
</div><!-- /.main -->
<?php endwhile; ?>  