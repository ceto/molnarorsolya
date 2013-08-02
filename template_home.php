<?php
/*
Template Name: Home Page
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section class="actionwrap clearfix wrap">
  <div class="wrapped">
    <h3>Aktuális akció</h3>
    <p>Nappali sminket kaptok ajándékba</p>
  </div><!-- /.wrapped -->
</section>
<?php 
  $the_kezeles=new WP_Query( array(
    'post_type' => 'page',
    'post_parent' => 14 
    )
  );
?>
<div class="main <?php echo roots_main_class(); ?>" role="main"> 

  <div class="homegyujtowrap wrap clearfix">
    <div class="wrapped">    
    <article <?php post_class(); ?>>
      <header>
        <h2><?php echo roots_title(); ?></h2>
        <h3>Kozmetikai kezelések</h3>
      </header>
      <?php $i=1; 
       while ($the_kezeles->have_posts()) : $the_kezeles->the_post(); ?>
        <div class="homekezike">
          <a href="<?php the_permalink(); ?>" <?php post_class(); ?>>
            <i><?php echo $i++ ?></i>
          </a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
          <a class="buti" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      <?php endwhile; ?>       
      <?php // comments_template('/templates/comments.php'); ?>
    </article>
    </div><!-- /.wrapped -->
  </div><!-- /.homegyujtowrap -->

<?php 
  $the_kezeles=new WP_Query( array(
    'post_type' => 'post',
    'category__or' => array( 6,8,9 ),
    'posts_per_page' => 3

    )
  );
?>

    <div class="eszkozokwrap wrap clearfix">
      <div class="wrapped">    
      <article <?php post_class(); ?>>
        <header class="entry-header">
          <h2>Amivel dolgozom</h2>
          <h3>Krémek, ápolószerek, eszközök</h3>
        </header>
        <?php while ($the_kezeles->have_posts()) : $the_kezeles->the_post(); ?>
          <div class="eszkoz">
            <figure>
              <a href="<?php the_permalink(); ?>"><img src="http://lorempixel.com/150/150" alt="<?php the_title(); ?>"></a>
            </figure>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
            <a class="buti" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        <?php endwhile; ?>       
        <?php // comments_template('/templates/comments.php'); ?>
      </article>
      </div><!-- /.wrapped -->
    </div><!-- /.homegyujtowrap -->





</div><!-- /.main -->





<?php endwhile; ?>  