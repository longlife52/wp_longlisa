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

<!-- start WP block editor content -->
<article id="lisa_story" class="content_grid content_editor">
      	<?php the_content(); // Dynamic Content ?>
</article>
<!-- end WP block editor content -->

<!-- start large quote -->
<?php get_template_part('partials/cursive_quote'); ?>
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
<h3 class="large_quote">Start from where you are.</h3>
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
