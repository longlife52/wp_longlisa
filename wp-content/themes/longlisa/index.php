<?php get_header(); ?>


<!-- BILL BOARD -->
    <section class="billboard_blue_wrapper offering_wrapper">
        <div class="billboard center_text offering_billboard title_space title_nospace">
            <div class="title_line">
                <h2 class="offering_title_small">get</h2>
            </div>
            <h2 class="offering_title_big title_uppercase title_size_increase">ideas</h2>
            <div class="billboard_para">
                <p>Learn more and become wiser. Move with greater ease and freedom as you create efficiency.</p>
            </div>
        </div>
    </section> <!-- closes .billboard_blue_wrapper -->

    <!-- start blog preview -->
    <section class="blog_preview">
            <!-- start blog card wrapper -->
            <div class="blog-index-wrapper">

    <?php if (have_posts()) :
        while (have_posts()) :
            the_post(); ?>

                <!-- start individual blog preview card -->
                    <div class="blog_card bottom_edge_shadow">
                        <a href="<?php the_permalink() ?>">
                        <div class="blog_card_details">
                            <img src="<?php the_post_thumbnail();?>">
                            <h5><?php
                                  // GET THE CATEGORY CONTENT
                                  $categories = get_the_category ();

                                  // IF THERE'S A CATEGORY
                                  if ($categories) {
                                  //LOOP THROUGH THE CATEGORIES AND DISPLAY THEM
                                  $i = 1;
                                  foreach ($categories as $one) {
                                    echo $one->name;
                                      // IF THERE ARE MORE THAN ONE CATEGORY
                                      if (count($categories) > 0 && count($categories) > $i) {
                                          echo ', ';
                                      }
                                      $i++;
                                  }
                                }
                                ?>
                            </h5>
                            <h4><?php the_title() ?></h4>
                            <p><?php the_excerpt() ?></p>
                        </div>
                        <div class="readtime">
                            <p>3 min read</p>
                        </div>

                        <div class="btn_round hvr-wobble-to-top-right">
                            <a href="singlepost.html"><p >read</p></a>
                        </div>
                        </a>
                    </div> <!-- end individual blog preview card -->

        <?php endwhile; ?>
        </div>  <!-- end blog card wrapper -->
    </section>

      <?php else: ?>
        <em>No Posts Found</em>
    <?php endif; ?>
    <!--end blog preview -->

    <!-- start BLOG CATEGORIES 3 ICON/class cards -->
    <section class="class_preview_wrapper icon_card_wrapper offering_category_wrapper">
        <h3 class="icon_text_color">Inspiration</h3>
        <div class="sub_title_para">
            <p class="icon_text_color">Check out these categories and learn more ways to feel better!</p>
        </div>

    <!-- start ICON/class card wrapper -->
    <div class="class-card-wrapper">
        <!-- start card one -->
        <a href="https://youtu.be/zSt7k_q_qRU" target="blank">
            <div class="icon_individual_card grow">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/brain.png">
                <p class="icon_text_color blog_category_title">mind</p>
            </div>
        </a>
        <!-- end card one -->

        <!-- start card two -->
        <a href="https://youtu.be/zSt7k_q_qRU" target="blank">
            <div class="icon_individual_card grow">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/knee.png">
                <p class="icon_text_color blog_category_title">Body</p>
            </div>
        </a>
        <!-- end card two -->

        <!-- start card three -->
        <a href="https://youtu.be/zSt7k_q_qRU" target="blank">
            <div class="icon_individual_card grow">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/power.png">
                <p class="icon_text_color blog_category_title">spiRit</p>
            </div>
        </a>
        <!-- end card three -->
</div>
<!-- end ICON/class card wrapper -->
</section>

<!-- end BLOG CATEGORIES 3 ICON/class cards -->

<?php get_footer(); ?>
