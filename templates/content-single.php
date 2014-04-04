<?php while (have_posts()) : the_post(); ?>
<div class="wrap articlewrap">
  <div class="wrapped clearfix">
    <article <?php post_class(); ?>>
      <div class="entry-side">
        <?php if (has_post_thumbnail()) : ?>
        <figure class="entry-figure">
          <?php the_post_thumbnail('small11') ?>
        </figure>
        <?php endif; ?>
        <?php get_template_part('templates/entry-meta'); ?>
        <?php get_template_part('templates/sharing'); ?>
      </div>
      <div class="entry-content">
        <header>

          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php if (get_post_meta( $post->ID, '_meta_akcio_kezdet', true )!='') : ?>
          <?php setlocale(LC_ALL, "hu_HU"); ?>
          <div class="akcio-int">
            <h4>Akció időtartama</h4>
            <span class="kezd">
              <?php echo strftime('%Y. %B %d. %A',get_post_meta( $post->ID, '_meta_akcio_kezdet', true )); ?>
            </span>
            &mdash;
            <span class="veg">
            <?php echo strftime('%Y. %B %d. %A',get_post_meta( $post->ID, '_meta_akcio_veg', true )); ?>
          </span>
          </div>
        <?php endif; ?> 
          <?php if(get_post_meta( $post->ID, '_meta_intro', true )!='') : ?>
            <p class="entry-lead"><?php echo get_post_meta( $post->ID, '_meta_intro', true ); ?></p>
          <?php endif; ?>
        </header>
        <?php the_content(); ?>
      </div>
      <footer>
        <?php related_posts(); ?>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
      <nav class="nav-post clearfix">
        <?php previous_post_link('%link','<i class="ion-arrow-left-c"></i> %title'); ?>
        <?php next_post_link('%link','%title <i class="ion-arrow-right-c"></i>'); ?>
      </nav>
     </article>
  </div><!-- / .wrapped --> 
</div><!-- / .articlewrap -->
<?php comments_template('/templates/comments-face.php'); ?>
<?php endwhile; ?>
