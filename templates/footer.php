<footer class="content-info" role="contentinfo">

    <div class="f1 wrap">
        <div class="wrapped clearfix">
            <?php $the_fact=new WP_Query ( array (
        'cat' => 7,
        'post_type' => 'post',
        'posts_per_page' => 1
      )); ?>
            <section class="widget widget_action">
                <?php if (!$the_fact->have_posts()) : ?>
                <h4>
                    <h3>Akció</h3>
                    <h4>Jelenleg nincs kiemelt akció, iratkozz fel hírlevelünkre ha értesülni akarsz a következőröl.
                    </h4>
                    <?php else : ?>
                    <?php while ($the_fact->have_posts()) : $the_fact->the_post(); ?>
                    <h3>Aktuális akció</h3>
                    <h4><?php the_title(); ?></h4>
                    <a href="<?php the_permalink(); ?>" class="details">Akció részletei<i
                            class="ion-ios7-arrow-right"></i></a>
                    <?php endwhile; ?>
                    <?php endif; ?>
            </section>
            <?php dynamic_sidebar('sidebar-footer-1'); ?>
            <section class="widget widget_tudtade">
                <h3>Tudtad-e?</h3>
                <ol>
                    <li>Ajándékba is adhatsz kozmetikai kezelést. <a href="<?php echo get_permalink('647'); ?>">Vásárolj
                            ajándékutalványt</a></li>
                    <li>Ha először jársz nálunk, vendégünk vagy egy <a
                            href="<?php echo get_permalink('651'); ?>">ingyenes arcidiagnosztikára.</a></li>
                    <li>Hírlevél feliratkozóink között havonta kisorsolunk egy <a
                            href="<?php echo get_permalink('654'); ?>">kézmasszázst.</a></li>
                </ol>
            </section>
        </div><!-- /.wrapped -->
    </div><!-- / .wrap / .f1 -->

    <div class="f2 wrap">
        <div class="wrapped clearfix">
            <section class="widget widget_impr">
                <p>&copy; <?php echo date('Y'); ?> <strong><?php bloginfo('name'); ?></strong><br />
                    Handcrafted by <a target="_blank"
                        href="https://hydrogene.hu/referencia/kozmetikus-arculat-es-weboldal/">Hydrogene Design</a></p>
                <p><strong>Megtalálsz még itt is</strong><br>
                    <a href="https://www.facebook.com/akozmetikusom" class="face"><i
                            class="ion-social-facebook"></i></a>
                    <a href="https://www.instagram.com/molnar_kozmetika/" class="insta"><i class="ion-social-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
            <path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"/>
            <path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28zM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112z"/>
        </svg></i></a>
                    <a href="#" class="twitter"><i class="ion-social-twitter"></i></a>
                </p>
            </section>
            <?php dynamic_sidebar('sidebar-footer-2'); ?>

            <section class="widget widget_impr">
                <h3>Iratkozz fel hírlevelünkre</h3>
                <p><strong>Újdonságainkról és az akcióinkról értesülj elsőként!</strong></p>
                <a href="<?php the_permalink(2301); ?>" class="btn">Tovább a feliratkozásra <i
                        class="ion-paper-airplane"></i></a>

                <a class="tothetop" href="#"><i class="ion-arrow-up-c"></i></a>
            </section>

        </div><!-- /.wrapped -->
    </div><!-- / .wrap / .f2 -->

</footer>

<?php wp_footer(); ?>
