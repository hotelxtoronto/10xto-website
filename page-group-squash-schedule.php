<?php
/**
 * Template Name: Group Squash Schedule
 */
get_header(); ?>

    <header class="page-hero" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.5) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_indoor_tennis_court_at_sunrise.jpg') center/cover; height: 30vh; min-height: 250px;">
        <div class="container" style="text-align: center;">
            <h1><?php the_title(); ?></h1>
        </div>
    </header>

    <section class="content-section container" style="padding: 4rem 20px;">
<div class="story-grid" style="grid-template-columns: 1fr; max-width: 800px; margin: 0 auto;">
<p style='color: var(--gray-light); line-height: 1.6; margin-bottom: 1rem;'>If you are, or will be a guest staying atHotel X Torontoand would like to inquire about reserving an amenity during your stay, pleaseclick here.</p>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/23fd2a2be53141ed810f4d3dcdcd01fa.png/v1/fill/w_24,h_24,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/23fd2a2be53141ed810f4d3dcdcd01fa.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/11062b_36edc9a0843e4563836cd26e2f9e5c3a~mv2.png/v1/fill/w_24,h_24,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_36edc9a0843e4563836cd26e2f9e5c3a~mv2.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/81af6121f84c41a5b4391d7d37fce12a.png/v1/fill/w_24,h_24,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/81af6121f84c41a5b4391d7d37fce12a.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/dacce5_e439ea43a8204857abeb7196840279ac~mv2.png/v1/crop/x_0,y_207,w_4167,h_1733/fill/w_222,h_92,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/10XTO_LOGO_white_primary_transparent.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/dacce5_723388cde66e432cb91307e01a1e33b4~mv2.jpg/v1/fill/w_978,h_551,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/GROUP%20SQUASH%20SCHEDULE%202024%20(9).jpg" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/dacce5_e439ea43a8204857abeb7196840279ac~mv2.png/v1/fill/w_115,h_53,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/10XTO_LOGO_white_primary_transparent.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/81af6121f84c41a5b4391d7d37fce12a.png/v1/fill/w_22,h_22,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/81af6121f84c41a5b4391d7d37fce12a.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/11062b_36edc9a0843e4563836cd26e2f9e5c3a~mv2.png/v1/fill/w_22,h_22,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/11062b_36edc9a0843e4563836cd26e2f9e5c3a~mv2.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>
<div style="margin: 2rem 0; border-radius: 8px; overflow: hidden;"><img src="https://static.wixstatic.com/media/23fd2a2be53141ed810f4d3dcdcd01fa.png/v1/fill/w_22,h_22,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/23fd2a2be53141ed810f4d3dcdcd01fa.png" alt="" style="width: 100%; height: auto; object-fit: cover;"></div>

<?php
while ( have_posts() ) :
    the_post();
    the_content();
endwhile;
?>

</div>
</section>

<?php get_footer(); ?>
