<div class="page-header wrap">
  <div class="wrapped clearfix">
    <?php// get_template_part('templates/action', 'kicsi'); ?>
    <header>
      <?php if ( function_exists('yoast_breadcrumb') && is_page_template('template-kezeles.php') ) : ?>
        <?php yoast_breadcrumb('<p class="breadcrumb">','</p>'); ?>
      <?php endif; ?>
      <h1 class="entry-title"><?php echo roots_title(); ?></h1>
    </header>
  </div><!-- /.wrapped -->
</div>