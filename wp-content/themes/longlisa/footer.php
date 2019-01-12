<!--close main -->
</main>

<!-- begin footer -->
<footer class="footer">

  <div  class="newsletter_signup">
      <div class="newsletter_video">
          <h3><?php the_field('title', 'option'); ?></h3>

          <div class="newsletter_video_box grow fade">
            <div class="fitvids">
                <a href="#" class="js-video">
                  <?php

                  $image = get_field('image', 'option');

                  if ( !empty($image) ): ?>

                    <img src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" data-video="<?php the_field('image_link', 'option'); ?>"/>

                  <?php endif; ?>

                </a>
            </div>
          </div>
      </div> <!--close newsletter_video -->

      <!-- Begin Constant Contact Form  -->
      <div class="ctct-form" ><?php the_field('form', 'option'); ?> </div>
      <!-- End Constant Contact Form  -->
  </div> <!--closes .newsletter_signup -->

  <!--open credential logos -->
  <div class="credentials_box_width">
      <ul>
          <li class="hvr-bob"><a href="http://www.IAYT.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/iayt.jpg"  width="150"></a></li>

          <li class="hvr-bob"><a href="http://www.yogaalliance.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/yacep.png" width="50"></a></li>

          <li class="hvr-bob"><a href="http://www.yogaalliance.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/ryt.png" width="50"></a></li>

          <li class="hvr-bob"><a href="http://www.yogaalliance.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/rcyt.png" width="50"></a></li>

          <li class="hvr-bob"><a href="https://franklinmethod.com" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/fm_logo.jpg" width="50"></a></li>
      </ul>
  </div>
  <!-- close credential lgoos -->

  <!-- open terms + copyright -->
  <ul class="terms">
    <?php html5blank_nav_footer(); ?>
  </ul>

  <section class="copyright">
  <p>&copy; <?= date('Y'); ?> Lisa Long - all rights reserved</p>
  <p>custom coded with love and intention by <a href="http://www.garrisonridge.com" target="blank">Garrison Ridge</a></p>
  </section>
  <!-- close terms + copyright -->

        <!-- open yoga alliance disclaimer -->
        <div class="footer_para">
      <p class="ya_disclaimer">The yoga therapy components of Lisa Long's teaching are based on her International Association of Yoga Therapists Certification (IAYT) and not derived from status as an E-RYT 500, RCYT, YACEP with the Yoga Alliance Registry.</p>
        </div>
        <!-- close yoga alliance disclaimer -->

        <!-- scroll to top  -->
        <a href="#" class="js-scroll-to-top" id="button">
            <div class="back_to_top">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/arrow-up.png" />
            </div>
        </a>

    </footer>

<!-- closing div for .container -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- connects to "no-js" on <html> tag at top of doc; helps with folks in older operating systems -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

  <!-- SCRIPTS / JAVASCRIPT ARE ENQUED THROUGH FUNCTIONS.PHP -->

  	<?php wp_footer(); ?>

		<!-- TODO: ADD GOOGLE ANALYTICS -->

	</body>
</html>
