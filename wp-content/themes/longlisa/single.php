<?php get_header(); ?>

    <!-- start blog post content based on framework of lisa's story from about page -->
    <section class="lisa_story">

	  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
      <div class="blog_header_img">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail(); //fullsize image for single post  ?>
        </a>
      </div>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <!-- post category + title -->
      <div class="blog_post_header">
          <p><?php _e( '', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
          <h1><?php the_title(); ?></h1>
      </div>
      <!-- /post category + title -->

<!-- BREADCRUMBS -->
      <div class="breadcrumb">
              <?php
              if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
              }
              ?>
      </div>
<!-- CLOSE BREADCRUMBS -->

<!-- OPEN SIDE BAR SEACRCH -->
  <?php get_sidebar(); ?>
<!-- CLOSE SIDE BAR SEARCH -->

<p class="blog_post_meta"><?php echo do_shortcode('[rt_reading_time label="" postfix="min"]'); ?> read | <?php the_date(); ?></p>

<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
<!-- start the actual blog post -->
        <article class="content_grid content_editor">
              	<?php the_content(); // Dynamic Content ?>
<!-- end blog_post_content -->

        </article>

<section class="tags_section">
    <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

    <!-- open search form -->
    <div class="bottom_search">
    <?php get_template_part('partials/searchform'); ?>
    </div>
    <!-- close search form -->
</section>



<!-- start blog author area -->
<!-- this code from https://napitwptech.com/introduction/wordpress/display-author-bio-without-plugin/ -->
<?php if (get_the_author_meta('description')) : // Checking if the user has added any author descript or not. If it is added only, then lets move ahead ?>
<div class="author_wrapper">
    <div class="blog_author_area">

        <div class="blog_author_img">
            <?php echo get_avatar(get_the_author_meta('user_email'), '100'); // Display the author gravatar image with the size of 100 ?>
        </div>

        <div class="blog_author_details">
            <p class="blog_author_about">about the author</p>
            <p class="blog_author_name"><?php the_author(); ?> </p>
            <p class="blog_author_bio"><?php esc_textarea(the_author_meta('description')); // Displays the author description added in Biographical Info ?></a></p>
            <!-- open cta button -->
            <div class="center-text button-box center_text">
                <a href="offerings.html"><p class="ghost_button ghost_btn_blue">check out Lisa's offerings</p></a>
            </div>
            <!-- close cta button -->
        </div> <!-- close blog_author_details -->
    </div> <!-- close blog_author_area -->
</div> <!-- close author_wrapper -->
<?php endif; ?>
<!-- end blog author area -->

<!-- post details -->
<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
<!-- /post details -->



  <!-- related blog posts links TO OTHER BLOG ARTICLES by category -->
<section class="blog_preview blog_preview_space"> <!-- open related blog posts -->
    <h3>Check These Out</h3>
      <p>Based on your interest, we curated these articles just for you.</p>

      <div class="blog-index-wrapper">

        <!-- code from https://wordpress.stackexchange.com/questions/41272/how-to-show-related-posts-by-category -->
        <?php

        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $post ) {
        setup_postdata($post); ?>

      <!-- start card one -->
          <div class="blog_card bottom_edge_shadow">
              <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>">
                <div class="blog_card_details">
                  <img src="<?php bloginfo('template_url'); ?>/assets/dist/img/sidebend.jpg">
                  <h5><?php the_category(); ?></h5>
                  <h4><?php the_title(); ?></h4>
                  <p><?php  the_excerpt(); ?></p>
                </div> <!-- close blog card details -->
                  <div class="readtime">
                      <p><?php echo do_shortcode('[rt_reading_time label="" postfix="min"]'); ?>  read</p>
                  </div>

                  <div class="btn_round hvr-wobble-to-top-right">
                      <a href="<?php the_permalink(); ?>"><p >read</p></a>
                  </div>
              </a>
          </div> <!-- close blog card -->
          <!-- end card one -->
        <?php }
        wp_reset_postdata(); ?>


      </div> <!-- end blog index wrapper -->
</section> <!-- end related blog posts -->

<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

<?php comments_template(); ?>

</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

<!-- article -->
<article>

	<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

</article>
<!-- /article -->

<?php endif; ?>

</section>     <!-- end end blog_post_content section -->

  <div class="">
  <?php get_template_part('partials/searchform'); ?>
  </div>



<?php get_footer(); ?>
