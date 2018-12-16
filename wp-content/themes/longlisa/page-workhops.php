<?php
/*
Template Name: Workshops
*/
get_header(); ?>

<!-- BREADCRUMBS -->
  <div class="breadcrumb_offering">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
  </div>
<!-- CLOSE BREADCRUMBS -->

<?php get_template_part('partials/billboard'); ?>

<?php get_template_part('partials/pix_header'); ?>

<!-- start large quote -->
<?php get_template_part('partials/cursive_quote'); ?>
<!--end large quote -->

<!-- start TESTIMONIAL TWO BLOCK  -->
<?php get_template_part('partials/testimonial_two_block'); ?>
<!-- end TESTIMONIAL TWO BLOCK  -->

<!-- start BLOG CATEGORIES 3 ICON/class cards -->
<?php get_template_part('partials/category_preview'); ?>
<!-- end BLOG CATEGORIES 3 ICON/class cards -->


<?php get_footer(); ?>
