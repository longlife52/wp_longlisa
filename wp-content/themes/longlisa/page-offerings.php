<?php
/*
Template Name: Offerings
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- BILL BOARD -->
    <section class="billboard_blue_wrapper offering_wrapper">
        <div class="billboard center_text offering_billboard">
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
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png">
        </div>
        <!--close picture bar -->
        <div class="home_title">
            <h1><?php the_field('billboard_offering_h_one'); ?></h1>
        </div>
    </section> <!-- close h1 area -->

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

            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/garandasanaweb.png">
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

    <!-- start four square grid layout -->
    <div class="four_square_wrapper two_square_wrapper">
        <!--start square two -->
        <div class="grid_square_one square_two fill">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/lisa_teach_four.jpg">
        </div> <!-- close square two -->

        <!--start square three -->
        <div class="grid_square_two square_three testimonial_link">
            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote.svg">
            <a href="<?php the_field('testimonial_link_offering'); ?>">
                <div class="square_testimonial_wrapper">
                    <p class="square_testimonial"><?php the_field('testimonial_para_offering'); ?> </p>
                    <p class="square_testimonial_name"><?php the_field('testimonial_name_offering'); ?></p>

                    <div class="btn_round hvr-wobble-to-top-right square_testimonial_button_align">
                        <a href="<?php the_field('testimonial_link_offering'); ?>"><p >read</p><p>more</p></a>
                    </div>
                </div> <!-- close .square_testimonial-->
            </a>
        </div> <!-- close square three -->
    </div> <!-- close .foursquarewrapper -->
    <!--end four square grid layout -->

    <!-- start - BLOG CATEGORIES 3 ICON/class cards -->
    <section class="class_preview_wrapper icon_card_wrapper offering_category_wrapper">
        <h3 class="icon_text_color"><?php the_field('category_block_title'); ?></h3>
        <div class="sub_title_para">
            <p class="icon_text_color"><?php the_field('category_block_para'); ?></p>
        </div>

    <!-- start REPEATING THIS CONTENT - ICON/class card wrapper -->
    <?php if(have_rows('category_preview_offering')): ?>

    <div class="class-card-wrapper">

      <?php while(have_rows('category_preview_offering')): the_row();
        //Vars
        $image = get_sub_field('image');
        $term = get_sub_field('category_name');
        $taxonomy = 'category_name';
        $term_link = get_term_link($term, $taxonomy);

        if($term): ?>

        <!-- I think I need a foreach call here.  I just don't know enough php to ouput it -->

        <div>
        <!-- start card one -->
        <!--  <a href="/index.php?cat=4"> -->
        <a href="">
            <div class="icon_individual_card grow">

                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">

                <p class="icon_text_color blog_category_title"><?php echo $term->slug; ?></p>
            </div>
        </a>
      <?php endif; ?>
      </div>
        <!-- end card one -->
      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
</div>
<?php endif; ?>
<!-- end ICON/class card wrapper -->
</section>

<!-- end BLOG CATEGORIES 3 ICON/class cards -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
