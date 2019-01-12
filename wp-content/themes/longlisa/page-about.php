<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--start about Lisa -->
  <section class="about_lisa">
      <div class="about_wrapper about_background">
          <div class="about_img_wrapper lisa_img_wrapper">
            <?php

            $image = get_field('image');

            if ( !empty($image) ): ?>

              <img class="about_page_img" src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" />

            <?php endif; ?>
          </div>
          <!--
          <div class="about_img_wrapper about_lisa">
          -->
          <div class="about_content_wrapper about_wrapper_space">
          <div class="about_content  about_content_space">
              <h1><?php the_field('about_page_title'); ?></h1>

<!-- START REPEATER LIST -->
            <?php if(have_rows('credentials_list')): ?>
            <ul>
              <?php while(have_rows('credentials_list')): the_row();
                //Vars
                $credential = get_sub_field('credential');
                ?>
                <li><?php echo $credential; ?></li>
              <?php endwhile; ?>
            </ul>
            <?php endif; ?>
<!-- END REPEATER LIST -->
            <div class="button-box about_button_wrapper">
                <div class="btn_blue">
                <a href="#lisa_story"><p><?php the_field('credential_button_label'); ?></p></a>
                </div>
            </div>
        </div>
    </div> <!--close .about_content_wrapper -->
    </div>
</section>
<!-- end about Lisa -->

<!-- start large quote -->
<h3 class="large_quote"><?php the_field('cursive_quote'); ?></h3>
<!--end large quote -->

<!-- start TESTIMONIAL TWO BLOCK  -->
<?php get_template_part('partials/testimonial_two_block'); ?>
<!-- end TESTIMONIAL TWO BLOCK  -->

<!-- start community giving  -->
  <section class="community_give">

    <?php get_template_part('partials/dots'); ?>

  <h3><?php the_field('giving_title'); ?></h3>
  <div class="community_give_description">
      <p><?php the_field('giving_para'); ?></p>
  </div>

    <?php get_template_part('partials/flip_card'); ?>

    <?php get_template_part('partials/dots'); ?>

  </section> <!-- close community giving section -->

<!-- start WP block editor content -->
<article id="lisa_story" class="content_grid content_editor">
  <?php the_content(); // Dynamic Content ?>
</article>
<!-- end WP block editor content -->

<!-- start 3 ARTICLE ICON/class cards -->
<?php get_template_part('partials/article_icon'); ?>
<!-- end 3 ARTICLE ICON/class cards -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
