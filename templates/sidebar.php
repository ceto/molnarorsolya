  <?php if (roots_display_sidebar()) : ?>
  <div class="wrap sidebarwrap clearfix" role="complementary">
    <div class="wrapped">
      <aside class="<?php echo roots_sidebar_class(); ?>">
        <?php dynamic_sidebar('sidebar-primary'); ?>

        <section class="widget search-2 widget_search">
          <div class="widget-inner">
            <h3>Nem találtad meg amit kerestél</h3>
            <p><strong>Próbáld ki a szabadszavas keresőt</strong></p>
            <?php get_template_part( 'templates/searchform') ?>  
          </div>
        </section>

      </aside><!-- /.sidebar -->
    </div><!-- /.wrapped -->
  </div><!-- /.wrap.sidebar -->
  <?php endif; ?>

