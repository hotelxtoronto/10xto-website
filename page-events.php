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
                    
                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Events/Wine%20Tasting/DSC01097.jpg" alt="Wine Tasting" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Wine Tasting</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Events/Retro%20Tennis/DSC09153.jpg" alt="Retro Tennis" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Retro Tennis</h4>
                        </div>
                    </div>

                    <div class="gallery-item" style="position: relative; aspect-ratio: 4/3; border-radius: 8px; overflow: hidden;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Events/Tennis%20Doubles%20Finale/DSC01523.jpg" alt="Tennis Doubles Finale" style="width: 100%; height: 100%; object-fit: cover;">
                        <div class="gallery-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem; background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <h4 style="color: white; margin: 0; font-size: 1.1rem;">Tennis Doubles Finale</h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
