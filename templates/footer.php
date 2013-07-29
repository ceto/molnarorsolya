<footer class="content-info" role="contentinfo">
  
  <div class="f1 wrap container clearfix">
    <div class="content row">
      <?php dynamic_sidebar('sidebar-footer-1'); ?>
    </div><!-- /.content -->
  </div><!-- / .wrap / .f1 -->
  
  <div class="f2 wrap container clearfix">
    <div class="content row">
      <?php dynamic_sidebar('sidebar-footer-2'); ?>
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div><!-- /.content -->
  </div><!-- / .wrap / .f2 -->

</footer>

<?php wp_footer(); ?>
