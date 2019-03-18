<?php
/*
Template Name: Home Page
*/
?>

<?php while (have_posts()) : the_post(); ?>



<div class="herowrap wrap">
  <div class="wrapped clearfix">
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/head_bg_old.jpg" alt="">
    <div class="heroblokk">
      <!-- <h3>Csak rád figyelünk</h3> -->
      <p><?php _e('Szakmai felkészültség és természetes anyagok használata. Várjuk kedves vendégeinket.','mo'); ?></p>

      <!-- <p>Első látogatásodkor vendégünk vagy egy <a href="<?= get_permalink(651); ?>">arcdiagnosztikára</a></p> -->
    </div>
  </div><!-- /.wrapped -->
</div><!-- /.heroswrap -->

<section class="actionwrap clearfix wrap">
  <div class="wrapped">
    <div class="akcio clearfix">
      <?php $the_fact=new WP_Query ( array (
        'cat' => 7,
        'post_type' => 'post',
        'posts_per_page' => 1
      )); ?>
      <?php if (!$the_fact->have_posts()) : ?>
        <h4 class="akcio__title">
        <?php _e('Érdemes feliratkozni hírlevelünkre, akcióinkról emailben értesítünk.','mo'); ?>
        </h4>
        <a href="<?php the_permalink(); ?>" class="btn"><?php _e('Hírlevél feliratkozás','mo'); ?></a>
      <?php else : ?>
        <?php while ($the_fact->have_posts()) : $the_fact->the_post(); ?>
          <h4 class="akcio__title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h4>
          <p class="akcio__discl"><?php echo get_post_meta( $post->ID, '_meta_csali', true ); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn">Részletek</a>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div><!-- /.wrapped -->
</section>
<?php

  wp_reset_query();

  $the_kezeles=new WP_Query( array(
    'post_type' => 'page',
    'post_parent' => 14,
    'orderby' => 'menu-order',
    'order'=> 'ASC'
    )
  );
?>
<div class="main <?php echo roots_main_class(); ?>" role="main">

  <div class="homegyujtowrap wrap clearfix">
    <div class="wrapped">
    <article <?php post_class(); ?>>
      <header>
        <h2><?php echo roots_title(); ?></h2>
        <h3><?php _e('Kozmetikai kezelések','mo'); ?></h3>
      </header>
      <?php $i=1;
       while ($the_kezeles->have_posts()) : $the_kezeles->the_post(); ?>
        <div class="homekezike">
          <a href="<?php the_permalink(); ?>" <?php post_class('gomboc'); ?>>
            &nbsp;
          </a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
          <a class="buti" href="<?php the_permalink(); ?>"><?php _e('Bővebben','mo'); ?>&hellip;</a>
        </div>
      <?php endwhile; ?>
      <?php // comments_template('/templates/comments.php'); ?>
    </article>
    </div><!-- /.wrapped -->
  </div><!-- /.homegyujtowrap -->

<?php
  $the_eszkoz=new WP_Query( array(
    'post_type' => 'post',
    //'category__or' => array( 6,8,9 ),
    //'category__not_in' => array( 7 ),
    'posts_per_page' => 3,
    'ignore_sticky_posts' => true


    )
  );
?>

  <!--
    <div class="eszkozokwrap wrap clearfix">
      <div class="wrapped">
      <article <?php post_class(); ?>>
        <header class="entry-header">
          <h2>Érdekességek, hírek</h2>
          <h3>Blog bejegyzések</h3>
        </header>
        <?php while ($the_eszkoz->have_posts()) : $the_eszkoz->the_post(); ?>
          <div class="eszkoz">
            <figure>
              <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('tiny11') ?>
                <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/ikon_ruzs.png" width="150" height="150" alt="<?php the_title(); ?>">
                <?php endif; ?>
              </a>
            </figure>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="intro">
              <?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?>
            </p>
            <a class="buti" href="<?php the_permalink(); ?>">További részletek</a>
          </div>
        <?php endwhile; ?>
      </article>
      </div>
    </div> -->

<?php
    $the_bemutatkozas=new WP_Query( array(
    'post_type' => 'page',
    'post__in' => array(1327,124,2637),
    //'orderby' => 'date',
    'order'   => 'ASC',
    )
  );
?>

<?php while ($the_bemutatkozas->have_posts()) : $the_bemutatkozas->the_post(); ?>
    <div class="bemutatkozowrap wrap">
      <div class="wrapped clearfix">

         <figure>
            <?php the_post_thumbnail(); ?>
         </figure>
        <div class="colcsi">
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
        </div>

      </div><!-- /.wrapped -->
    </div><!-- /.bemutatkozowrap -->

<?php endwhile; ?>


<?php
    $the_brands=new WP_Query( array(
    'post_type' => 'page',
     'page_id' => 127
    )
  );
?>
    <div class="brandswrap wrap">
      <div class="wrapped clearfix">
        <?php while ($the_brands->have_posts()) : $the_brands->the_post(); ?>
          <?php the_content(); ?></div>
        <?php endwhile; ?>
      </div><!-- /.wrapped -->
    </div><!-- /.brandswrap -->
</div><!-- /.main -->





<?php endwhile; ?>
