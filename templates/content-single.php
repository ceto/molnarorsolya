<?php while (have_posts()) : the_post(); ?>
<div class="wrap articlewrap clearfix">
  <div class="wrapped">
    <article <?php post_class(); ?>>
      <div class="entry-side">
        <?php if (has_post_thumbnail()) : ?>
        <figure class="entry-figure">
          <?php the_post_thumbnail('small11') ?>
        </figure>
      <?php endif; ?>
      </div>
      <div class="entry-content">
        <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
      </footer>
     </article>
  </div><!-- / .wrapped --> 
</div><!-- / .articlewrap -->
<?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
