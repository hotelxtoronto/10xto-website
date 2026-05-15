<?php
/**
 * The template for displaying 404 pages (not found)
 */
get_header(); ?>

    <!-- Page Hero -->
    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_indoor_tennis_court_at_sunrise.jpg') center/cover; height: 40vh; min-height: 350px;">
        <div class="container" style="text-align: center;">
            <div class="section-badge bg-yellow text-black" style="margin: 0 auto 1rem auto; display: inline-block;">Error 404</div>
            <h1>Page Not Found</h1>
            <p>The page you are looking for doesn't exist or has been moved.</p>
        </div>
    </header>

    <section class="content-section container" style="text-align: center; padding: 6rem 20px;">
        <h2>Let's get you back on track</h2>
        <p style="max-width: 600px; margin: 1rem auto 3rem auto; color: var(--gray-dark);">
            We recently updated our website to serve you better. The link you followed may be outdated. 
            Here are a few helpful links to help you find what you're looking for:
        </p>
        
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="cta-primary">Return Home</a>
            <a href="<?php echo esc_url(site_url('/membership')); ?>" class="cta-secondary" style="background: transparent; color: var(--black); border: 1px solid var(--black); padding: 1rem 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">View Membership</a>
            <a href="<?php echo esc_url(site_url('/contact')); ?>" class="cta-secondary" style="background: transparent; color: var(--black); border: 1px solid var(--black); padding: 1rem 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Contact Us</a>
        </div>
    </section>

<?php get_footer(); ?>
