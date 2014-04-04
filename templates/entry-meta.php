<div class="entry-meta">
<time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo (get_the_date('Y. F j. l')); ?></time>
<p class="byline author vcard"><?php echo __('szerző:', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p>
<div class="entry-categories clearfix">
  <?php the_category(' '); ?>
</div>
<div class="entry-tags clearfix">
  <?php the_tags('<ul><i class="ion-pricetags"></i> <li>','</li><li>','</li></ul>'); ?>
</div>
</div>