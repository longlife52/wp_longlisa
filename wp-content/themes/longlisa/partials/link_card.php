<!-- Link Card - Partial - appears on classes page yet can be used elsehwere.  may need to figure out the internal links better if used elsewhere -->

<!-- start REPEATER 3 class cards -->
<section class="class_preview_wrapper">
<!-- start class card wrapper -->
  <?php if(have_rows('link_card')): ?>

  <div class="class-card-wrapper">
  <?php while(have_rows('link_card')): the_row();
    //Vars
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $cta = get_sub_field('button_label');
    $link = get_sub_field('button_link');
    ?>

    <!-- start card one -->

    <div class="class_type_wrapper align_bottom bottom_edge_shadow responsive_image">
        <a href="<?php echo $link; ?>">
          <h4><?php echo $title; ?></h4>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="bottom_edge_shadow">

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
