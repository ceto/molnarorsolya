  <?php if (roots_display_sidebar()) : ?>
  <div class="wrap sidebarwrap clearfix" role="complementary">
    <div class="wrapped">
      <aside class="<?php echo roots_sidebar_class(); ?>">
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </aside><!-- /.sidebar -->
    </div><!-- /.wrapped -->
  </div><!-- /.wrap.sidebar -->
  <?php endif; ?>

