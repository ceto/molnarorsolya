<?php
/*
Template Name: Kezelés Gyűjtő Sablon
*/
?>

<?php while (have_posts()) : the_post(); ?>
<nav class="nav-sub wrap" role="navigation">
    <div class="wrapped clearfix">
        <h3>Kozmetikai kezelések bemutatása</h3>
        <?php
      if (has_nav_menu('kezelesek_navigation')) :
        wp_nav_menu(array('theme_location' => 'kezelesek_navigation', 'menu_class' => 'nav nav-pills'));
      endif;
    ?>
    </div><!-- /.wrapped -->
</nav>
<?php
  $the_kezeles=new WP_Query( array(
    'post_type' => 'page',
    'post_parent' => get_the_id()
    )
  );
?>
<div class="main <?php echo roots_main_class(); ?>" role="main">
    <div class="kezgyujtowrap wrap clearfix">
        <div class="wrapped">
            <article <?php post_class('clearfix'); ?>>
                <header>
                    <h1><?php echo roots_title(); ?></h1>
                    <!-- <p class="kivonka"><?php the_content(); ?></p> -->
                </header>
                <?php while ($the_kezeles->have_posts()) : $the_kezeles->the_post(); ?>
                <div class="kezike">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
                    <a class="buti" href="<?php the_permalink(); ?>">Bővebben...</a>
                </div>
                <?php endwhile; ?>
                <div class="kezike">
                    <div class="entry-actionblock dontmove">
                        <a target="_blank" href="https://molnarkozmetika.salonic.hu/selectSpecialization/?placeId=1481"
                            class="online"><i class="ion-compose"></i>Foglalj időpontot<span>online azonnal</span></a>
                        <a href="tel:+36704337511" class="tel"><i class="ion-ios7-telephone"></i>vagy telefonon<span>+36
                                70 433 7511</span></a>
                    </div>
                </div>
                <footer>
                    <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
                </footer>
                <?php // comments_template('/templates/comments.php'); ?>
            </article>
        </div><!-- /.wrapped -->
    </div><!-- /.kezelesgyujtowrap -->
</div><!-- /.main -->
<?php endwhile; ?>