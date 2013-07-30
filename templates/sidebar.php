

  <?php  if (is_page_template( 'template-kezeles.php' )) : ?>
  <div class="wrap container tovabbiak clearfix" role="complementary">
  <div class="content row">
  <aside>
    <header>
      <h2>További arckezelések</h2>
    </header>
    <div class="tovkez">
      <h3>Aromaterápiás wellness élménykezelések</h3>
      <p>Külső-belső megújulás és teljes kikapcsolódás aromaterápia segítségével.</p>
      <a class="read-more hide-text" href="#">Aromaterápiás wellness élménykezelések</a>
    </div>
    <div class="tovkez">
      <h3>Hévízi iszapos-gyógyvizes kezelések</h3>
      <p>A felhasznált termékek a hévízi tó vizét, gabonakivonatokat, biológiai tisztaságú illóolajokat és gyógyiszapot tartalmaznak</p>
      <a class="read-more hide-text" href="#">Hévizes</a>
    </div>
    <div class="tovkez">
      <h3>Mélyhámasztások</h3>
      <p>Ezt igazából gépekkel végezzük, szóval szerintem ezt gépi kezelések közé kellene tenni, átnavigálással</p>
      <a class="read-more hide-text" href="#">Mélyhámlasztások</a>
    </div>
    <div class="tovkez">
      <h3>Hévízi iszapos-gyógyvizes kezelések</h3>
      <p>A felhasznált termékek a hévízi tó vizét, gabonakivonatokat, biológiai tisztaságú illóolajokat és gyógyiszapot tartalmaznak</p>
      <a class="read-more hide-text" href="#">Hévizes</a>
    </div>
    <div class="tovkez">
      <h3>Tini kezelések</h3>
      <p>A felhasznált termékek a hévízi tó vizét, gabonakivonatokat, biológiai tisztaságú illóolajokat és gyógyiszapot tartalmaznak</p>
      <a class="read-more hide-text" href="#">Tini</a>
    </div>
    <a class="more" href="#">Még több kezelés ...</a>
  </aside>
    </div><!-- /.content -->
  </div><!-- /.wrap.tovabbiak -->
  <?php endif; ?>
  
  <?php if (roots_display_sidebar()) : ?>
  <div class="wrap container sidebar clearfix" role="complementary">
    <div class="content row">
      <aside class="<?php echo roots_sidebar_class(); ?>">
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </aside><!-- /.sidebar -->
    </div><!-- /.content -->
  </div><!-- /.wrap.sidebar -->
  <?php endif; ?>


  </div><!-- /.content -->
</div><!-- /.wrap -->