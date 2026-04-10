<?php
/**
 * Template Name: Programs Page
 */
get_header(); ?>

    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Expertise/Group%20Fitness/IMG_4344-Edit.jpg') center/cover;">
        <div class="container">
            <h1>Programs</h1>
            <p style="font-size: 1.2rem;">Push your limits. Achieve your goals.</p>
        </div>
    </header>

    <!-- Filter Navigation Styles -->
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

        .tab-btn {
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

        .tab-btn:hover {
            color: var(--black);
        }

        .tab-btn.active {
            background-color: var(--black);
            color: var(--yellow);
            border-color: var(--black);
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.4s ease-out forwards;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>

    <!-- Filter Navigation -->
    <div class="tab-menu">
        <button class="tab-btn active" data-target="group-fitness">Group Fitness</button>
        <button class="tab-btn" data-target="racquets">Racquets</button>
        <button class="tab-btn" data-target="personal-training">Personal Training</button>
        <button class="tab-btn" data-target="youth-families">Youth & Families</button>
    </div>

    <section class="programs-hub" id="programs" style="padding-top: var(--spacing-section); padding-bottom: var(--spacing-section);">
        <div class="container">
        <!-- GROUP FITNESS TAB -->
        <div class="tab-content active" data-category="group-fitness">
            <!-- Group Fitness Overview -->
            <div class="section-header">
                <h2>Over 60+ Weekly Classes</h2>
                <p>From Hot Yoga to Pilates Reformer, Studio X athletic conditioning to our dedicated Strength Zone—find classes that fit your goals.</p>
            </div>
            <div class="fitness-showcase" style="margin-bottom: 3rem;">
                <div class="showcase-left" style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div class="mini-carousel">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Expertise/Group Fitness/IMG_4452-Edit.jpg" alt="Group Fitness" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Expertise/Group Fitness/IMG_4430-Edit.jpg" alt="Group Fitness Class" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Expertise/Group Fitness/IMG_4344-Edit.jpg" alt="Athletic Conditioning" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Expertise/Group Fitness/IMG_4331-Edit.jpg" alt="Hot Yoga Flow" class="lightbox-trigger">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="https://www.10xto.com/_files/ugd/dacce5_c6ee09f30fbf49ffa599772bcb5539ed.pdf" target="_blank" class="cta-primary">Group Fitness Schedule</a>
                        <a href="https://www.10xto.com/_files/ugd/dacce5_cb5e28de4d1c40ad9122e053b2cd17d7.pdf" target="_blank" class="cta-secondary" style="border: 2px solid var(--black); color: var(--black);">Pilates Reformer Schedule</a>
                    </div>
                </div>
                <div class="fitness-classes">
                    <div class="class-item">
                        <h4>Hot Yoga Flow</h4>
                        <p>Heated studio with breathtaking skyline views, perfect for building strength and flexibility while finding your zen.</p>
                    </div>
                    <div class="class-item">
                        <h4>Athletic Conditioning</h4>
                        <p>High-intensity training designed to elevate your performance, build endurance, and push your limits.</p>
                    </div>
                    <div class="class-item">
                        <h4>Reformer Pilates</h4>
                        <p>Instructor-led classes focused on core stability, optimal movement patterns, and total-body strength.</p>
                    </div>
                    <div class="class-item">
                        <h4>Studio X (HIIT)</h4>
                        <p>High-Intensity Interval Training designed to maximize caloric burn and elevate cardiovascular performance.</p>
                    </div>
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Strength Zone Clinics</h4>
                        <p>Small-group specialized training focusing on Olympic lifting, powerlifting, and functional strength.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RACQUETS TAB -->
        <div class="tab-content hidden" data-category="racquets">
            <div class="section-header">
                <h2>Tennis & Squash Programming</h2>
                <p>Sharpen your game with our comprehensive racquet sports programming.</p>
            </div>
            <div class="fitness-showcase" style="margin-bottom: 3rem;">
                <div class="showcase-left" style="min-width: 0; width: 100%;">
                    <div class="mini-carousel">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/Tennis Courts 2024-3.jpg" alt="Racquets Programs" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Squash Courts/10XTO Squash Courts 1.jpg" alt="Squash Court" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/10XTO-Tennis-Play.jpg" alt="Tennis Play" class="lightbox-trigger">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                </div>
                <div class="fitness-classes">
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Tennis Clinics (Platinum)</h4>
                        <p>Drills and live-ball clinics designed for players of all levels to refine their technique and match play.</p>
                    </div>
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Squash Clinics</h4>
                        <p>Elevate your squash strategy and court awareness with expert instruction and structured drills.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- PERSONAL TRAINING TAB -->
        <div class="tab-content hidden" data-category="personal-training">
            <div class="section-header">
                <h2>Elevate Your Routine</h2>
                <p>Achieve your goals with customized training programs led by our elite performance coaches.</p>
            </div>
            <div class="fitness-showcase" style="margin-bottom: 3rem;">
                <div class="showcase-left">
                    <div class="mini-carousel">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/10XTO-Fitness Centre.jpg" alt="Personal Training" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/Fitness Floor.jpg" alt="Performance Training" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Fitness Floor/TORDH-Fitness Centre-Overlooking Tennis Court.jpg" alt="Strength Zone" class="lightbox-trigger">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                </div>
                <div class="fitness-classes">
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Private Sessions</h4>
                        <p>Work 1-on-1 with our elite coaches to design a program completely tailored to your unique physiology and goals.</p>
                    </div>
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Sport-Specific Training</h4>
                        <p>Dedicated tennis and squash conditioning to improve your on-court performance, power, and agility.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- YOUTH & FAMILIES TAB -->
        <div class="tab-content hidden" data-category="youth-families">
            <div class="section-header">
                <h2>Developing the Next Generation</h2>
                <p>Dynamic programming designed to build foundational athletic skills and foster a lifelong love of sport.</p>
            </div>
            <div class="fitness-showcase" style="margin-bottom: 3rem;">
                <div class="showcase-left">
                    <div class="mini-carousel">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Families/Kids Play Centre.jpg" alt="Youth & Families" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Saturdays at the Club/10XTO_Saturdays-05.jpg" alt="Saturdays at the Club" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Saturdays at the Club/10XTO_Saturdays-15.jpg" alt="Family Activities" class="lightbox-trigger">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Saturdays at the Club/10XTO_Saturdays-30.jpg" alt="Kids Programs" class="lightbox-trigger">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                </div>
                <div class="fitness-classes">
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Junior Tennis Programs</h4>
                        <p>Structured progression from red ball to advanced tournament play, focusing on stroke development and match strategy.</p>
                    </div>
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Junior Squash Programs</h4>
                        <p>Introduction to squash syntax, racket control, and court movement for young athletes.</p>
                    </div>
                    <div class="class-item" style="border-left-color: var(--black);">
                        <h4>Play Centre Activities</h4>
                        <p>Supervised, engaging activities in our dedicated Play Centre designed to keep younger children active and social.</p>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </section>

    <script>
        // Programs Hub Specific Tab Routing
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Reset all
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(c => {
                        c.classList.remove('active');
                        c.classList.add('hidden');
                    });

                    // Activate Clicked Tab
                    tab.classList.add('active');

                    // Reveal matching category block
                    const targetCategory = tab.getAttribute('data-target');
                    const targetContent = document.querySelector(`.tab-content[data-category="${targetCategory}"]`);
                    
                    if (targetContent) {
                        targetContent.classList.remove('hidden');
                        targetContent.classList.add('active');
                    }
                });
            });
        });
    </script>

<?php get_footer(); ?>