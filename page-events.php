<?php
/**
 * Template Name: Events
 */

get_header(); ?>

    <header class="page-hero"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Welcome%20Back%20Party%202025/10X%20Welcome%20Back-20.jpg') center/cover;">
        <div class="container">
            <h1>Events & Community</h1>
            <p style="font-size: 1.25rem; font-weight: 500; max-width: 600px; margin: 0 auto; line-height: 1.6;">Experience the vibrant heart of 10XTO.</p>
        </div>
    </header>

    <!-- Featured Event Promotional Banner -->
    <section class="section" style="padding-top: 4rem; padding-bottom: 3rem; background-color: var(--black);">
        <div class="container">
            <div style="background: linear-gradient(to right, #1a1a1a, #0a0a0a); border: 1px solid #333; border-radius: 12px; display: flex; flex-direction: row; align-items: center; justify-content: space-between; padding: 2.5rem; gap: 2rem; flex-wrap: wrap;">
                <div style="flex: 1; min-width: 300px;">
                    <div class="section-badge" style="background: var(--yellow); color: var(--black); margin-bottom: 0.5rem; padding: 4px 12px; font-size: 0.75rem;">Coming in March</div>
                    <h2 style="font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 0.5rem; text-transform: uppercase; color: var(--white);">International Women's Day</h2>
                    <p style="font-size: 1rem; font-weight: 500; color: #ccc; margin-bottom: 1.5rem; max-width: 600px;">
                        Join us as we celebrate and empower the women of our community with an inspiring day of connection, wellness, and celebration at 10XTO.
                    </p>
                    <a href="https://www.eventbrite.com/e/1983485782369/?aff=oddtdtcreator" target="_blank" rel="noopener noreferrer" class="cta-primary" style="padding: 12px 24px; font-size: 0.95rem;">Get Tickets &rarr;</a>
                </div>
                <div style="width: 300px; height: 180px; background-color: #222; border-radius: 8px; border: 1px dashed #555; display: flex; align-items: center; justify-content: center; text-align: center; flex-shrink: 0;">
                     <div>
                        <svg width="32" height="32" fill="var(--yellow)" viewBox="0 0 24 24" style="margin-bottom: 0.5rem;"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg>
                        <p style="color: #888; font-size: 0.85rem; font-weight: 600; margin: 0;">[ Promotional Asset ]</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Hub Galleries -->
    <section class="section" style="padding-top: 3rem; background-color: var(--black);">
        <div class="container">
            <div class="section-header" style="margin-bottom: 3rem; text-align: left;">
                <h2 style="font-size: 3rem; margin-bottom: 0.5rem;">A Thriving Community</h2>
                <p style="font-weight: 500; font-size: 1.1rem; color: #ccc;">The 10XTO lifestyle extends far beyond the court and the gym floor.</p>
            </div>
            
            <!-- Category 1: Club Socials -->
            <div style="margin-bottom: 4rem;">
                <h3 style="font-size: 1.8rem; border-bottom: 1px solid #333; padding-bottom: 0.5rem; margin-bottom: 1.5rem; color: var(--yellow);">Club Socials</h3>
                <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                    
                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Welcome%20Back%20Party%202025/10X%20Welcome%20Back-15.jpg" alt="Welcome Back Party" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Welcome Back Party</h4>
                        </div>
                    </div>
                    
                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Welcome%20Back%20Party%202025/10X%20Welcome%20Back-05.jpg" alt="Member Socials" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Member Mixers</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Community/Welcome%20Back%20Party%202025/10X%20Welcome%20Back-10.jpg" alt="Cocktail Hour" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Post-Match Drinks</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Category 2: Special Events -->
            <div style="margin-bottom: 4rem;">
                <h3 style="font-size: 1.8rem; border-bottom: 1px solid #333; padding-bottom: 0.5rem; margin-bottom: 1.5rem; color: var(--yellow);">Special Events</h3>
                <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                    
                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden; background-color: #1a1a1a; display: flex; align-items: center; justify-content: center; border: 1px dashed #444; text-align: center; padding: 2rem;">
                        <div style="z-index: 1;">
                            <svg width="32" height="32" fill="#555" viewBox="0 0 24 24" style="margin-bottom: 1rem;"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            <h4 style="color: #777; margin: 0; font-size: 1rem;">[ Retro Tennis Photo ]</h4>
                        </div>
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Retro Tennis Night</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Events/FitFest%202025/Promotions/FITNESS%20FEST%202025%20Poster.png" alt="FitFest 2025" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Fitness Fest</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden; background-color: #1a1a1a; display: flex; align-items: center; justify-content: center; border: 1px dashed #444; text-align: center; padding: 2rem;">
                        <div style="z-index: 1;">
                            <svg width="32" height="32" fill="#555" viewBox="0 0 24 24" style="margin-bottom: 1rem;"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            <h4 style="color: #777; margin: 0; font-size: 1rem;">[ National Bank Open Photo ]</h4>
                        </div>
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">National Bank Open</h4>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Category 3: Family Events -->
            <div>
                <h3 style="font-size: 1.8rem; border-bottom: 1px solid #333; padding-bottom: 0.5rem; margin-bottom: 1.5rem; color: var(--yellow);">Family Events</h3>
                <div class="gallery-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1rem;">
                    
                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden; background-color: #1a1a1a; display: flex; align-items: center; justify-content: center; border: 1px dashed #444; text-align: center; padding: 2rem;">
                        <div style="z-index: 1;">
                            <svg width="32" height="32" fill="#555" viewBox="0 0 24 24" style="margin-bottom: 1rem;"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            <h4 style="color: #777; margin: 0; font-size: 1rem;">[ Kids Trick-or-Treat Photo ]</h4>
                        </div>
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Kids Trick-or-Treat</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden; background-color: #1a1a1a; display: flex; align-items: center; justify-content: center; border: 1px dashed #444; text-align: center; padding: 2rem;">
                        <div style="z-index: 1;">
                            <svg width="32" height="32" fill="#555" viewBox="0 0 24 24" style="margin-bottom: 1rem;"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            <h4 style="color: #777; margin: 0; font-size: 1rem;">[ Summer Camps Photo ]</h4>
                        </div>
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Summer Camps</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden; background-color: #1a1a1a; display: flex; align-items: center; justify-content: center; border: 1px dashed #444; text-align: center; padding: 2rem;">
                        <div style="z-index: 1;">
                            <svg width="32" height="32" fill="#555" viewBox="0 0 24 24" style="margin-bottom: 1rem;"><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"/></svg>
                            <h4 style="color: #777; margin: 0; font-size: 1rem;">[ Early Childhood Event Photo ]</h4>
                        </div>
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent); z-index: 2;">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Early Childhood Education</h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
