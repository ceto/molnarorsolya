<?php
/*
Template Name: Home Page
*/
?>

<?php while (have_posts()) : the_post(); ?>



<div class="herowrap wrap">
  <div class="wrapped clearfix">
    <div class="heroblokk">
      <h3>Cimsor a formázásra</h3>
      <p>Lorem ipsum dolor sita amet, természetes alapanyagok használata és Monár Orsolya vagyok és buzditalak arra, hogy nézd meg a szolgáltatásaimat</p>
      <a href="#" class="btn">Kezelések megtekintése</a>
    </div>
  </div><!-- /.wrapped -->
</div><!-- /.heroswrap -->

<section class="actionwrap clearfix wrap">
  <div class="wrapped">
    <div class="akcio">  
      <?php $the_fact=new WP_Query ( array (
        'cat' => 7,
        'post_type' => 'post',
        'posts_per_page' => 1
      )); ?>
      <?php if (!$the_fact->have_posts()) : ?>
        <h3>Aktuális akció</h3>
        <h4 class="akcio-title">
          Jelenleg nincs kiemelt akció, iratkozz fel hírlevelünkre ha értesülni akarsz a következőröl.
        </h4>
        <a href="<?php the_permalink(); ?>">Hírlevél feliratkozás</a>
      <?php else : ?>
        <?php while ($the_fact->have_posts()) : $the_fact->the_post(); ?>
          <h3>Aktuális akció</h3>
          <p class="megtak"><?php echo get_post_meta( $post->ID, '_meta_csali', true ); ?></p>
          <h4 class="akcio-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h4>
          <!-- <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p> -->
          <a href="<?php the_permalink(); ?>" class="btn">Akció részletei</a>
          <?php setlocale(LC_ALL, "hu_HU"); ?>
          <p class="idotartam"><i class="entypo star"></i>Az akció időtartama:
            <span><?php echo strftime('%Y. %B %d. %A', get_post_meta( $post->ID, '_meta_akcio_kezdet', true )); ?> &mdash; <?php echo strftime('%Y. %B %d. %A',get_post_meta( $post->ID, '_meta_akcio_veg', true )); ?></span>
          </p>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="ajandekut">
      <h3>Ajándékozz kozmetikai kezelést</h3>
      <a href="<?php the_permalink(); ?>">Ajándékutalvány bemutatása</a>
    </div>
  </div><!-- /.wrapped -->
</section>
<?php
  
  wp_reset_query();

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
  $the_eszkoz=new WP_Query( array(
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
          <h3>Kozmetikumok és eszközök</h3>
        </header>
        <?php while ($the_eszkoz->have_posts()) : $the_eszkoz->the_post(); ?>
          <div class="eszkoz">
            <figure>
              <a href="<?php the_permalink(); ?>"><img src="http://lorempixel.com/150/150" alt="<?php the_title(); ?>"></a>
            </figure>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="intro"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
            <a class="buti" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        <?php endwhile; ?>       
      </article>
      </div><!-- /.wrapped -->
    </div><!-- /.homegyujtowrap -->

<?php 
    $the_bemutatkozas=new WP_Query( array(
    'post_type' => 'page',
    'page_id' => 124
    )
  );
?>

    <div class="bemutatkozowrap wrap">
      <div class="wrapped clearfix">
        <?php while ($the_bemutatkozas->have_posts()) : $the_bemutatkozas->the_post(); ?>
           <figure>
              <img src="http://lorempixel.com/250/250" alt="Molnár Orsolya - A kozmetikusom">
            </figure>
            <div class="colcsi">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
            </div>
        <?php endwhile; ?>       

      </div><!-- /.wrapped -->
    </div><!-- /.bemutatkozowrap -->



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
            <div class="colcsi1">
              <h3><?php the_title(); ?></h3>
             <div class="conti"><?php the_content(); ?></div> 
             
            </div>
        <?php endwhile; ?>       

      </div><!-- /.wrapped -->
    </div><!-- /.brandswrap -->





</div><!-- /.main -->





<?php endwhile; ?>  