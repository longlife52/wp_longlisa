<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BILL BOARD -->
    <section class="billboard_blue_wrapper ">
        <div class="billboard center_text">
            <h2 class="billboard_title_top"><?php the_field('billboard_top_title'); ?></h2>
            <h2 class="billboard_title_bottom"><?php the_field('billboard_bottom_title'); ?></h2>
            <div class="billboard_para">
                <p><?php the_field('billboard_copy'); ?></p>
            </div>
            <div class="center_text button-box">
                <a href="<?php the_field('billboard_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('billboard_button_label'); ?></p></a>
            </div>
            </div>
    </section> <!-- closes .billboard_blue_wrapper -->

    <section class="home_page_header">
        <!-- picture bar -->
        <div class="picture_bar">

          <?php

          $image = get_field('billboard_image');

          if ( !empty($image) ): ?>

            <img src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" />

          <?php endif; ?>

        </div>
        <!-- close picture bar -->

        <div class="home_title">
            <h1><?php the_field('billboard_h_one'); ?></h1>
        </div>
    </section>

    <!-- start blog preview -->
    <?php $query = new WP_Query( array (
    'posts_per_page' => '3',
      ));
        if ($query->have_posts()) : ?>

    <section class="blog_preview blog_preview_space">
            <h3><?php the_field('blog_preview_title'); ?></h3>
                <p><?php the_field('blog_preview_copy'); ?></p>

            <!-- start blog card wrapper -->
            <div class="blog-card-wrapper">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                <!-- start card one -->
                    <div class="blog_card bottom_edge_shadow">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/sidebend.jpg">
                            <h5><?php the_category(); ?></h5>
                            <h4><?php the_title(); ?></h4>

                            <div class="readtime">
                                <p><?php echo do_shortcode('[rt_reading_time label="" postfix="min"]'); ?> read</p>
                            </div>

                            <div class="btn_round hvr-wobble-to-top-right">
                                <a href="<?php the_permalink(); ?>"><p >read</p></a>
                            </div>
                        </a>
                    </div> <!-- close blog card -->
                      <?php endwhile; ?>
                      <!-- after running the blog preview loop - this next php call resets the main loop over the page -->
                      <?php wp_reset_postdata(); ?>
                <!-- end card one -->
                </div> <!-- end blog card wrapper -->
            </section> <!--end blog preview -->
                      <?php endif; ?>

    <!-- start featured event -->
     <section class="feature">
          <div class="feature_hero">
             <a href="<?php the_field('featured_event_button_link'); ?>">

               <?php
                 $image = get_field('featured_event_hero');
                 if ( !empty($image)): ?>

                   <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> class="feature_img bottom_edge_shadow"/>

               <?php endif; ?>
            </a>
        </div>
          <div class="cta cta1">
              <h4 class="feature_event_title"><?php the_field('featured_event_title'); ?></h4>
              <h5 class="featured_event_subtitle"><?php the_field('featured_event_sub_title'); ?></h5>
                  <p><?php the_field('featured_event_copy'); ?></p>
                  <p><?php the_field('featured_event_tag_line'); ?></p>
          </div>
          <div class="cta cta2">
              <p><?php the_field('featured_event_date'); ?></p>
              <p><?php the_field('featured_event_time'); ?></p>
              <p><?php the_field('featured_event_location'); ?></p>

              <div class="center-text button-box center_text">
                  <a href="<?php the_field('featured_event_button_link'); ?>" target="blank"><p class="ghost_button ghost_btn_blue"><?php the_field('featured_event_button_label'); ?></p></a>
              </div>
          </div>
      </section>
    <!-- end featured event -->

    <!--start about Lisa -->
    <section class="about bottom_edge_shadow">
        <div class="about_wrapper">
            <div class="about_img_wrapper">

              <?php
                $image = get_field('about_lisa_image');
                if( !empty($image)): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?> title="<?php echo $image['title']; ?> class="img_circle"/>

              <?php endif; ?>

            </div>
            <div class="about_content_wrapper">
            <div class="about_content bottom_edge_shadow">
                <h3><?php the_field('about_lisa_name'); ?></h3>
                <p><?php the_field('about_lisa_copy'); ?></p>

                <div class="button-box about_button_wrapper">
                    <div class="btn_blue">
                    <a href="<?php the_field('about_lisa_button_link'); ?>"><p><?php the_field('about_lisa_button_label'); ?></p></a>
                    </div>
                </div>
            </div>
        </div> <!--close .about_content_wrapper -->
        </div>
    </section>
    <!-- end about Lisa -->

    <!-- start 3 class cards -->

    <section class="class_preview_wrapper">
        <h3><?php the_field('class_preview_title'); ?></h3>
        <div class="sub_title_para">
            <p class="class_card_text_align"><?php the_field('class_preview_copy'); ?></p>
        </div>

            <!-- start REPEATER -class card wrapper -->
            <?php if(have_rows('class_card')): ?>

            <div class="class-card-wrapper">
              <?php while(have_rows('class_card')): the_row();
                //Vars
                $title = get_sub_field('class_card_title');
                $image = get_sub_field('class_card_image');
                $content = get_sub_field('class_card_copy');
                $cta = get_sub_field('class_card_button_label');
                $link = get_sub_field('class_card_button_link');
                ?>

                <!-- start card one -->
                    <div class="class_type_wrapper align_bottom bottom_edge_shadow responsive_image">
                        <a href="<?php echo $link; ?>">
                            <h4><?php echo $title; ?></h4>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"class="bottom_edge_shadow">
                            <p class="class_card_text_align"><?php echo $content; ?></p>

                            <div class="btn_yellow align_button_bottom">
                                <a href="<?php echo $link; ?>"><p><?php echo $cta; ?></p></a>
                            </div>
                        </a>
                    </div>
                <!-- end card one -->
              <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <!-- end class card wrapper -->
    </section>
    <!-- end 3 class cards -->

    <!-- start four square grid layout -->
    <div class="four_square_wrapper">
        <!--start square one -->
        <div class="square square_one grid_square_one">
            <div class="square_details">
                <div class="square_one_content">
                    <h6><?php the_field('offering_line_one'); ?></h6>
                    <h6><?php the_field('offering_line_two'); ?></h6>
                    <h6><?php the_field('offering_line_three'); ?></h6>
                    <h6><?php the_field('offering_line_four'); ?></h6>
                </div>

                <div class="center_text button-box">
                    <a href="<?php the_field('offering_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('offering_button_label'); ?></p></a>
                </div>
            </div> <!-- close .square_detials -->
        </div> <!-- close square one -->

        <!--start square two -->
        <div class="square_two grid_square_two fill">

          <?php
            $image = get_field('offering_image');
            if ( !empty($image)): ?>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>

          <?php endif; ?>

        </div> <!-- close square two -->

        <!--start square three -->
        <div class="square_three grid_square_three testimonial_link">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote.svg">
            <a href="<?php the_field('offering_testimonial_link'); ?>">
                <div class="square_testimonial_wrapper">
                    <p class="square_testimonial"><?php the_field('offering_testimonial_copy'); ?> </p>
                    <p class="square_testimonial_name"><?php the_field('offering_testimonial_name'); ?></p>

                    <div class="btn_round hvr-wobble-to-top-right square_testimonial_button_align">
                        <a href="<?php the_field('offering_testimonial_link'); ?>"><p >read</p><p>more</p></a>
                    </div>
                </div> <!-- close .square_testimonial-->
            </a>
        </div> <!-- close square three -->

        <!--start square four -->
        <div class="square square_four grid_square_four">
            <div class="square_details square_four_details">
                <h6><?php the_field('online_line_one'); ?></h6>
                <h6><?php the_field('online_line_two'); ?></h6>
                <h6><?php the_field('online_line_three'); ?></h6>

                <div class="center_text button-box">
                    <a href="<?php the_field('online_button_link'); ?>"><p class="ghost_button ghost_btn_white"><?php the_field('online_button_label'); ?></p></a>
                </div>
            </div> <!-- close .square_four_details -->
        </div> <!-- close square four -->

    </div> <!-- close .foursquarewrapper -->
    <!--end four square grid layout -->

    <!-- start large quote -->
    <h3 class="large_quote"><?php the_field('cursive_saying'); ?></h3>
    <!--end large quote -->

    <div class="dots dots_hug_up">
        <div class="circle">
        </div>
        <div class="circle">
        </div>
        <div class="circle">
        </div>
    </div>

    <!-- start FLIP CARDS -->
            <section class="flex_flip_container">
              <!-- open flex_item ONE -->
                <div class="flex_item flip_one">
                  <div class="flex_item_inner">
                      <!-- card -->
                      <?php
                      //Vars
                      $flipone = get_field('flip_box');
                      if ($flipone): ?>

                      <a href="<?php echo $flipone['flip_link']; ?>">
                            <div class="card-front bg-bright">
                              <div class="flip_img">

                                <img src="<?php echo $flipone['flip_image']['url']; ?>" class=""/>

                              </div>
                                <h4><?php echo $flipone['flip_title']; ?></h4>
                                <p class="detail"><?php echo $flipone['flip_sub_title']; ?></p>
                            </div>
                            <div class="card-back bg-bright">
                                <p class="title"><?php echo $flipone['flip_back_header']; ?></p>
                                <p class="desc"><?php echo $flipone['flip_back_content']; ?></p>
                                <p class="link">Details</p>
                            </div>
                        </a>

                      <?php endif; ?>
                        <!-- /card -->
                    </div> <!-- close flex_item_inner ONE -->
                </div> <!-- close flex_item ONE -->

                <!-- open flex_item TWO -->
                  <div class="flex_item flip_two">
                    <div class="flex_item_inner">
                      <!-- card -->
                      <?php
                      //Vars
                      $flipone = get_field('flip_box_two');
                      if ($flipone): ?>

                      <a href="<?php echo $flipone['flip_link_two']; ?>">
                            <div class="card-front bg-dark">
                              <div class="flip_img">

                                <img src="<?php echo $flipone['flip_image_two']['url']; ?>" class=""/>

                              </div>
                                <h4><?php echo $flipone['flip_title_two']; ?></h4>
                                <p class="detail"><?php echo $flipone['flip_sub_title_two']; ?></p>
                            </div>
                            <div class="card-back bg-bright">
                                <p class="title"><?php echo $flipone['flip_back_header_two']; ?></p>
                                <p class="desc"><?php echo $flipone['flip_back_content_two']; ?></p>
                                <p class="link">Details</p>
                            </div>
                        </a>

                      <?php endif; ?>
                        <!-- /card -->
                      </div> <!-- close flex_item_inner TWO -->
                  </div> <!-- close flex_item TWO -->

                  <!-- open flex_item THREE -->
                    <div class="flex_item flip_three">
                      <div class="flex_item_inner">

                        <!-- card -->
                        <?php
                        //Vars
                        $flipone = get_field('flip_box_three');
                        if ($flipone): ?>

                        <a href="<?php echo $flipone['flip_link_three']; ?>">
                              <div class="card-front bg-blue">
                                <div class="flip_img">

                                  <img src="<?php echo $flipone['flip_image_three']['url']; ?>" class=""/>

                                </div>
                                  <h4><?php echo $flipone['flip_title_three']; ?></h4>
                                  <p class="detail"><?php echo $flipone['flip_sub_title_three']; ?></p>
                              </div>
                              <div class="card-back bg-bright">
                                  <p class="title"><?php echo $flipone['flip_back_header_three']; ?></p>
                                  <p class="desc"><?php echo $flipone['flip_back_content_three']; ?></p>
                                  <p class="link">Details</p>
                              </div>
                          </a>

                        <?php endif; ?>
                          <!-- /card -->
                        </div> <!-- close flex_item_inner THREE -->
                    </div> <!-- close flex_item THREE -->

                    <!-- open flex_item FOUR -->
                      <div class="flex_item flip_four">
                        <div class="flex_item_inner">
                          <!-- card -->
                          <?php
                          //Vars
                          $flipone = get_field('flip_box_four');
                          if ($flipone): ?>

                          <a href="<?php echo $flipone['flip_link_four']; ?>">
                                <div class="card-front bg-bright">
                                  <div class="flip_img">

                                    <img src="<?php echo $flipone['flip_image_four']['url']; ?>" class=""/>

                                  </div>
                                    <h4><?php echo $flipone['flip_title_four']; ?></h4>
                                    <p class="detail"><?php echo $flipone['flip_sub_title_four']; ?></p>
                                </div>
                                <div class="card-back bg-bright">
                                    <p class="title"><?php echo $flipone['flip_back_header_four']; ?></p>
                                    <p class="desc"><?php echo $flipone['flip_back_content_four']; ?></p>
                                    <p class="link">Details</p>
                                </div>
                            </a>

                          <?php endif; ?>
                            <!-- /card -->
                          </div> <!-- close flex_item_inner FOUR -->
                      </div> <!-- close flex_item FOUR -->
            </section>
    <!-- end FLIP CARDS -->

    <div class="dots dots_hug_up dots_space_bottom">
        <div class="circle">
        </div>
        <div class="circle">
        </div>
        <div class="circle">
        </div>
    </div>



<?php endwhile; endif; ?>

<?php get_footer(); ?>
