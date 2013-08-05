<?php 
/*
YARPP Template: Molnar Orsolya Sablon
Author: mitcho (Michael Yoshitaka Erlewine)
Description: A simple example YARPP template.
*/
?>
<div class="entry-related">
  <h3>Kapcsolódó tartalmak</h3>
  <?php if (have_posts()):?>
  <ul>
  	<?php while (have_posts()) : the_post(); ?>
  	<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><!-- (<?php the_score(); ?>)--></li>
  	<?php endwhile; ?>
  </ul>
  <?php else: ?>
  <p>Nincsenek kapcsolódó írások</p>
  <?php endif; ?>
</div>
