<?php while (have_posts()) : the_post(); ?>
  <div class="pagewrap wrap">
    <div class="wrapped clearfix">
      <article <?php post_class(); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
      </article>
    </div><!-- / .wrapped --> 
  </div><!-- / .pagewrap -->
<?php endwhile; ?>
