<?php
/*
Template Name: About
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--start about Lisa -->
  <section class="about_lisa bottom_edge_shadow">
      <div class="about_wrapper about_background">
          <div class="about_img_wrapper lisa_img_wrapper">
              <img class="about_page_img" src="<?php bloginfo('template_url'); ?>/assets/dist/img/lisa_assist.png">
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

<div id="lisa_story">
<!-- put the flexible content in here so button at the top of this page works -->

</div>

        <!-- start Lisa's story -->
        <section class="lisa_story">
            <div class="lisa_story_title">
                <h3>We all have a story.</h3>
                <h3 class="title_justify_right">Here's mine.</h3>
            </div>

            <div class="lisa_story_width lisa_story_para blog_post_content">
                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <aside>
                    <h6>Let's see what this aside call out does, too, <a href="index.html" >with a hyperlink.</a> </h6>
                </aside>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <h2>Sub Headers Break Things Up</h2>
                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <figure>
                    <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/reverse_table.png" />

                    <figcaption>Let's see how this caption works for an image. Testing a really long caption, too. Let's see how it handles a second line. </figcaption>

                </figure>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>

                <ul class="lisa_story_ul">
                    <li>Great thing one.
                    </li>
                    <li>Great thing two.
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
                    <li>Travel is fun.
                    </li>
                    <li>Relax and feel joy.
                    </li>
                </ol>

                <p>lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating. lorem ipsum tell me a story about my life.  it's been a great life.  it has been challenging. it has been invigorating.
                </p>
            </div> <!-- end lisa story content -->

            <!-- start CTA button -->
            <div class="center-text button-box center_text">
                <a href="offerings.html"><p class="ghost_button ghost_btn_blue">check out my offerings</p></a>
            </div>
            <!-- end CTA button -->
        </section>
        <!-- end Lisa's story -->

<!-- start 3 ARTICLE ICON/class cards -->
<?php get_template_part('partials/article_icon'); ?>
<!-- end 3 ARTICLE ICON/class cards -->

<!-- start large quote -->
<h3 class="large_quote"><?php the_field('cursive_quote'); ?></h3>

<!--end large quote -->

<!-- start four square grid layout -->
<div class="four_square_wrapper two_square_wrapper">
    <!-- open square two -->
    <div class="grid_square_one square_two fill">
        <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/lisa_teach_four.jpg">
    </div> <!-- close square two -->

    <!-- open square three -->
    <div class="grid_square_two square_three testimonial_link">
        <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote.svg">
        <a href="<?php the_field('testimonial_link'); ?>">
            <div class="square_testimonial_wrapper">
                <p class="square_testimonial"><?php the_field('testimonial_para'); ?></p>
                <p class="square_testimonial_name"><?php the_field('testimonial_name'); ?></p>

                <div class="btn_round hvr-wobble-to-top-right square_testimonial_button_align">
                <a href="<?php the_field('testimonial_link'); ?>"><p >read</p><p>more</p></a>
            </div>

        </div> <!-- close .square_testimonial-->
        </a>
    </div> <!-- close square three -->

</div> <!-- close .foursquarewrapper -->
<!--end four square grid layout -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>
