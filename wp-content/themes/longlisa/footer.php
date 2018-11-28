<!--close main -->
</main>

<!-- begin footer -->
    <footer class="footer">
        <div  class="newsletter_signup">
            <div class="newsletter_video">
                <h3>Another [ FREE ] way to feel better. </h3>

                <div class="newsletter_video_box grow fade">
                    <a href="https://youtu.be/zSt7k_q_qRU" target="blank" class="strip"> <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/footer_video_thumbnail.jpg" class="bottom_edge_shadow">
                    </a>
                </div>
            </div> <!--close newsletter_video -->

            <!-- Begin Constant Contact Inline Form Code -->
            <div class="ctct-inline-form" data-form-id="30d30548-5ac1-4ec7-b91b-0142652f495c"></div>
            <!-- End Constant Contact Inline Form Code -->
        </div> <!--closes .newsletter_signup -->

        <!--open yoga logos -->
        <div class="credentials_box_width">
            <ul>
                <li class="hvr-bob"><a href="http://www.IAYT.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/iayt.jpg"  width="150"></a></li>

                <li class="hvr-bob"><a href="http://www.yogaalliance.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/yacep.png" width="50"></a></li>

                <li class="hvr-bob"><a href="http://www.yogaalliance.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/ryt.png" width="50"></a></li>

                <li class="hvr-bob"><a href="http://www.yogaalliance.org/" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/rcyt.png" width="50"></a></li>

                <li class="hvr-bob"><a href="https://franklinmethod.com" target="blank"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/fm_logo.jpg" width="50"></a></li>
            </ul>
        </div>
        <!-- close yoga lgoos -->

        <!-- open copyright -->
        <ul class="copyright">
          <?php html5blank_nav_footer(); ?>
        </ul>


        <p class="footer_para">&copy; <?= date('Y'); ?> Lisa Long - all rights reserved</p>
        <p class="footer_para">custom coded by - <a href="http://www.garrisonridge.com" target="blank">Garrison Ridge</a></p>

        <!-- close copyright -->

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
