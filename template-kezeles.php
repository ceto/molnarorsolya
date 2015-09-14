<?php
/*
Template Name: Kezelés Szimpla Sablon
*/
?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="main <?php echo roots_main_class(); ?>" role="main">
  <?php while (have_posts()) : the_post(); ?>
  <div class="kezeleswrap wrap">
    <div class="wrapped clearfix">
    <article <?php post_class(); ?>>
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
              <a href="tel:+36704337511" class="tel"><i class="ion-ios7-telephone"></i>Hívd Orsit<span>+36 70 433 7511</span></a>
              <a href="tel:+36308649091" class="tel"><i class="ion-iphone"></i>vagy Barbit<span>+36 30 864 9091</span></a>
              <a href="?page_id=11&ap_id=<?php echo get_the_ID(); ?>#respond" class="online"><i class="ion-compose"></i>jelentkezz Online</a>
            </div>
            <?php get_template_part('templates/sharing'); ?>
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
  <?php //comments_template('/templates/comments-face.php'); ?>
  <?php endwhile; ?>
</div><!-- /.main -->

<?php
  $father=$post->post_parent;
  $kat=get_the_title( $father);
  $the_kezeles=new WP_Query( array(
    'post_type' => 'page',
    'post_parent' => $father,
    )
  );
?>

<div class="wrap tovabbiak" role="complementary">
  <div class="wrapped clearfix">
      <aside>
        <header>
          <h2>További <?php echo $kat ?></h2>
        </header>
         <?php while ($the_kezeles->have_posts()) : $the_kezeles->the_post(); ?>
          <div class="tovkez">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
            <a class="read-more" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
              <i class="ion-ios7-arrow-right"></i>
            </a>
          </div>
        <?php endwhile; ?>
        <a class="more" href="<?php echo get_permalink($father); ?>">Még több kezelés ...</a>
      </aside>
   </div><!-- /.wrapped -->
</div><!-- /.wrap.tovabbiak -->
