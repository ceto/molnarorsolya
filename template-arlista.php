<?php
/*
Template Name: Árlista Sablon
*/
?>
<?php while (have_posts()) : the_post(); ?>
<nav class="nav-sub clearfix wrap" role="navigation">
  <div class="wrapped">
    <h3>Árlista</h3>
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
        <p class="kivonka"><?php the_content(); ?></p>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
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