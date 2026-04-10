<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

    <!-- Page Hero -->
    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_indoor_tennis_court_at_sunrise.jpg') center/cover;">
        <div class="container">
            <h1>Our Story</h1>
            <p>Elevating the standard of athletic excellence in Toronto.</p>
        </div>
    </header>

    <!-- Content: Our Story -->
    <section class="content-section container">
        <div class="story-grid">
            <div class="story-text">
                <div class="section-badge">The Vision</div>
                <h2>An Inspired Athletic Club</h2>
                <p>Anticipated to be the ultimate sports destination from conception, 10XTO was built with inspiration,
                    energy and community front of mind. Located at the iconic Hotel X Toronto, we've built a sanctuary
                    that pairs world-class facilities with breathtaking city skyline views.</p>
                <p>Wherever you are in the Club, you have sight of physical activity taking place around you. This
                    creates an inspiring and encouraging atmosphere in which Members thrive off each others' energy.
                    Encased in floor-to-ceiling glass, 10XTO was deliberately designed to bring the outside in.</p>
                <p>More than just a fitness center, 10XTO is a community hub. We host exclusive member events, provide unparalleled service, and offer a truly holistic approach to health and wellness, combining high-performance athletics with luxurious recovery amenities.</p>
            </div>
            <div class="story-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_strength_zone_fitness_floor.jpg" alt="10XTO Strength Zone Facility">
            </div>
        </div>
    </section>

    <!-- Content: Team (Consolidated as per strategy) -->
    <section class="content-section" style="background: var(--black); color: var(--white);">
        <div class="container" style="padding-top: var(--spacing-section); padding-bottom: var(--spacing-section);">
            <div class="section-header">
                <div class="section-badge" style="background: var(--yellow); color: var(--black);">The Experts</div>
                <h2>The Leadership Team</h2>
                <p style="color: rgba(255,255,255,0.8);">Our world-class professionals are dedicated to your optimal
                    performance.</p>
            </div>
            <div class="team-grid">
                <!-- Example Team Members -->
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Jason.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Jordan</h4>
                        <div class="team-role">General Manager</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">15+ years of high-performance training
                            leadership.</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Franziska.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Eddy</h4>
                        <div class="team-role">Director of Tennis</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Former ATP touring professional and
                            master coach.</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_MJ.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Serena</h4>
                        <div class="team-role">Director of Fitness</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Specialist in contrast therapy and
                            functional movement.</p>
                    </div>
                </div>
                <!-- Additional Team Members -->
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Ben.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Shahier</h4>
                        <div class="team-role">Head Squash Pro</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Former professional player and certified
                            Elite Coach.</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Lisa.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Cristian</h4>
                        <div class="team-role">Fitness Manager</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Curator of our massive 45+ weekly class
                            schedule.</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Chris.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Keegan</h4>
                        <div class="team-role">Operations Manager</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Dedicated to ensuring a flawless member
                            experience.</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Lisa.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Deidre</h4>
                        <div class="team-role">Membership Sales Specialist</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Guiding new members through our premium
                            amenities and membership options.</p>
                    </div>
                </div>
                <div class="team-card">
                    <div class="team-photo"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ad Hoc/Fitness Team Headshots/10XTO_Chris.jpg');">
                    </div>
                    <div class="team-info">
                        <h4 style="color: var(--black);">Jamal</h4>
                        <div class="team-role">Membership Sales Specialist</div>
                        <p style="font-size: 0.9rem; color: var(--gray-dark);">Connecting individuals with the perfect
                            10XTO luxury wellness experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Facilities Overview -->
    <section class="content-section container">
        <div class="story-grid" style="align-items: center;">
            <div class="story-text">
                <div class="section-badge" style="background: var(--yellow); color: var(--black);">Visit Us</div>
                <h2>Location & Facilities</h2>
                <p>10XTO is proudly located atop the historic Princes' Gates at Hotel X Toronto. Our expansive, 90,000 sq. ft. athletic club offers members unprecedented access to premium facilities right in the heart of the city.</p>
                <div style="margin-top: 2rem;">
                    <h4 style="margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; color: var(--gray-dark);">Address</h4>
                    <p style="font-weight: 600;">107 Princes' Boulevard<br>Toronto, ON M6K 3C3<br>At Hotel X Toronto</p>
                </div>
                <div style="margin-top: 2rem;">
                    <h4 style="margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; color: var(--gray-dark);">Hours</h4>
                    <p style="font-weight: 600;">Mon - Fri: 6:00am - 11:00pm<br>Sat & Sun: 7:00am - 10:00pm</p>
                </div>
                <a href="<?php echo esc_url(site_url('/facilities')); ?>" class="cta-primary" style="margin-top: 2rem;">Explore Facilities Overview</a>
            </div>
            <div class="story-image" style="height: 100%; min-height: 400px;">
                <iframe src="https://maps.google.com/maps?q=10XTO,%20107%20Princes'%20Boulevard,%20Toronto&t=&z=14&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0; min-height: 400px; border-radius: 8px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

<?php get_footer(); ?>