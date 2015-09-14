<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 9]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=197341800418088";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>






  <div class="docwrap clearfix" role="document">
    <?php include roots_template_path(); ?>
    <?php include roots_sidebar_path(); ?>
  </div> <!-- /.docwrap -->


  <?php get_template_part('templates/footer'); ?>

</body>
</html>
