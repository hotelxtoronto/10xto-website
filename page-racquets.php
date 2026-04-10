<?php
/* Template Name: Racquets */
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
        animation: fadeIn 0.4s ease-out forwards;
    }

    .tab-content.active {
        display: block;
    }

    .tab-button.disabled {
        opacity: 0.4;
        cursor: not-allowed;
        pointer-events: none;
        border: 2px dashed #444;
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
            gap: 0.5rem;
            padding: 1.5rem 1rem;
        }

        .tab-button {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }
</style>

<header class="page-hero"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_indoor_tennis_court_at_sunrise.jpg') center/cover;">
        <div class="container">
            <div class="section-badge"
                style="background: var(--yellow); color: var(--black); margin-bottom: 1rem; display: inline-block;">
                Racquets at 10XTO</div>
            <h1>The Racquets Hub</h1>
            <p style="font-size: 1.25rem; font-weight: 500; max-width: 600px; margin: 0 auto; line-height: 1.6;">
                Experience Toronto's premier racket sports destination featuring professional-grade Tennis and Squash
                facilities.</p>
        </div>
    </header>

    <!-- Tab Interactivity System -->
    <div class="tab-menu relative-container">
        <button class="tab-button active" data-target="tennis-content">Tennis</button>
        <button class="tab-button" data-target="squash-content">Squash</button>
    </div>

    <!-- Back Navigation Pill -->
    <div class="back-pill-container">
        <a href="the-club.html" class="back-pill">
            <i class="fas fa-chevron-left"></i> Back to The Club
        </a>
    </div>

    <!-- TENNIS CONTENT BLOCK -->
    <div id="tennis-content" class="tab-content active">
        <section class="content-section">
            <div class="container">
                <div class="story-grid" style="align-items: center;">
                    <div class="story-text">
                        <h2>The Courts</h2>
                        <p>Play year-round on our four stunning indoor DecoTurf courts. Housed within a custom-built,
                            climate-controlled glass structure, 10XTO provides a playing experience unlike any other
                            club in
                            Canada.</p>
                        <p>With an expansive 50-foot ceiling profile and 360-degree views stretching across Lake Ontario
                            and
                            the
                            downtown skyline, you aren't just playing tennis—you are playing above the city.</p>

                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <h4>Court Surface</h4>
                                <p>Professional-grade DecoTurf hard courts, exactly as played on at the US Open.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>Ball Machines</h4>
                                <p>Complimentary access to premium Slinger bag ball machines for dedicated practice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="story-image">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/Courts in Play-1.jpg"
                                    alt="10XTO DecoTurf Tennis Courts" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/Tennis Courts 2024-3.jpg"
                                    alt="10XTO DecoTurf Tennis Courts" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/Courts In Play.jpg"
                                    alt="10XTO DecoTurf Tennis Courts" class="lightbox-trigger">
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

        <section class="content-section" style="background: var(--black); color: var(--white);">
            <div class="container" style="padding-top: var(--spacing-section); padding-bottom: var(--spacing-section);">
                <div class="section-header">
                    <h2>Programs & Clinics</h2>
                    <p style="color: rgba(255,255,255,0.8);">Elevate your game with our elite coaching staff.</p>
                </div>
                <div class="feature-highlights" style="margin-top: 0;">
                    <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-color: var(--yellow);">
                        <h4 style="color: var(--white);">Live Ball Clinics</h4>
                        <p style="color: var(--gray-light);">High-energy, fast-paced group drills designed to improve
                            reaction time and cardiovascular stamina.</p>
                    </div>
                    <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-color: var(--yellow);">
                        <h4 style="color: var(--white);">Private Instruction</h4>
                        <p style="color: var(--gray-light);">One-on-one coaching analyzing stroke mechanics, footwork,
                            and
                            tactical match strategy.</p>
                    </div>
                    <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-color: var(--yellow);">
                        <h4 style="color: var(--white);">House Leagues</h4>
                        <p style="color: var(--gray-light);">Competitive seasonal ladders and social mixers for all NTRP
                            rating levels.</p>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- SQUASH CONTENT BLOCK -->
    <div id="squash-content" class="tab-content">
        <section class="content-section">
            <div class="container">
                <div class="story-grid" style="align-items: center;">
                    <div class="story-text">
                        <h2>The Courts</h2>
                        <p>10XTO boasts one of the most comprehensive squash facilities in downtown Toronto, featuring
                            seven
                            state-of-the-art glass-backed ASB courts designed to professional tournament specifications.
                        </p>
                        <p>Whether you are a seasoned player looking for competitive house leagues or a beginner seeking
                            expert
                            instruction from our elite coaching staff, our squash program provides the perfect
                            environment
                            to
                            elevate your game.</p>

                        <div class="feature-highlights">
                            <div class="highlight-item">
                                <h4>Court Types</h4>
                                <p>Enjoy 6 International Singles courts and 1 International Hardball Doubles court.</p>
                            </div>
                            <div class="highlight-item">
                                <h4>Viewing Galleries</h4>
                                <p>Ample spectator seating designed perfectly for tournament play and social mixers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="story-image">
                        <div class="mini-carousel">
                            <div class="mini-carousel-track">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Squash Courts/Squash with Players.jpg"
                                    alt="Players on 10XTO Glass Backed Squash Courts" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Squash Courts/Racquet Socials May 2025-88.jpg"
                                    alt="Players on 10XTO Glass Backed Squash Courts" class="lightbox-trigger">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Squash Courts/TuesdaySocials_102924-1.jpg"
                                    alt="Players on 10XTO Glass Backed Squash Courts" class="lightbox-trigger">
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

        <section class="content-section" style="background: var(--black); color: var(--white);">
            <div class="container" style="padding-top: var(--spacing-section); padding-bottom: var(--spacing-section);">
                <div class="section-header">
                    <h2>Programs & Leagues</h2>
                    <p style="color: rgba(255,255,255,0.8);">Structured play for all levels of experience.</p>
                </div>
                <div class="feature-highlights" style="margin-top: 0;">
                    <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-color: var(--yellow);">
                        <h4 style="color: var(--white);">House Leagues</h4>
                        <p style="color: var(--gray-light);">Organized box leagues ensuring you always have a
                            competitive
                            match at your precise skill level.</p>
                    </div>
                    <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-color: var(--yellow);">
                        <h4 style="color: var(--white);">Private Coaching</h4>
                        <p style="color: var(--gray-light);">One-on-one sessions focusing on technique, movement
                            efficiency,
                            and shot selection.</p>
                    </div>
                    <div class="highlight-item" style="background: rgba(255,255,255,0.1); border-color: var(--yellow);">
                        <h4 style="color: var(--white);">Social Scrambles</h4>
                        <p style="color: var(--gray-light);">Weekly round-robin events designed to integrate new members
                            into the 10XTO squash community.</p>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <!-- Tab Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.tab-button:not(.disabled)');
            const contents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active from all tabs
                    tabs.forEach(t => t.classList.remove('active'));
                    // Add active to clicked tab
                    tab.classList.add('active');

                    // Hide all contents
                    contents.forEach(c => c.classList.remove('active'));
                    // Show target content
                    const targetId = tab.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });
        });
    </script>
<?php get_footer(); ?>
