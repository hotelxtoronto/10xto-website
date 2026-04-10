<?php
/**
 * Template Name: Tennis Facilities Page
 */
get_header(); ?>

    <!-- Hero Section -->
    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_locker_room_shower_facilities.jpg') center/cover;">
        <div class="container">
            <div class="section-badge" style="background: var(--yellow); color: var(--black); margin-bottom: 1rem; display: inline-block;">All Tiers</div>
            <h1>Wellness & Recovery</h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">Optimize your performance and accelerate recovery in our dedicated wellness spaces.</p>
        </div>
    </header>

    <!-- Back Navigation Pill -->
    <div class="back-pill-container">
        <a href="<?php echo home_url('/the-club'); ?>" class="back-pill">
            <i class="fas fa-chevron-left"></i> Back to The Club
        </a>
    </div>

    <section class="content-section">
        <div class="container">
            <div class="story-grid" style="align-items: center;">
                <div class="story-text">
                    <h2>The Contrast Zone</h2>
                    <p>Experience the ultimate in athletic recovery. Our specialized Contrast Zone is engineered to reduce inflammation, improve circulation, and accelerate muscle repair through the physiological benefits of heat and cold therapy.</p>
                    <p>Whether you're recovering from a grueling squash match or a heavy lifting session, structured contrast therapy is essential for maintaining peak performance and reducing the risk of injury.</p>

                    <div class="feature-highlights" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem;">
                        <div class="highlight-item" style="background: var(--gray-light); padding: 2rem; border-left: 4px solid var(--black);">
                            <h4 style="margin-bottom: 0.5rem; color: var(--black);">Cold Plunge</h4>
                            <p>Therapeutic cold water immersion maintained at precise temperatures to flush lactic acid and reduce tissue swelling.</p>
                        </div>
                        <div class="highlight-item" style="background: var(--gray-light); padding: 2rem; border-left: 4px solid var(--black);">
                            <h4 style="margin-bottom: 0.5rem; color: var(--black);">Far-Infrared Sauna</h4>
                            <p>Deep-penetrating heat therapy designed to increase cardiovascular output, induce sweating, and relax muscle tension.</p>
                        </div>
                    </div>
                </div>
                <div class="story-image">
                    <div class="mini-carousel">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast%20Zone/Architectural/Contrast%20Zone-14.jpg" alt="Contrast Zone Hot Therapy" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast%20Zone/Architectural/Contrast%20Zone-10.jpg" alt="Contrast Zone" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast%20Zone/Architectural/Contrast%20Zone-11.jpg" alt="Cold Plunge" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast%20Zone/Architectural/Contrast%20Zone-12.jpg" alt="Sauna" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/10XTO-Locker%20Room.jpg" alt="Locker Room" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_locker_room_vanity_sinks.jpg" alt="Locker Room Vanity" class="lightbox-trigger">
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
                <h2>Locker Rooms & Amenities</h2>
                <p style="color: rgba(255,255,255,0.8);">Refined spaces to transition from workout to workday.</p>
            </div>
            <div class="feature-highlights" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-left: 4px solid var(--yellow); padding: 2rem;">
                    <h4 style="color: var(--white); margin-bottom: 0.5rem;">Eucalyptus Steam Rooms</h4>
                    <p style="color: var(--gray-light);">Located directly within the men’s and women’s locker rooms, our aromatic steam rooms offer respiratory relief and deep muscle relaxation.</p>
                </div>
                <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-left: 4px solid var(--yellow); padding: 2rem;">
                    <h4 style="color: var(--white); margin-bottom: 0.5rem;">Premium Locker Facilities</h4>
                    <p style="color: var(--gray-light);">Spacious, secure digital lockers equipped with USB charging ports. Complimentary luxury towel service is provided for all members.</p>
                </div>
                <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-left: 4px solid var(--yellow); padding: 2rem;">
                    <h4 style="color: var(--white); margin-bottom: 0.5rem;">Luxury Showers</h4>
                    <p style="color: var(--gray-light);">Equipped with high-pressure rainfall showerheads and stocked with premium Malin+Goetz apothecary products for the ultimate post-workout refresh.</p>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
