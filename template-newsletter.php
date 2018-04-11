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
        <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">require(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us7.list-manage.com","uuid":"bdc266f9fef1502dcc0a3a5ed","lid":"8e7bed2111"}) })</script>
        </section>
        <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
      </article>
    </div><!-- / .wrapped --> 
  </div><!-- / .pagewrap -->
<?php endwhile; ?>


