<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--start about Lisa -->
        <section class="about_lisa bottom_edge_shadow">
            <div class="about_wrapper about_background">
                <div class="about_img_wrapper lisa_img_wrapper">
                    <img class="img_circle" src="<?php bloginfo('template_url'); ?>/assets/dist/img/lisa_headshot.jpg">
                </div>
                <!--
                <div class="about_img_wrapper about_lisa">
                -->
                <div class="about_content_wrapper about_wrapper_space">
                <div class="about_content bottom_edge_shadow about_content_space">
                    <h1>Lisa Long's Credentials</h1>

                    <ul>
                        <li>C-IAYT Yoga Therapist </li>
                        <li>Pilates Comprehensive Certified </li>
                        <li>Ansuara Certified </li>
                        <li>Franklin Method Educator</li>
                        <li>YACEP, E-RYT 500 </li>
                        <li>Body Balance Yoga Therapy Certified </li>
                        <li>M.A., Mass Communications </li>
                    </ul>

                    <div class="button-box about_button_wrapper">
                        <div class="btn_blue">
                        <a href="#lisa_story"><p>Read My Story</p></a>
                        </div>
                    </div>
                </div>
            </div> <!--close .about_content_wrapper -->
            </div>
        </section>
        <!-- end about Lisa -->

        <!-- start community giving  -->
                <section class="community_give">

                  <?php get_template_part('partials/dots'); ?>

                <h3>Giving Back to Our Community </h3>
                <div class="community_give_description">
                    <p>Lisa regularly offers fundraisers and community support for non-profits in Jacksonville, FL. She remains grateful for everyone who shows up and generously gives to make each event successful. </p>
                </div>

                  <?php get_template_part('partials/flip_card'); ?>

                  <?php get_template_part('partials/dots'); ?>

                </section> <!-- close community giving section -->

        <!-- start 3 ICON/class cards -->
        <section class="class_preview_wrapper icon_card_wrapper">
            <h3 class="icon_text_color">Movement Helps</h3>
            <div class="sub_title_para">
                <p class="icon_text_color">Get the benefits and get moving, today! Enjoy the quality of a long life doing the things you love! All it takes is a personal resolve to feel better.</p>
            </div>
                <!-- start ICON/class card wrapper -->
                <div class="class-card-wrapper">
                    <!-- start card one -->
                    <a href="https://youtu.be/zSt7k_q_qRU" target="blank">
                        <div class="icon_individual_card grow">
                            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/brain.png">
                            <p class="icon_text_color">Get moving to help your brain.</p>
                            <img>
                        </div>
                    </a>
                    <!-- end card one -->

                    <!-- start card two -->
                    <a href="https://youtu.be/zSt7k_q_qRU" target="blank">
                        <div class="icon_individual_card grow">
                            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/knee.png">
                            <p class="icon_text_color">Move to keep your joints healthy.</p>
                            <img>
                        </div>
                    </a>
                    <!-- end card two -->

                    <!-- start card three -->
                    <a href="https://youtu.be/zSt7k_q_qRU" target="blank">
                        <div class="icon_individual_card grow">
                            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/power.png">
                            <p class="icon_text_color">Keep moving for vibrancy.</p>
                            <img>
                        </div>
                    </a>
                    <!-- end card three -->
            </div>
            <!-- end ICON/class card wrapper -->
        </section>

        <!-- end 3 ICON/class cards -->

        <!-- start Lisa's story -->
        <section class="lisa_story" id="lisa_story">
            <div class="lisa_story_title">
                <h3>We all have a story.</h3>
                <h3 class="title_justify_right">Here's mine.</h3>
            </div>

            <div class="lisa_story_width lisa_story_para blog_post_content">
                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <aside>
                    <h6>Let's see what this aside call out does, too, <a href="index.html" >with a hyperlink.</a> </h6>
                </aside>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <h2>Sub Headers Break Things Up</h2>
                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <figure>
                    <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png" />

                    <figcaption>Let's see how this caption works for an image. Testing a really long caption, too. Let's see how it handles a second line. </figcaption>

                </figure>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <ul class="lisa_story_ul">
                    <li>Great thing one.
                    </li>
                    <li>Great thing two.
                    </li>
                    <li>Really awesome thing three.
                    </li>
                </ul>

                <aside>
                    <h6>Let's see what this aside call out does, too, <a href="index.html" >with a hyperlink.</a> </h6>
                </aside>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <ol class="lisa_story_ol">
                    <li>Life is good.
                    </li>
                    <li>Travel is fun.
                    </li>
                    <li>Relax and feel joy.
                    </li>
                </ol>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>
            </div> <!-- end lisa story content -->

            <!-- start CTA button -->
            <div class="center-text button-box center_text">
                <a href="offerings.html"><p class="ghost_button ghost_btn_blue">check out my offerings</p></a>
            </div>
            <!-- end CTA button -->
        </section>
        <!-- end Lisa's story -->

        <!-- start large quote -->
        <h3 class="large_quote">experience the benefits of therapeutic movement </h3>

        <!--end large quote -->

        <!-- start four square grid layout -->
        <div class="four_square_wrapper two_square_wrapper">
            <!-- open square two -->
            <div class="grid_square_one square_two fill">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/lisa_teach_four.jpg">
            </div> <!-- close square two -->

            <!-- open square three -->
            <div class="grid_square_two square_three testimonial_link">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote.svg">
                <a href="testimonials.html">
                    <div class="square_testimonial_wrapper">
                        <p class="square_testimonial">Lisa Long is one of the most conscientious teachers. She helped me relieve pain and discover new ways to move. </p>
                        <p class="square_testimonial_name">~Jack W.</p>

                        <div class="btn_round hvr-wobble-to-top-right square_testimonial_button_align">
                        <a href="testimonials.html"><p >read</p><p>more</p></a>
                    </div>

                </div> <!-- close .square_testimonial-->
                </a>
            </div> <!-- close square three -->

        </div> <!-- close .foursquarewrapper -->
        <!--end four square grid layout -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
