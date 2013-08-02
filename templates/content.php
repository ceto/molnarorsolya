<div class="wrap blogitemwrap clearfix">
  <div class="wrapped">
    <article <?php post_class(); ?>>
      <div class="entry-side">    
        <?php if (has_post_thumbnail()) : ?>
          <figure class="entry-figure">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('small11') ?>
            </a>
          </figure>
        <?php endif; ?>
      </div> 
      <div class="entry-content">
        <header>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php get_template_part('templates/entry-meta'); ?>
        </header>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </article>
  </div><!-- / .wrapped --> 
</div><!-- / .blogitemwrap -->
