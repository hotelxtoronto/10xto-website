<?php
/**
 * Template Name: Families Page
 */
get_header(); ?>

    <!-- Hero Section -->
    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/families/Family%20yoga%20at%2010XTO.jpg') center/cover;">
        <div class="container">
            <div class="section-badge" style="background: var(--yellow); color: var(--black); margin-bottom: 1rem; display: inline-block;">Family Add-On</div>
            <h1>Families at 10XTO</h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">A premium athletic and social experience designed to engage the entire family.</p>
        </div>
    </header>

    <!-- Back Navigation Pill -->
    <div class="back-pill-container">
        <a href="<?php echo home_url('/the-club/'); ?>" class="back-pill">
            <i class="fas fa-chevron-left"></i> Back to The Club
        </a>
    </div>

    <section class="content-section">
        <div class="container">
            <div class="story-grid" style="align-items: center;">
                <div class="story-text">
                    <h2>The Kids Play Centre</h2>
                    <p>Understanding the demands on modern parents, 10XTO features a dedicated 3,000 sq. ft. Kids Play Centre. This supervised environment allows parents to focus entirely on their workout or match, knowing their children are engaged in a safe, active, and fun setting.</p>
                    <p>Designed for children ages 6 weeks to 11 years old, the Play Centre operates on a reservation basis to ensure an optimal staff-to-child ratio and a premium experience.</p>

                    <div class="feature-highlights" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem;">
                        <div class="highlight-item" style="background: var(--gray-light); padding: 2rem; border-left: 4px solid var(--black);">
                            <h4 style="margin-bottom: 0.5rem; color: var(--black);">Active Play Areas</h4>
                            <p>Featuring an indoor sports court, climbing structures, and dedicated age-appropriate activity zones.</p>
                        </div>
                        <div class="highlight-item" style="background: var(--gray-light); padding: 2rem; border-left: 4px solid var(--black);">
                            <h4 style="margin-bottom: 0.5rem; color: var(--black);">Professional Staff</h4>
                            <p>Supervised by vetted, experienced childcare professionals focused on interactive and developmental play.</p>
                        </div>
                    </div>
                </div>
                <div class="story-image">
                    <div class="mini-carousel">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/families/Kids%20Play%20Centre.jpg" alt="Kids Play Centre" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/families/Children's%20Play%20Centre.jpg" alt="Active Children's Play Centre" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/families/HXT_Family_Amenities-1.jpg" alt="Family Amenities at 10XTO" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/families/HXT_Family_Pool-11.jpg" alt="Family Pool Day" class="lightbox-trigger">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section" style="background: var(--black); color: var(--white);">
        <div class="container" style="padding-top: var(--spacing-section); padding-bottom: var(--spacing-section);">
            <div class="section-header">
                <h2>Youth Programs & Guidelines</h2>
                <p style="color: rgba(255,255,255,0.8);">Fostering a lifelong love of sport and movement for the next generation.</p>
            </div>
            <div class="feature-highlights" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-left: 4px solid var(--yellow); padding: 2rem;">
                    <h4 style="color: var(--white); margin-bottom: 0.5rem;">Youth Racquet Clinics</h4>
                    <p style="color: var(--gray-light);">Age-appropriate progressive tennis and squash clinics designed to teach fundamentals, sportsmanship, and court etiquette.</p>
                </div>
                <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-left: 4px solid var(--yellow); padding: 2rem;">
                    <h4 style="color: var(--white); margin-bottom: 0.5rem;">Family Hours</h4>
                    <p style="color: var(--gray-light);">Designated weekend times where families can enjoy open unstructured play in the squash courts or fitness studios.</p>
                </div>
                <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-left: 4px solid var(--yellow); padding: 2rem;">
                    <h4 style="color: var(--white); margin-bottom: 0.5rem;">Club Guidelines</h4>
                    <p style="color: var(--gray-light);">To maintain our premium adult-focused atmosphere, youth access to the primary fitness floor and locker rooms is restricted. Please refer to our complete family policy handbook.</p>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
