<?php
/*
Template Name: Retreats
*/
get_header(); ?>

<!-- BREADCRUMBS -->
  <div class="breadcrumb_offering container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
  </div>
<!-- CLOSE BREADCRUMBS -->

<?php get_template_part('partials/billboard'); ?>

<?php get_template_part('partials/link_card'); ?>

<?php get_template_part('partials/pix_header'); ?>

<?php get_template_part('partials/event_section'); ?>

<!-- start large quote -->
<?php get_template_part('partials/cursive_quote'); ?>
<!--end large quote -->

<!-- start WP block editor content -->
<article id="lisa_story" class="content_grid content_editor">
  <?php the_content(); // Dynamic Content ?>
</article>
<!-- end WP block editor content -->

<!-- start TESTIMONIAL TWO BLOCK  -->
<?php get_template_part('partials/testimonial_two_block'); ?>
<!-- end TESTIMONIAL TWO BLOCK  -->

<!-- start BLOG CATEGORIES 3 ICON/class cards -->
<?php get_template_part('partials/category_preview'); ?>
<!-- end BLOG CATEGORIES 3 ICON/class cards -->


<?php get_footer(); ?>
