<?php
/**
 * Template Name: Accessibility
 */
get_header(); ?>

    <section class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.6) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_tennis_player_serving_action_shot.jpg'); background-size: cover; background-position: center; height: 30vh; min-height: 250px;">
        <div class="container">
            <h1>Accessibility</h1>
        </div>
    </section>

    <section class="legal-content" style="padding: 4rem 0; background-color: #fff;">
        <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>

<?php get_footer(); ?>
