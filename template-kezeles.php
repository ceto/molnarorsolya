<?php
/*
Template Name: Kezelés Szimpla Sablon
*/
?>
<div class="main <?php echo roots_main_class(); ?>" role="main"> 
  <?php while (have_posts()) : the_post(); ?>
  <div class="kezeleswrap wrap clearfix">
    <div class="wrapped">
    <article <?php post_class(); ?>>
      <?php get_template_part('templates/page', 'header'); ?>
      
          <div class="entry-side">
            <div class="entry-intro">
              <p><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
            </div>
            <div class="entry-testimon">
              <blockquote>
                <p><?php echo get_post_meta( $post->ID, '_meta_ugyfel_mondta', true ); ?></p>
                <footer>&mdash; <?php echo get_post_meta( $post->ID, '_meta_ugyfel_nev', true ); ?></footer>          
              </blockquote>
            </div>
            <div class="entry-actionblock">
              <a href="tel:+36707705653" class="tel">Foglalj időpontot <span>+36 70 7705653</span></a>
              <a href="#" class="online">vagy jelentkezz Online</a>
            </div>
          </div>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <footer>
            <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
          </footer>
         
    </article>
    </div><!-- /.wrapped -->
  </div><!-- /.kezeleswrap -->
  <?php comments_template('/templates/comments.php'); ?>
  <?php endwhile; ?>
</div><!-- /.main -->
