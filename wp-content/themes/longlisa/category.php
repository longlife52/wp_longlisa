<?php get_header(); ?>

      <!-- BILL BOARD -->
          <section class="billboard_blue_wrapper offering_wrapper">
              <div class="billboard center_text offering_billboard title_space title_nospace">
                  <div class="title_line">
                      <h2 class="offering_title_small">learn more about</h2>
                  </div>
                  <h2 class="offering_title_big title_uppercase title_size_increase"><?php _e( '', 'html5blank' ); single_cat_title(); ?></h2>
                  <div class="billboard_para">
                      <p>Enjoy these articles about the <?php _e( '', 'html5blank' ); single_cat_title(); ?>. We curated them especially for you to help deepen your connection and broaden your understanding. </p>
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
                                  <?php the_post_thumbnail(); ?>
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
                                  <p><?php echo do_shortcode('[rt_reading_time label="" postfix="min"]'); ?> read</p>
                              </div>

                              <div class="btn_round hvr-wobble-to-top-right">
                                  <a href="<?php the_permalink() ?>"><p >read</p></a>
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

<?php get_footer(); ?>
