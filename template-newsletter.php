<?php
/*
Template Name: Hírlevél Sablon
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
  <div class="pagewrap wrap">
    <div class="wrapped clearfix">
      <article <?php post_class(); ?>>
        <?php the_content(); ?>
        <section class="nls">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
                <form action="https://molnarkozmetika.us7.list-manage.com/subscribe/post?u=bdc266f9fef1502dcc0a3a5ed&amp;id=8e7bed2111" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                            <label for="mce-EMAIL">Email cím  <span class="asterisk">*</span> </label>
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-LNAME">Vezetéknév </label>
                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                        </div>
                        <div class="mc-field-group">
                            <label for="mce-FNAME">Keresztnév </label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                        </div>
                        <div class="amc-field-group">
                            <label for="checkbox1"><input id="checkbox1" required="required" class="required" name="checkbox1" type="checkbox" value="1"> Hozzájárulok, hogy marketing tartalmú hírlevelet küldjenek.</label><br>
                            <label for="checkbox2"><input id="checkbox2" required="required" class="required" name="checkbox2" type="checkbox" value="1" required> Elfogadom az <a href="<?php the_permalink(2302); ?>">adatkezelési irányelveket.</a></label><br><br>
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bdc266f9fef1502dcc0a3a5ed_8e7bed2111" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Feliratkozom" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
        </section>
        <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
      </article>
    </div><!-- / .wrapped -->
  </div><!-- / .pagewrap -->
<?php endwhile; ?>


