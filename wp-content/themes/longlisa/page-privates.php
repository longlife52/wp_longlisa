<?php
/*
Template Name: Privates
*/
get_header(); ?>

<!-- BILL BOARD -->
    <section class="billboard_blue_wrapper offering_wrapper">
        <div class="billboard center_text offering_billboard title_space title_nospace">
            <div class="title_line">
                <h2 class="offering_title_small">get focused in a </h2>
            </div>
            <h2 class="offering_title_big title_uppercase title_size_increase">Private</h2>
            <div class="billboard_para">
                <p>A one-on-one session with Lisa will help you understand your body better.</p>
            </div>

            <div class="center-text button-box center_text">
                <a href="offerings.html"><p class="ghost_button ghost_btn_blue">start now</p></a>
            </div>
        </div>
    </section> <!-- closes .billboard_blue_wrapper -->

<!-- start TESTIMONIAL TWO BLOCK  -->
<?php get_template_part('partials/testimonial_two_block'); ?>
<!-- end TESTIMONIAL TWO BLOCK  -->

    <!-- start PRIVATE DETAILS  -->
    <section class="lisa_story" id="lisa_story">
        <div class="lisa_story_title">
            <h1 class="story_title_pad">Gain Insight and Understanding</h1>
            <h3 class="title_justify_right"></h3>
        </div>

        <div class="lisa_story_para blog_post_content">
            <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life. it has been challenging. it has been invigorating.
            </p>

            <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life. <a href="index.html">it's been a great life. </a>  it's been a great life.  it has been challenging. it has been invigorating.
            </p>

            <figure>
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png" />

                <figcaption>Let's see how this caption works for an image. Testing a really long caption, too. Let's see how it handles a second line. </figcaption>

            </figure>

            <aside>
            <h6>Check out if this aside callout works.
            </h6>
            </aside>

            <h2>Sub Headers Break Things Up</h2>
            <p>how does this paragraph work with the aside? the aside above works with this paragraph. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
            </p>

            <ul class="lisa_story_ul">
                <li>Great thing one.
                </li>
                <li>Great thing two. Checking to see what happens when my list is longer than line.  Just how does it go?
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
                <li>Travel is fun. Checking to see what happens when my list is longer than line.  Just how does it go?
                </li>
                <li>Relax and feel joy.
                </li>
            </ol>

            <aside>
                <h6>Let's see what this aside call out does, too. </h6>
            </aside>

            <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
            </p>
        </div>
        <!-- end blog_post_content -->

        <div class="center-text button-box center_text">
            <a href="offerings.html"><p class="ghost_button ghost_btn_blue">contact lisa</p></a>
        </div> <!-- end PRIVATE DETAIL content -->
    </section>
<!-- end PRIVATE DETAILS -->

    <!-- start large quote -->
    <h3 class="large_quote">experience the benefits of therapeutic movement </h3>
    <!--end large quote -->

<div class="dots dots_hug_up">
<?php get_template_part('partials/dots'); ?>
</div>

<!-- start FLIP CARDS -->
<?php get_template_part('partials/flip_card'); ?>
<!-- end FLIP CARDS -->

<div class="dots dots_hug_up dots_space_bottom">
<?php get_template_part('partials/dots'); ?>
</div>

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

<!-- picture bar -->
    <div class="picture_bar">
        <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png">
    </div>
<!--close picture bar -->


<?php get_footer(); ?>
