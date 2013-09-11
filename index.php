<div class="main <?php echo roots_main_class(); ?>" role="main"> 
  <?php get_template_part('templates/page', 'header'); ?>
  <?php if (!have_posts()) : ?>
    <div class="alert">
      <?php _e('Sorry, no results were found.', 'roots'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', get_post_format()); ?>
  <?php endwhile; ?>

  <?php if ($wp_query->max_num_pages > 1) : ?>
      <div class="wrap navwrap">
        <div class="wrapped">
          <nav class="nav-post clearfix">
            <?php // previous_post_link('%link','<i class="entypo circled-left"></i> '.__('Régebbi írások', 'roots')); ?>
            <?php// next_post_link('%link',__('Újabb írások', 'roots').' <i class="entypo circled-right"></i>'); ?>
          
            <?php next_posts_link(__('<i class="entypo circled-left"></i> Régebbi írások', 'roots')); ?>
            <?php previous_posts_link(__('Újabb írások <i class="entypo circled-right"></i>', 'roots')); ?>

          </nav>
        </div>
      </div>
  <?php endif; ?>
</div><!-- /.main -->

