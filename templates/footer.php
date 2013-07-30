<footer class="content-info" role="contentinfo">
  
  <div class="f1 wrap container clearfix">
    <div class="content row">
      <section class="widget widget_action">
          <h3>Aktuális akció</h3>
          <h4>Nappali sminket kaptok ajándékba!</h4>
          <a href="#" class="details">Akció részletei</a>
      </section>
      <?php dynamic_sidebar('sidebar-footer-1'); ?>
    </div><!-- /.content -->
  </div><!-- / .wrap / .f1 -->
  
  <div class="f2 wrap container clearfix">
    <div class="content row">
      <section class="widget widget_impr">
          <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br />
            Hand crafted site with love by <a target="_blank" href="http://hydrogene.hu">Hydrogene</a></p>
          <p>Oszd meg ismerőseiddel<br>
            <a href="#" class="face">&#62221;</a>
            <a href="#" class="gplus">&#62224;</a>
            <a href="#" class="twitter">&#62218;</a>
          </p>
      </section>
      <?php dynamic_sidebar('sidebar-footer-2'); ?>

    </div><!-- /.content -->
  </div><!-- / .wrap / .f2 -->

</footer>

<?php wp_footer(); ?>
