<!-- event section - PARTIAL - appears on offering pages -->

<?php if(have_rows('event_section')): ?>
<section> <!-- REPEATER EVENT SECTION -->
  <?php while(have_rows('event_section')): the_row();
    //Vars
    $title = get_sub_field('general_title');
    $para = get_sub_field('general_para');
    ?>

  <section class="class_preview_wrapper title_nospace title_line adjust_yellow_line" id="yoga_classes">
      <h3><?php echo $title; ?></h3>
      <div class="sub_title_para">
          <p class="class_card_text_align"><?php echo $para; ?></p>
      </div>

  <!-- start REPEATER class one -->
  <?php if(have_rows('event_details')): ?>

      <div class="schedule_class_wrapper">

        <?php while(have_rows('event_details')): the_row();
          //Vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $date = get_sub_field('day_date');
          $time = get_sub_field('time');
          $location = get_sub_field('location');
          $cost = get_sub_field('cost');
          $label = get_sub_field('button_label');
          $link = get_sub_field('button_link');
          $para = get_sub_field('para');
          ?>

          <div class="schedule_img">
              <img class="img_circle" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
          </div>
          <div class="schedule_details">
              <h4><?php echo $title; ?></h4>
              <p><?php echo $date; ?></p>
              <p><?php echo $time; ?></p>
              <p><?php echo $location; ?></p>
              <p><?php echo $cost; ?></p>
              <div class="center-text button-box center_text no_pad">
                  <a href="<?php echo $link; ?>"><p class="ghost_button ghost_btn_blue"><?php echo $label; ?></p></a>
              </div>
          </div>
          <div class="schedule_description">
              <p><?php echo $para; ?></p>
          </div>
          <?php endwhile; ?>
      </div>
      <?php endif; ?>
  <!-- end REPEATER class one -->
  </section>
  <!-- end yoga classes -->

  <div class="dots dots_hug_up dots_space_bottom">
      <div class="circle">
      </div>
      <div class="circle">
      </div>
      <div class="circle">
      </div>
  </div>

<!-- START REPEATER grid 5 pix / quote block -->
  <?php if(have_rows('five_block')): ?>

  <section class="five">

    <?php while(have_rows('five_block')): the_row();
      //Vars
      $imgone = get_sub_field('image_one');
      $imgtwo = get_sub_field('image_two');
      $imgthree = get_sub_field('image_three');
      $textone = get_sub_field('text_one');
      $texttwo = get_sub_field('text_two');
      ?>

      <div class="five_item_one">
          <img src="<?php echo $imgone['url']; ?>" alt="<?php echo $imgone['alt']; ?>" title="<?php echo $imgone['title']; ?>">
      </div>

      <div class="five_item_two">
          <p><?php echo $textone; ?></p>
      </div>

      <div class="five_item_three">
          <img src="<?php echo $imgtwo['url']; ?>" alt="<?php echo $imgtwo['alt']; ?>" title="<?php echo $imgtwo['title']; ?>">
      </div>

      <div class="five_item_four">
          <p><?php echo $texttwo; ?></p>
      </div>

      <div class="five_item_five">
          <img src="<?php echo $imgthree['url']; ?>" alt="<?php echo $imgthree['alt']; ?>" title="<?php echo $imgthree['title']; ?>">
      </div>
      <?php endwhile; ?>
  </section>
  <?php endif; ?>
  <!-- END REPEATER grid 5 pix / quote block -->
<?php endwhile; ?>
</section> <!-- CLOSE REPEATER EVENT section -->
<?php endif; ?>
