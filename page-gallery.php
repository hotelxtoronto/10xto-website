<?php
/**
 * Template Name: Gallery
 */
get_header(); ?>

    <header class="page-hero"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.6) 0%, rgba(0, 0, 0, 0.3) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_gym_weights_with_10XTO_logo.jpg') center/cover;">
        <div class="container">
            <div class="section-badge"
                style="background: var(--yellow); color: var(--black); margin-bottom: 1rem; display: inline-block;">
                Visuals</div>
            <h1>10XTO Gallery</h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">Explore the unparalleled facilities, vibrant
                events, and premium aesthetics of Toronto's most inspired athletic club.</p>
        </div>
    </header>

    <section class="gallery-hub-section">
        <div class="container">
            <div class="gallery-filters"
                style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; margin: 3rem 0; align-items: center;">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="racquets">Racquets</button>
                <button class="filter-btn" data-filter="athletics">Athletics</button>
                <button class="filter-btn" data-filter="wellness">Wellness</button>
                <button class="filter-btn" data-filter="ambience">Ambience</button>
            </div>

            <div class="masonry-grid" id="masterGallery">
                <!-- Racquets -->
                <div class="masonry-item" data-category="racquets">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_indoor_tennis_court_at_sunrise.jpg"
                        alt="DecoTurf Courts at Sunrise" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="racquets">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_squash_court_interior_facility.jpg"
                        alt="ASB Glass-Backed Squash Courts" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="racquets">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis%20Courts/Tennis%20Courts%202024-3.jpg"
                        alt="Elevated Court View" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>

                <!-- Athletics -->
                <div class="masonry-item" data-category="athletics">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_strength_zone_fitness_floor.jpg"
                        alt="Dedicated Strength Zone" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="athletics">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_sled_push_athletic_conditioning.jpg"
                        alt="Athletic Conditioning Turf" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="athletics">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_gym_weights_with_10XTO_logo.jpg"
                        alt="10XTO Branded Barbells" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="athletics">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_pilates_reformer_studio.jpg"
                        alt="Pilates Reformer Studio" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>

                <!-- Wellness -->
                <div class="masonry-item" data-category="wellness">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_studio_skyline_panoramic_view.jpg"
                        alt="Panoramic Hot Yoga Studio" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="wellness">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_class_scenic_city_silhouette.jpg"
                        alt="Sunset Yoga Flow" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="wellness">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_locker_room_vanity_sinks.jpg"
                        alt="Premium Locker Amenities" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>

                <!-- Ambience -->
                <div class="masonry-item" data-category="ambience">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_golf_simulator_suite.jpg"
                        alt="Topgolf Simulator Suite" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="ambience">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Sport%20Simulator/10XTO-Sport%20Simulator.jpg"
                        alt="Childrens Play Centre" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="ambience">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Amenities/Year-Round%20Heated%20Rooftop%20Pool%202.jpg"
                        alt="Hotel X Rooftop Pool" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>

                <!-- More Items for Pagination Testing -->
                <div class="masonry-item" data-category="racquets">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_squash_court_interior_facility.jpg"
                        alt="ASB Glass-Backed Squash Courts" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="athletics">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_strength_zone_fitness_floor.jpg"
                        alt="Dedicated Strength Zone" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="wellness">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_class_scenic_city_silhouette.jpg"
                        alt="Sunset Yoga Flow" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="athletics">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_sled_push_athletic_conditioning.jpg"
                        alt="Athletic Conditioning Turf" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="wellness">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_locker_room_vanity_sinks.jpg"
                        alt="Premium Locker Amenities" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
                <div class="masonry-item" data-category="ambience">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_golf_simulator_suite.jpg"
                        alt="Topgolf Simulator Suite" loading="lazy">
                    <div class="masonry-overlay"></div>
                </div>
            </div>

            <div class="load-more-container" style="text-align: center; margin-top: 3rem;">
                <button class="cta-button" id="loadMoreBtn"
                    style="display: none; cursor: pointer; border: none; font-size: 1rem; padding: 1rem 3rem;">Load
                    More</button>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
