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

      <section class="widget widget_newsletter">


<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://molnarorsolya.us7.list-manage.com/subscribe/post?u=bdc266f9fef1502dcc0a3a5ed&amp;id=8e7bed2111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <h3>Érdemes feliratkozni</h3>
  <h4>Hírlevelünkből az újdonságainkról és az akcióinkról értesülhetsz</h4>
<div class="mc-field-group">
  <label for="mce-EMAIL">Email cím </label>
  <input type="email" value="" placeholder="Add meg az email címed" name="EMAIL" class="required email" id="mce-EMAIL">
  <input type="submit" value="Ok" name="subscribe" id="mc-embedded-subscribe" class="button">
</div>
<!-- p><a href="http://us7.campaign-archive1.com/home/?u=bdc266f9fef1502dcc0a3a5ed&id=8e7bed2111" title="View previous campaigns">
  Korábbi hírlevelek
</a></p -->
  <div id="mce-responses">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>
</form>
<em>Hírlevél feliratkozóink között havonta kisorsolunk egy <a href="<?php echo get_permalink('654'); ?>">kézmasszázst.</a></em>
</div>
<!--End mc_embed_signup-->
    <a class="tothetop" href="#"><i class="ion-arrow-up-c"></i></a>
      </section>

    </div><!-- /.wrapped -->
  </div><!-- / .wrap / .f2 -->

</footer>

<?php wp_footer(); ?>
