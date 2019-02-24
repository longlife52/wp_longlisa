<div class="blog_card bottom_edge_shadow">
    <a href="<?php the_permalink(); ?>">

<img src="<?php the_post_thumbnail(); ?>">

        <h5><?php the_category(); ?></h5>
        <h4><?php the_title(); ?></h4>

        <div class="readtime">
            <p><?php echo do_shortcode('[rt_reading_time label="" postfix="min"]'); ?> read</p>
        </div>

        <div class="btn_round hvr-wobble-to-top-right">
            <a href="<?php the_permalink(); ?>"><p >read</p></a>
        </div>
    </a>
</div> <!-- close blog card -->
