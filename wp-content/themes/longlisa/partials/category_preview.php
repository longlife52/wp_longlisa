<!-- Category_Preview  Partial -->

<!-- start - BLOG CATEGORIES 3 ICON/class cards -->
<section class="class_preview_wrapper icon_card_wrapper offering_category_wrapper">
    <h3 class="icon_text_color"><?php the_field('category_block_title'); ?></h3>
    <div class="sub_title_para">
        <p class="icon_text_color"><?php the_field('category_block_para'); ?></p>
    </div>

<!-- start REPEATING THIS CONTENT -  category preview offering - ICON/class card wrapper -->
<?php if(have_rows('category_preview_offering')): ?>

<div class="class-card-wrapper">

  <?php while(have_rows('category_preview_offering')): the_row();
    //Vars
    $image = get_sub_field('image');
    $term = get_sub_field('category_name');
    $taxonomy = 'category';
    $term_link = get_category_link($term[0]->term_id);

    if($term): ?>

    <div>
    <!-- start card one -->
    <!--  <a href="/index.php?cat=4"> -->
    <a href="<?php echo $term_link; ?>">
        <div class="icon_individual_card grow">

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">

            <p class="icon_text_color blog_category_title"><?php echo $term[0]->name; ?></p>
        </div>
    </a>
  <?php endif; ?>
  </div>
    <!-- end card one -->
  <?php endwhile; ?>
</div>
<?php endif; ?>
<!-- end ICON/class card wrapper -->
</section>

<!-- end BLOG CATEGORIES 3 ICON/class cards -->
