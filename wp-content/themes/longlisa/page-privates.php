<?php
/*
Template Name: Privates
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BREADCRUMBS -->
  <div class="breadcrumb_offering container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
  </div>
<!-- CLOSE BREADCRUMBS -->

<!-- BILL BOARD -->
    <section class="billboard_blue_wrapper offering_wrapper">
        <div class="billboard center_text offering_billboard title_space title_nospace">
            <div class="title_line">
                <h2 class="offering_title_small"><?php the_field('title_small'); ?></h2>
            </div>
            <h2 class="offering_title_big title_uppercase title_size_increase"><?php the_field('title_large'); ?></h2>
            <div class="billboard_para">
                <p><?php the_field('title_para'); ?></p>
            </div>

            <div class="center-text button-box center_text">
                <a href="<?php the_field('cta_button_link'); ?>"><p class="ghost_button ghost_btn_blue"><?php the_field('cta_button_label'); ?></p></a>
            </div>
        </div>
    </section> <!-- closes .billboard_blue_wrapper -->

<!-- start TESTIMONIAL TWO BLOCK  -->
<?php get_template_part('partials/testimonial_two_block'); ?>
<!-- end TESTIMONIAL TWO BLOCK  -->

<!-- start WP block editor content -->
<article id="lisa_story" class="content_grid content_editor">
  <?php the_content(); // Dynamic Content ?>
</article>
<!-- end WP block editor content -->

<?php get_template_part('partials/article_icon'); ?>

    <!-- start large quote -->
    <h3 class="large_quote"><?php the_field('quote'); ?></h3>
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

<?php endwhile; endif; ?>

<?php get_footer(); ?>
