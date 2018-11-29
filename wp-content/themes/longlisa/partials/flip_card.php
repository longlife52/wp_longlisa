<!-- this shows up on the About page -->

<!-- start FLIP CARDS -->
        <section class="flex_flip_container">
          <!-- open flex_item ONE -->
            <div class="flex_item flip_one">
              <div class="flex_item_inner">
                  <!-- card -->
                  <?php
                  //Vars
                  $flipone = get_field('flip_box_one');
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
                  $flipone = get_field('flip_two');
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
                    $flipone = get_field('flip_three');
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
                      $flipone = get_field('flip_four');
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
