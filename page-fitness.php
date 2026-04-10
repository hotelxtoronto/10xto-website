<?php
/* Template Name: Fitness */
get_header();

?>

<style>
        .tab-menu {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 2rem 0;
            background-color: var(--black);
            border-bottom: 1px solid #333;
            flex-wrap: wrap;
            position: sticky;
            top: 80px;
            z-index: 100;
        }

        .tab-button {
            background: transparent;
            color: #888;
            border: 2px solid transparent;
            padding: 0.75rem 2rem;
            border-radius: 30px;
            font-family: var(--font-primary);
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: var(--transition-bounce);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .tab-button:hover:not(.disabled) {
            color: var(--white);
        }

        .tab-button.active {
            background-color: rgba(255, 235, 59, 0.1);
            color: var(--yellow);
            border-color: var(--yellow);
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease-out forwards;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .tab-menu {
                margin: -2rem 1rem 2rem;
                padding: 0.5rem;
                justify-content: flex-start;
                overflow-x: auto;
                border-radius: 10px;
            }

            .tab-button {
                padding: 0.75rem 1.25rem;
                font-size: 0.9rem;
                white-space: nowrap;
            }
        }
    </style>

<header class="page-hero"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/10XTO-Fitness Centre 02.jpg') center/cover;">
        <div class="container">
            <div class="section-badge"
                style="background: var(--yellow); color: var(--black); margin-bottom: 1rem; display: inline-block;">
                All Tiers</div>
            <h1>Fitness at 10XTO</h1>
            <p style="font-size: 1.2rem; max-width: 600px; margin: 0 auto;">A 6,500 sq. ft. playground
                featuring natural light, skyline views, and the most advanced equipment in Toronto.</p>
        </div>
    </header>
    </header>

    <!-- Tab Interactivity System -->
    <div class="tab-menu relative-container">
        <button class="tab-button active" data-target="fitness-content">Fitness</button>
        <button class="tab-button" data-target="group-fitness-content">Group Fitness</button>
        <button class="tab-button" data-target="reformer-pilates-content">Reformer Pilates</button>
    </div>

    <!-- Back Navigation Pill -->
    <div class="back-pill-container">
        <a href="the-club.html" class="back-pill">
            <i class="fas fa-chevron-left"></i> Back to The Club
        </a>
    </div>

    <!-- FITNESS CONTENT BLOCK -->
    <div id="fitness-content" class="tab-content active">
        <section class="content-section">
            <div class="container">
                <div class="story-grid" style="align-items: center;">
                    <div class="story-text">
                        <h2>The Fitness Floor</h2>
                        <p>Elevate your workout in our expansive, light-filled primary fitness centre. We've curated the
                            ultimate training environment featuring floor-to-ceiling windows overlooking Lake Ontario
                            and the downtown skyline.</p>
                        <p>Designed for optimal flow and equipped with top-tier Technogym and Eleiko gear, our fitness
                            floor caters to every routine—from intensive cardio sessions to foundational strength
                            building.</p>

                        <div class="feature-highlights"
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-top: 3rem;">
                            <div class="highlight-item"
                                style="background: var(--gray-light); padding: 2rem; border-left: 4px solid var(--black);">
                                <h4 style="margin-bottom: 0.5rem; color: var(--black);">Cardio Deck</h4>
                                <p>State-of-the-art Technogym machines featuring integrated touchscreens and immersive
                                    virtual training environments.</p>
                            </div>
                            <div class="highlight-item"
                                style="background: var(--gray-light); padding: 2rem; border-left: 4px solid var(--black);">
                                <h4 style="margin-bottom: 0.5rem; color: var(--black);">Free Weights</h4>
                                <p>Comprehensive selection of Olympic lifting platforms, free weights, and selectorized
                                    machines for full-body conditioning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="story-image">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/10XTO-Fitness Centre.jpg"
                                    alt="10XTO Main Fitness Floor" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/10XTO-Fitness Centre 02.jpg"
                                    alt="10XTO Main Fitness Floor" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/TORDH-Fitness Centre-Overlooking Tennis Court-1.jpg"
                                    alt="10XTO Main Fitness Floor" class="lightbox-trigger">
                            </div>
                            <button class="mc-btn prev" aria-label="Previous image"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button class="mc-btn next" aria-label="Next image"><i
                                    class="fas fa-chevron-right"></i></button>
                            <div class="mc-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section"
            style="background: var(--black); color: var(--white); padding-top: 4rem; padding-bottom: 4rem;">
            <div class="container">
                <div class="story-grid" style="align-items: center; direction: rtl;">
                    <div class="story-text" style="direction: ltr;">
                        <h2 style="color: var(--white);">The Strength Zone</h2>
                        <p style="color: rgba(255,255,255,0.8);">A hardcore, high-performance area tucked away for
                            serious barbell athletes and functional fitness enthusiasts. Featuring heavy turf and
                            specialized racks designed for Olympic lifting.</p>
                    </div>
                    <div class="story-image" style="direction: ltr;">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Strength Zone/10XTO-Strength Zone 01.jpg"
                                    alt="Strength Zone" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Strength Zone/10XTO-Strength Zone 02.png"
                                    alt="Strength Zone" class="lightbox-trigger">
                            </div>
                            <button class="mc-btn prev" aria-label="Previous image"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button class="mc-btn next" aria-label="Next image"><i
                                    class="fas fa-chevron-right"></i></button>
                            <div class="mc-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- GROUP FITNESS CONTENT BLOCK -->
    <div id="group-fitness-content" class="tab-content">
        <section class="content-section">
            <div class="container">
                <div class="section-header" style="text-align: center; margin-bottom: 4rem;">
                    <h2>Group Training</h2>
                    <p style="max-width: 600px; margin: 0 auto;">Push your limits together in
                        our specialized studios led by elite instructors.</p>
                </div>

                <div class="story-grid" style="align-items: center;">
                    <div class="story-text">
                        <h2>Studio X</h2>
                        <p>Our versatile group fitness studio hosting a wide variety of classes including non-heated
                            Yoga, Ballet, and many others designed to elevate your routine.</p>
                    </div>
                    <div class="story-image">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Studio X/Studio X-1.jpg" alt="Studio X HIIT Class"
                                    class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Studio X/Studio X-2.jpg" alt="Studio X HIIT Class"
                                    class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Studio X/Studio X 1.jpg" alt="Studio X HIIT Class"
                                    class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Studio X/Studio X 2.jpg" alt="Studio X HIIT Class"
                                    class="lightbox-trigger">
                            </div>
                            <button class="mc-btn prev" aria-label="Previous image"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button class="mc-btn next" aria-label="Next image"><i
                                    class="fas fa-chevron-right"></i></button>
                            <div class="mc-dots"></div>
                        </div>
                    </div>
                </div>

                <div class="story-grid" style="align-items: center; direction: rtl;">
                    <div class="story-text" style="direction: ltr;">
                        <h2>Hot Yoga Studio</h2>
                        <p>Find your flow in our skyline-view hot yoga studio built with state-of-the-art far-infrared
                            heating panels for deep muscle relaxation, detoxification, and mindful movement.</p>
                    </div>
                    <div class="story-image" style="direction: ltr;">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_studio_skyline_panoramic_view.jpg"
                                    alt="Hot Yoga Studio" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_class_scenic_city_silhouette.jpg"
                                    alt="Hot Yoga Silhouette" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_wellness_entrance_sign.jpg"
                                    alt="Hot Yoga Entrance" class="lightbox-trigger">
                            </div>
                            <button class="mc-btn prev" aria-label="Previous image"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button class="mc-btn next" aria-label="Next image"><i
                                    class="fas fa-chevron-right"></i></button>
                            <div class="mc-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section"
            style="background: var(--black); color: var(--white); padding-top: 4rem; padding-bottom: 4rem;">
            <div class="container">
                <div class="story-grid" style="align-items: center;">
                    <div class="story-text">
                        <h2 style="color: var(--white);">The Strength Zone</h2>
                        <p style="color: rgba(255,255,255,0.8);">Beyond open training, our high-performance strength
                            zone also hosts intimate group functional fitness sessions leveraging our heavy turf,
                            kettlebells, and specialized racks.</p>
                    </div>
                    <div class="story-image">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Strength Zone/10XTO-Strength Zone 01.jpg"
                                    alt="Strength Zone Classes" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Strength Zone/10XTO-Strength Zone 02.png"
                                    alt="Strength Zone Classes" class="lightbox-trigger">
                            </div>
                            <button class="mc-btn prev" aria-label="Previous image"><i
                                    class="fas fa-chevron-left"></i></button>
                            <button class="mc-btn next" aria-label="Next image"><i
                                    class="fas fa-chevron-right"></i></button>
                            <div class="mc-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- REFORMER PILATES CONTENT BLOCK -->
    <div id="reformer-pilates-content" class="tab-content">
        <section class="content-section">
            <div class="container">
                <div class="story-grid" style="align-items: center;">
                    <div class="story-text">
                        <h2>Pilates Reformer Studio</h2>
                        <p>Transform your body with our dedicated Reformer Pilates programming. Our intimate studio is
                            equipped with premium Allegro 2 Reformers designed to build deep core strength, increase
                            flexibility, and drastically improve postural alignment.</p>
                        <div class="feature-highlights" style="margin-top: 2rem;">
                            <div class="highlight-item"
                                style="border-left: 4px solid var(--yellow); padding-left: 1.5rem; margin-bottom: 1.5rem;">
                                <h4>Small Group Sessions</h4>
                                <p>Benefit from personalized attention in small,
                                    tightly-capped classes ensuring precise form correction and guidance.</p>
                            </div>
                            <div class="highlight-item"
                                style="border-left: 4px solid var(--yellow); padding-left: 1.5rem;">
                                <h4>Private Instruction</h4>
                                <p>Book 1-on-1 sessions tailored strictly to your
                                    ongoing physical rehabilitation or elite athletic goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="story-image">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_pilates_reformer_studio.jpg"
                                    alt="Pilates Reformer Studio" class="lightbox-trigger">
                            </div>
                            <div class="mc-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    
<script>
        // Tab Interactivity System
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab-button:not(.disabled)');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active from all tabs & contents
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => c.classList.remove('active'));

                    // Add active to clicked tab
                    tab.classList.add('active');

                    // Show target content
                    const targetId = tab.getAttribute('data-target');
                    const targetContent = document.getElementById(targetId);
                    if (targetContent) {
                        targetContent.classList.add('active');
                    }
                });
            });
        });
    </script>

<?php get_footer(); ?>
