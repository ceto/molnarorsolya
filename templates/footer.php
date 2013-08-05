<footer class="content-info" role="contentinfo">
  
  <div class="f1 wrap clearfix">
    <div class="wrapped">
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
                <a href="<?php the_permalink(); ?>" class="details">Akció részletei</a>
              <?php endwhile; ?>
            <?php endif; ?>
      </section>
      <?php dynamic_sidebar('sidebar-footer-1'); ?>
      <section class="widget widget_action">
          <h3>Tudtad-e?</h3>
          <a href="#" class="details">Ajándékutalvány szeretteidnek</a>
          <h4>Ha először jársz nálunk, </h4>
          <a href="#" class="details">Az arcdiagnosztika ingyenes</a>


      </section>
    </div><!-- /.wrapped -->
  </div><!-- / .wrap / .f1 -->
  
  <div class="f2 wrap clearfix">
    <div class="wrapped">
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

      <section class="widget widget_newsletter">
<!-- Begin MailChimp Signup Form -->
<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup{}
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
     We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://hydrogene.us4.list-manage.com/subscribe/post?u=81493c12a97275eec1a7e2ef5&amp;id=0822041584" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  <h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
  <label for="mce-EMAIL">Email cím  <span class="asterisk">*</span>
</label>
  <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
  <div id="mce-responses" class="clear">
    <div class="response" id="mce-error-response" style="display:none"></div>
    <div class="response" id="mce-success-response" style="display:none"></div>
  </div>  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->
      </section>

    </div><!-- /.wrapped -->
  </div><!-- / .wrap / .f2 -->

</footer>

<?php wp_footer(); ?>
