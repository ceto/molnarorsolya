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
            <?php if(get_post_meta( $post->ID, '_meta_ugyfel_mondta', true )!='') : ?>
              <div class="entry-testimon">
                <blockquote>
                  <p><?php echo get_post_meta( $post->ID, '_meta_ugyfel_mondta', true ); ?></p>
                  <footer>&mdash; <?php echo get_post_meta( $post->ID, '_meta_ugyfel_nev', true ); ?></footer>          
                </blockquote>
              </div>
            <?php endif; ?>
            
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
            <a href="#" class="kommentnyito" data-target="kommentek"><i class="entypo plus"></i>Komment</a>
          </footer>
         
    </article>
    </div><!-- /.wrapped -->
  </div><!-- /.kezeleswrap -->
  <?php comments_template('/templates/comments-face.php'); ?>
  <?php endwhile; ?>
</div><!-- /.main -->

<div class="wrap tovabbiak clearfix" role="complementary">
  <div class="wrapped">
      <aside>
        <header>
          <h2>További arckezelések</h2>
        </header>
        <div class="tovkez">
          <h3>Aromaterápiás wellness élménykezelések</h3>
          <p>Külső-belső megújulás és teljes kikapcsolódás aromaterápia segítségével.</p>
          <a class="read-more hide-text" href="#">Aromaterápiás wellness élménykezelések</a>
        </div>
        <div class="tovkez">
          <h3>Hévízi iszapos-gyógyvizes kezelések</h3>
          <p>A felhasznált termékek a hévízi tó vizét, gabonakivonatokat, biológiai tisztaságú illóolajokat és gyógyiszapot tartalmaznak</p>
          <a class="read-more hide-text" href="#">Hévizes</a>
        </div>
        <div class="tovkez">
          <h3>Mélyhámasztások</h3>
          <p>Ezt igazából gépekkel végezzük, szóval szerintem ezt gépi kezelések közé kellene tenni, átnavigálással</p>
          <a class="read-more hide-text" href="#">Mélyhámlasztások</a>
        </div>
        <div class="tovkez">
          <h3>Hévízi iszapos-gyógyvizes kezelések</h3>
          <p>A felhasznált termékek a hévízi tó vizét, gabonakivonatokat, biológiai tisztaságú illóolajokat és gyógyiszapot tartalmaznak</p>
          <a class="read-more hide-text" href="#">Hévizes</a>
        </div>
        <div class="tovkez">
          <h3>Tini kezelések</h3>
          <p>A felhasznált termékek a hévízi tó vizét, gabonakivonatokat, biológiai tisztaságú illóolajokat és gyógyiszapot tartalmaznak</p>
          <a class="read-more hide-text" href="#">Tini</a>
        </div>
        <a class="more" href="#">Még több kezelés ...</a>
      </aside>
   </div><!-- /.wrapped -->
</div><!-- /.wrap.tovabbiak -->
