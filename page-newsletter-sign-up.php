<?php
/**
 * Template Name: Newsletter Sign Up Form
 */
get_header(); ?>

    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_indoor_tennis_court_at_sunrise.jpg') center/cover; height: 30vh; min-height: 250px;">
        <div class="container" style="text-align: center;">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>

    <section class="content-section container" style="padding: 4rem 20px;">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
    </section>

<?php get_footer(); ?>
