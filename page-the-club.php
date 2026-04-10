<?php
/**
 * Template Name: Facilities Page
 */
get_header(); ?>

    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/Tennis Courts 2024-3.jpg') center/cover;">
        <div class="container">
            <h1>Facilities</h1>
            <p style="font-size: 1.2rem;">Space. Light. Performance.</p>
        </div>
    </header>

    <!-- Brought in from original single page format -->
    <section class="facilities" id="facilities">
        <div class="container">
            <div class="section-intro" style="text-align: center; max-width: 800px; margin: 0 auto 3.5rem;">
                <h2 style="margin-bottom: 1rem;">Welcome to Your Club</h2>
                <p style="font-size: 1.1rem; line-height: 1.6;">
                    10XTO is an unparalleled athletic and wellness destination located at Hotel X Toronto. We provide an elite environment spanning specialized racquet sports, cutting-edge fitness, and rejuvenating contrast therapies. Explore our primary facilities below.
                </p>
            </div>

            <div class="facilities-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                
                <a href="<?php echo site_url('/racquets'); ?>" class="facility-card" style="text-decoration: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_tennis_player_serving_action_shot.jpg" alt="10XTO Racquets Facility"
                        class="facility-image">
                    <div class="facility-overlay"></div>
                    <div class="facility-content">
                        <div class="section-badge" style="background: var(--yellow); color: var(--black); margin-bottom: 0.5rem; display: inline-block; padding: 0.25rem 0.75rem; font-size: 0.8rem;">Platinum & Gold Tiers</div>
                        <h3>Racquets</h3>
                        <p style="color: var(--white);">4 stunning indoor DecoTurf tennis courts and 7 premium glass-backed squash courts offering breathtaking city views and elite play.</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Racquets &rarr;</span>
                    </div>
                </a>
                
                <a href="<?php echo site_url('/fitness'); ?>" class="facility-card" style="text-decoration: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Strength%20Zone/10XTO-Strength%20Zone%2001.jpg" alt="Fitness Center"
                        class="facility-image">
                    <div class="facility-overlay"></div>
                    <div class="facility-content">
                        <div class="section-badge" style="background: var(--yellow); color: var(--black); margin-bottom: 0.5rem; display: inline-block; padding: 0.25rem 0.75rem; font-size: 0.8rem;">Gold Tier</div>
                        <h3>Fitness & Athletics</h3>
                        <p style="color: var(--white);">A staggering 6,500 sq. ft. fitness centre, a high-performance strength zone, and 4 dedicated group fitness studios.</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Fitness &rarr;</span>
                    </div>
                </a>
                
                <a href="<?php echo site_url('/wellness'); ?>" class="facility-card" style="text-decoration: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast%20Zone/Lifestyle/10XTO-ContrastZone-Lifestyleq-01.jpg" alt="Wellness"
                        class="facility-image" style="object-position: 75% center;">
                    <div class="facility-overlay"></div>
                    <div class="facility-content">
                        <div class="section-badge" style="background: var(--yellow); color: var(--black); margin-bottom: 0.5rem; display: inline-block; padding: 0.25rem 0.75rem; font-size: 0.8rem;">Gold Tier</div>
                        <h3>Wellness</h3>
                        <p style="color: var(--white);">Our expansive Contrast Zone with hot/cold therapy, a skyline-view hot yoga studio, and luxury locker rooms.</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Wellness &rarr;</span>
                    </div>
                </a>
            </div>

            <div class="facilities-grid" style="margin-top: 2.5rem; grid-template-columns: 1fr; gap: 2.5rem;">
                
                <a href="<?php echo site_url('/families'); ?>" class="facility-card" style="height: 400px; text-decoration: none;">
                    <div class="facility-photo"
                        style="background-color: var(--black); width: 100%; height: 100%; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Amenities/Year-Round%20Heated%20Rooftop%20Pool%202.jpg'); background-size: cover; background-position: center;">
                    </div>
                    <div class="facility-overlay" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);"></div>
                    <div class="facility-content" style="max-width: 800px;">
                        <h3 style="font-size: clamp(1.8rem, 5vw, 2.5rem); line-height: 1.2;">Families, Lifestyle & Community</h3>
                        <p style="color: var(--white); font-size: 1.1rem; line-height: 1.6;">Topgolf Sport Simulator, 3,000 sq. ft. Children's Play Centre with Sports Court, Games Room, Members' Lounge & Café, and exclusive Hotel X Rooftop Pool Access.</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Family Amenities &rarr;</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>