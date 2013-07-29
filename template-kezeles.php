<?php
/*
Template Name: Kezelés Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="page-header wrap clearfix">
      <aside class="akcio-fej">
        <h3>Aktuális akció</h3>
        <p class="akcio-title">
          <a href="#">Aroma eszenciás masszírozás radírral</a>
          <span>megtakarítás 6000 Ft</span>
        </p>
      </aside>
      <header>
        <a href="#" class="kategoria">Arckezelések</a>
        <h1 class="entry-title">Aromaterápiás wellness élmény kezelések</h1>
      </header>
    </div>
    <div class="entry-side">
      <div class="entry-intro">
        <p>Meditatív ellazulás és teljes kikapcsolódás az bőrápoló kezelések alatt. Testi lelki felüdülés.</p>
      </div>
      <div class="entry-testimon">
        <blockquote>
          <p>Nagyon féltem először mert allergiás vagyok jónéhány növényre, de végül rá kellet jönnöm, hogy ez csúcs amit orsi művelt velem.</p>
          <footer>&mdash; Csabainé Rozi</footer>          
        </blockquote>
      </div>
      <div class="entry-actionblock">
        <p class="tel">Foglalj időpontot <span>+36 70 7705653</span></p>
        <p class="online"><a href="#">vagy jelentkezz Online</a></p>
      </div>
    </div>
    <div class="entry-content">
      <p><strong>A mai rohanó világban, ahol mindenki ragyogóan szép bőrt szeretne, jó, hogyha a hétköznapokban ezzel egy időben teljesen ki is tud kapcsolódni, lazítani.</strong></p>
      <p>Ezt az aromaterápiás kezelésekkel 100%-osan el tudjuk érni. Ezen kezelések alatt nem csak a bőrünk szépül, de a testünk is ellazul.</p>
      <h3>Miért aromaterápia</h3>
      <ul>
        <li>Azért mert az illóolajok a bőr mellett a lélekre is hatnak, így érhető el a kezelések alatt a teljes relaxáció.</li>
        <li>Az illóolajokat növényekből állítják elő, ezért teljesen <strong>tiszta hatóanyagok.</strong></li>
        <li>Az általam felhasznált <a href="#"><em>Panarom</em> illóolajok</a> kiváló minőségűek.</li>
        <li>Az illóolajok mellett felhasználok <strong>rügy és virágkivonatokat, gyógynövény- és virágvizeket,</strong> s ezeket kombinálom <a href="#"><em>Adrienne Feller</em> kreatív kozmetikai termékeivel.</a>
      </ul>
      <h3>Mitől wellness élménykezelés</h3>
      <ul>
        <li>Azért, mert az egész testre kihatnak, külsőleg és belsőleg is. A kezelések menete eltér a hagyományostól.</li>
        <li>A kezelések elején ellazítjuk az egész testet, illatos borogatásokat használunk.</li>
        <li>Minden egyes kezelési lépés nyugalmat áraszt. Az érintésnél nem csak az arc, nyak és dekoltázs területére koncentrálunk hanem a  fejtetőre, a karokra, a lábakra és a hátra is, így lesz kerek egész egy kezelés, amely a végén visszavezetéssel zárul.</li>
        <li>Bizonyított, hogy az illóolajok szaglás útján is hatnak, így befolyásolják hangulatunkat és hatnak az érzésvilágunkra.</li>
        <li>Kezelés után azt érezzük, mintha egy egész hétvégén át pihentünk volna,  s ettől wellness élményünk lesz.</li>
      </ul>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?> 
