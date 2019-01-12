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


  <!--open REPEATER credential logos -->
  <div class="credentials_box_width">
    <?php if(have_rows('credential_logos', 'option')): ?>
      <ul>
        <?php while(have_rows('credential_logos', 'option')): the_row();
          //Vars
          $logo = get_sub_field('logo', 'option');
          $link = get_sub_field('link', 'option');
          ?>

          <li class="hvr-bob">
            <a href="<?php echo $link; ?>" target="blank">
              <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>" width="100">
            </a>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
  <!-- close REPEATER credential logos -->

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
      <p class="ya_disclaimer"><?php the_field('yoga_alliance_disclaimer', 'option'); ?></p>
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
