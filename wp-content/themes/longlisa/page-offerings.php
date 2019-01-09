<?php
/*
Template Name: Offerings
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <nav class="nav_offering container">
    <ul class="container">
    <?php html5blank_nav_offering(); ?>
    </ul>
  </nav>

<!-- BILL BOARD -->
  <section class="billboard_blue_wrapper offering_wrapper">
      <div class="billboard center_text   ">
          <h2 class="offering_title_big"><?php the_field('billboard_title_first_line'); ?></h2>
          <div class="title_line">
              <h2 class="offering_title_small no_pad"><?php the_field('billboard_title_second_line'); ?></h2>
          </div>
          <div class="billboard_para">
              <p><?php the_field('billboard_para'); ?></p>
          </div>
      </div>
  </section> <!-- closes .billboard_blue_wrapper -->

    <section class="offering_page_header"> <!-- open h1 area -->
      <!-- picture bar -->
      <div class="picture_bar">

        <?php

        $image = get_field('billboard_img');

        if ( !empty($image) ): ?>

          <img src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" />

        <?php endif; ?>

      </div>
      <!-- close picture bar -->

        <div class="home_title">
            <h1><?php the_field('billboard_offering_h_one'); ?></h1>
        </div>
    </section> <!-- close h1 area -->

    <div class="dots_hug_up dots_space_bottom">
    <?php get_template_part('partials/dots'); ?>
    </div>

    <!-- start offering tiles -->
    <section class="offering_tile_wrapper">

        <div class="offering_tile_one">
            <h3 class="offering_tile_title"><?php the_field('offering_one_title'); ?></h3>
            <p class="offering_para"><?php the_field('offering_one_para'); ?></p>

            <div class="center_text button-box">
                <a href="<?php the_field('offering_one_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('offering_one_button_label'); ?></p></a>
            </div>
        </div>

        <div class="offering_tile_two">
            <h3 class="offering_tile_title"><?php the_field('offering_two_title'); ?></h3>
            <p class="offering_para"><?php the_field('offering_two_para'); ?></p>

            <div class="center_text button-box">
                <a href="<?php the_field('offering_two_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('offering_two_button_label'); ?></p></a>
            </div>
        </div>

        <div class="offering_tile_three fill">
          <?php

          $image = get_field('tall_image');

          if ( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" />

          <?php endif; ?>
        </div>

        <div class="offering_tile_four">
            <h3 class="offering_tile_title"><?php the_field('offering_three_title'); ?></h3>
            <p class="offering_para"><?php the_field('offering_three_para'); ?></p>

            <div class="center_text button-box">
                <a href="<?php the_field('offering_three_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('offering_three_button_label'); ?></p></a>
            </div>
        </div>

        <div class="offering_tile_five">
            <h3 class="offering_tile_title"><?php the_field('offering_four_title'); ?></h3>
            <p class="offering_para"><?php the_field('offering_four_para'); ?></p>

            <div class="center_text button-box">
                <a href="<?php the_field('offering_four_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('offering_four_button_label'); ?></p></a>
            </div>
        </div>

        <div class="offering_tile_six fill">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/trikonasancutoutweb.png">
        </div>

        <div class="offering_tile_seven">
            <h3 class="offering_tile_title"><?php the_field('offering_five_title'); ?></h3>
            <p class="offering_para"><?php the_field('offering_five_para'); ?></p>

            <div class="center_text button-box">
                <a href="<?php the_field('offering_five_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('offering_five_button_label'); ?></p></a>
            </div>
        </div>

        <div class="offering_tile_eight">
            <h3 class="offering_tile_title"><?php the_field('offering_six_title'); ?></h3>
            <p class="offering_para"><?php the_field('offering_six_para'); ?></p>

            <div class="center_text button-box">
                <a href="<?php the_field('offering_six_button_link'); ?>"><p class="ghost_button ghost_btn_white "><?php the_field('offering_six_button_label'); ?></p></a>
            </div>
        </div>
    </section>
    <!-- end offering tiles -->

<!-- start large quote -->
<h3 class="large_quote"><?php the_field('cursive_saying_offering'); ?></h3>
<!--end large quote -->

<!-- start WP block editor content -->
<article id="lisa_story" class="content_grid content_editor">
  <?php the_content(); // Dynamic Content ?>
</article>
<!-- end WP block editor content -->

<!-- start TESTIMONIAL TWO BLOCK  -->
<?php get_template_part('partials/testimonial_two_block'); ?>
<!-- end TESTIMONIAL TWO BLOCK  -->

<!-- start - BLOG CATEGORIES 3 ICON/class cards -->
<?php get_template_part('partials/category_preview'); ?>
<!-- end BLOG CATEGORIES 3 ICON/class cards -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
