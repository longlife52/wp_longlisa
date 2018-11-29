<!-- start 3 ARTICLE ICON/class cards -->
<section class="class_preview_wrapper icon_card_wrapper">
    <h3 class="icon_text_color"><?php the_field('title'); ?></h3>
    <div class="sub_title_para">
        <p class="icon_text_color"><?php the_field('para'); ?></p>
    </div>
        <!-- start ICON/class card wrapper -->
        <?php if(have_rows('article_card')): ?>

        <div class="class-card-wrapper">
          <?php while(have_rows('article_card')): the_row();
            //Vars
            $image = get_sub_field('image');
            $tagline = get_sub_field('tagline');
            $link = get_sub_field('link');
            ?>
            <!-- start card one -->
            <a href="<?php echo $link; ?>">
                <div class="icon_individual_card grow">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <p class="icon_text_color"><?php echo $tagline; ?></p>
                </div>
            </a>
            <!-- end card one -->
          <?php endwhile; ?>
    </div>
    <!-- end ICON/class card wrapper -->
  <?php endif; ?>
</section>

<!-- end 3 ICON/class cards -->
