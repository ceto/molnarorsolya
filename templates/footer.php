<footer class="content-info" role="contentinfo">
  
  <div class="f1 wrap">
    <div class="wrapped clearfix">
      <?php $the_fact=new WP_Query ( array (
        'cat' => 7,
        'post_type' => 'post',
        'posts_per_page' => 1
      )); ?>
      <section class="widget widget_action">
          <?php if (!$the_fact->have_posts()) : ?>
              <h4>
                <h3>Akció</h3>
                <h4>Jelenleg nincs kiemelt akció, iratkozz fel hírlevelünkre ha értesülni akarsz a következőröl.</h4>
            <?php else : ?>
              <?php while ($the_fact->have_posts()) : $the_fact->the_post(); ?>
                <h3>Aktuális akció</h3>
                <h4><?php the_title(); ?></h4>
                <a href="<?php the_permalink(); ?>" class="details">Akció részletei<i class="ion-ios7-arrow-right"></i></a>
              <?php endwhile; ?>
            <?php endif; ?>
      </section>
      <?php dynamic_sidebar('sidebar-footer-1'); ?>
      <section class="widget widget_tudtade">
          <h3>Tudtad-e?</h3>
          <ol>
            <li>Ajándékba is adhatsz kozmetikai kezelést. <a href="<?php echo get_permalink('647'); ?>">Vásárolj ajándékutalványt</a></li>
            <li>Ha először jársz nálunk, vendégünk vagy egy <a href="<?php echo get_permalink('651'); ?>">ingyenes arcidiagnosztikára.</a></li>
            <li>Hírlevél feliratkozóink között havonta kisorsolunk egy <a href="<?php echo get_permalink('654'); ?>">kézmasszázst.</a></li>
          </ol>
      </section>
    </div><!-- /.wrapped -->
  </div><!-- / .wrap / .f1 -->
  
  <div class="f2 wrap">
    <div class="wrapped clearfix">
      <section class="widget widget_impr">
          <p>&copy; <?php echo date('Y'); ?> <strong><?php bloginfo('name'); ?></strong><br />
            Hand crafted site with love by <a target="_blank" href="http://hydrogene.hu/referencia/kozmetikus-arculat-es-weboldal/">Hydrogene</a></p>
          <p><strong>Megtalálsz még itt is</strong><br>
            <a href="https://www.facebook.com/akozmetikusom" class="face"><i class="ion-social-facebook"></i></a>
            <a href="#" class="gplus"><i class="ion-social-googleplus"></i></a>
            <a href="#" class="twitter"><i class="ion-social-twitter"></i></a>
          </p>
      </section>
      <?php dynamic_sidebar('sidebar-footer-2'); ?>

      <section class="widget widget_impr">
        <h3>Iratkozz fel hírlevelünkre</h3>
        <p><strong>Újdonságainkról és az akcióinkról értesülj elsőként!</strong></p>
        <a href="<?php the_permalink(2301); ?>" class="btn">Tovább a feliratkozásra  <i class="ion-paper-airplane"></i></a>

        <a class="tothetop" href="#"><i class="ion-arrow-up-c"></i></a>
      </section>

    </div><!-- /.wrapped -->
  </div><!-- / .wrap / .f2 -->

</footer>

<?php wp_footer(); ?>
