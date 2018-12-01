<!-- this code drives the testimonial REPEATER at the BOTTOM of the testimonial page -->

<?php if(have_rows('testimonial_five_block_bottom')): ?>
<div>
<?php while(have_rows('testimonial_five_block_bottom')): the_row();
    //Vars
    $one_para = get_sub_field('testimonial_para_one');
    $one_name = get_sub_field('testimonial_name_one');
    $two_para = get_sub_field('testimonial_para_two');
    $two_name = get_sub_field('testimonial_name_two');
    $three_para = get_sub_field('testimonial_para_three');
    $three_name = get_sub_field('testimonial_name_three');
    $four_para = get_sub_field('testimonial_para_four');
    $four_name = get_sub_field('testimonial_name_four');
    $five_para = get_sub_field('testimonial_para_five');
    $five_name = get_sub_field('testimonial_name_five');

    ?>

<section class="staggered_center">
<!-- open staggered container -->
<div class="staggered staggered_max_width">

    <!-- start staggered one -->
    <div class="staggered_one staggered_all staggered_flex staggered_quote_pad">

        <div class="staggered_content_box">
            <div class="staggered_saying_quote">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote_circle.png">
            </div>
            <p class="staggered_quote_content"><?php echo $one_para; ?></p>

            <p class="staggered_testimonial_name"><?php echo $one_name; ?></p>
        </div>
    </div>
<!-- end staggered one -->

<!-- start staggered two -->
    <div class="staggered_two staggered_all staggered_flex staggered_quote_pad">

        <div class="staggered_content_box">
            <div class="staggered_saying_quote">
                <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote_circle.png">
            </div>

            <p class="staggered_quote_content"><?php echo $two_para; ?></p>

            <p class="staggered_testimonial_name"><?php echo $two_name; ?></p>
        </div>
    </div>
    <!-- end staggered two -->

    <!-- start staggered three -->
        <div class="staggered_three staggered_all staggered_flex staggered_quote_pad">

            <div class="staggered_content_box">
                <div class="staggered_saying_quote">
                    <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote_circle.png">
                </div>

                <p class="staggered_quote_content"><?php echo $three_para; ?></p>

                <p class="staggered_testimonial_name"><?php echo $three_name; ?></p>
            </div>
        </div>
        <!-- end staggered three -->

        <!-- start staggered four -->
            <div class="staggered_four staggered_all staggered_flex staggered_quote_pad">

                <div class="staggered_content_box">
                    <div class="staggered_saying_quote">
                        <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote_circle.png">
                    </div>

                    <p class="staggered_quote_content"><?php echo $four_para; ?></p>

                    <p class="staggered_testimonial_name"><?php echo $four_name; ?></p>
                </div>
            </div>
            <!-- end staggered four -->

            <!-- start staggered five -->
                <div class="staggered_five staggered_all staggered_flex staggered_quote_pad">


                    <div class="staggered_content_box">
                        <div class="staggered_saying_quote">
                            <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/quote_circle.png">
                        </div>

                        <p class="staggered_quote_content"><?php echo $five_para; ?></p>

                        <p class="staggered_testimonial_name"><?php echo $five_name; ?></p>
                    </div>
                </div>
                <!-- end staggered five -->

    </div> <!-- close staggered containter -->

</section>
  <?php endwhile; ?>
</div>

<?php endif; ?>

<!-- end staggered 5 square of testimonial quotes -->
