<?php
/*
Template Name: Testimonials
*/
get_header(); ?>

<!-- start two grid splash -->
<section class="two_grid">
    <div class="two_grid_one">
        <div class="saying_quote">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote_circle.png">
        </div>

        <h3><?php the_field('splash_testimonial_title'); ?></h3>

        <div class="testimonial_feature_content">
            <p><?php the_field('splash_testimonial_para'); ?></p>

            <p>realize how life is so sweet.  even our difficulties teach us to just be.  learn to witness. </p>
        </div>

        <p class="testimonial_name"><?php the_field('splash_testimonial_name'); ?></p>
    </div>

    <div class="two_grid_two">
        <div class="fitvids">
            <a href="#" class="js-video">
              <?php

              $image = get_field('splash_testimonial_image');

              if ( !empty($image) ): ?>

                <img src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" data-video="<?php the_field('splash_testimonial_link'); ?>"/>

              <?php endif; ?>

            </a>
        </div>
    </div>
</section>
<!-- end two grid splash -->

<!-- start large quote -->
<h3 class="large_quote large_quote_margin"><?php the_field('splash_cursive_quote'); ?></h3>
<!--end large quote -->


<section class="offering_page_header">
    <div class="home_title">
        <h1><?php the_field('splash_h_one'); ?></h1>
    </div>
</section>

<div class="dots_hug_up dots_space_bottom">
<?php get_template_part('partials/dots'); ?>
</div>

<!-- start TESTIMONIAL FIVE BLOCK staggered 5 square of testimonial quotes -->
<?php get_template_part('partials/testimonial_five_block'); ?>
<!-- end staggered 5 square of testimonial quotes -->

<div class="dots_hug_up dots_space_bottom">
  <?php get_template_part('partials/dots'); ?>
</div>

<!-- start 3 ARTICLE ICON/class cards -->
<?php get_template_part('partials/article_icon'); ?>
<!-- end 3 ARTICLE ICON/class cards -->

<!-- start the actual blog post; below is the sub header as an h3 -->
<section>
<div class="lisa_story_title blog_post_subtitle">

    <h3>A long story.</h3>
    <h3>a case study</h3>
</div>

<div class="lisa_story_content">
    <div class="lisa_story_para blog_post_content">
        <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life. it has been challenging. it has been invigorating.
        </p>

        <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life. <a href="index.html">it's been a great life. </a>  it's been a great life.  it has been challenging. it has been invigorating.
        </p>

        <figure>
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png" />

            <figcaption>Let's see how this caption works for an image. Testing a really long caption, too. Let's see how it handles a second line. </figcaption>

        </figure>

        <h2>Stuff You Need to Know</h2>
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

</div> <!-- end  all blog content -->
</section>
<!-- end end blog_post_content section -->

<!-- start large quote -->
<h3 class="large_quote testimonial_cta">start from where you are</h3>
<!--end large quote -->

<!-- start CTA button -->
<div class="center-text button-box center_text">
    <a href="offerings.html"><p class="ghost_button ghost_btn_blue">check out Lisa's offerings</p></a>
</div>
<!-- end CTA button -->

<!-- start TESTIMONIAL FIVE BLOCK staggered 5 square of testimonial quotes -->
<?php get_template_part('partials/testimonial_five_block_bottom'); ?>
<!-- end staggered 5 square of testimonial quotes -->

<div class="dots_hug_up dots_space_bottom">
    <?php get_template_part('partials/dots'); ?>
</div>

<!-- picture bar -->
    <div class="picture_bar">
        <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png">
    </div>
<!--close picture bar -->

<!-- start large quote -->
<h3 class="large_quote">experience the benefits of therapeutic movement </h3>
<!--end large quote -->

<div class="dots_hug_up">
    <?php get_template_part('partials/dots'); ?>
</div>

<!-- start FLIP CARDS -->
<?php get_template_part('partials/flip_card'); ?>
<!-- end FLIP CARDS -->

<div class="dots_hug_up dots_space_bottom">
    <?php get_template_part('partials/dots'); ?>
</div>


<?php get_footer(); ?>
