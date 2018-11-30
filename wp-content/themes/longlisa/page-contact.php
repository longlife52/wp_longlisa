<?php
/*
Template Name: Contact
*/
get_header(); ?>

<!-- start contact form section -->
        <section class="contact_lisa">
            <h1>Contact Lisa</h1>
            <p>Thank you for reaching out. Please fill out the form below. I look forward to hearing from you! I'll do my best to respond to you as soon as possible.</p>

            <div class="lisa_contact_form">
            <?php echo do_shortcode("[ninja_form id=1]"); ?>
            </div>

        </section>
        <!-- end contact form section -->

        <!-- start large quote -->
        <h3 class="large_quote">Your potential is unlimited. Begin exploring, now. </h3>
        <!--end large quote -->

        <div class="dots_hug_up">
          <?php get_template_part('partials/dots'); ?>
        </div>

<?php get_template_part('partials/flip_card'); ?>

<div class="dots_hug_up dots_space_bottom">
  <?php get_template_part('partials/dots'); ?>
</div>

<!-- start 3 ARTICLE ICON/class cards -->
<div class="contact_reduce_space">
<?php get_template_part('partials/article_icon'); ?>
<!-- end 3 ARTICLE ICON/class cards -->
</div>

<?php get_footer(); ?>
