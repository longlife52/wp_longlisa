<!-- pix header - partial - used on classes and othering offerings pages -->

<section class="home_page_header">
    <!-- picture bar -->
    <div class="picture_bar">
      <?php

      $image = get_field('pix_header_image');

      if ( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?> " alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"/>

      <?php endif; ?>

    </div>
    <!--close picture bar -->
    <div class="home_title">
        <h1><?php the_field('pix_header_title'); ?></h1>
    </div>
</section>
