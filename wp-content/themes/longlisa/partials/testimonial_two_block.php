<!-- testimonial_two_block PARTIAL -->

<!-- start four square grid layout -->
<div class="four_square_wrapper two_square_wrapper">
    <!--start square two -->
    <div class="grid_square_one square_two fill">
      <?php

      $image = get_field('testimonial_image_offering');

      if ( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?> " alt="?php echo $image['alt']; ?>" />

      <?php endif; ?>
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
