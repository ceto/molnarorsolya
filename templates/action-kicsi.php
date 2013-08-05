<aside class="akcio-fej">
  <?php $the_fact=new WP_Query ( array (
        'cat' => 7,
        'post_type' => 'post',
        'posts_per_page' => 1
      )); ?>
  <?php if (!$the_fact->have_posts()) : ?>
    <h3>Aktuális akció</h3>
    <h4 class="akcio-title">
      Jelenleg nincs kiemelt akció, iratkozz fel hírlevelünkre ha értesülni akarsz a következőröl.
    </h4>
    <a href="<?php the_permalink(); ?>">Állandó akció</a>
  <?php else : ?>
    <?php while ($the_fact->have_posts()) : $the_fact->the_post(); ?>
      <h3>Aktuális akció</h3>
      <h4 class="akcio-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h4>
      <a href="<?php the_permalink(); ?>" class="btn">Akció részletei</a>
    <?php endwhile; ?>
  <?php endif; ?>
</aside>