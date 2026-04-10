<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package 10XTO
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
if (have_posts()):

    if (is_home() && !is_front_page()):
?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
    endif;

    /* Start the Loop */
    while (have_posts()):
        the_post();

        // Include the template for the content.
        get_template_part('template-parts/content', get_post_type());

    endwhile;

    the_posts_navigation();

else:

    // If no content, include the "No posts found" template.
    get_template_part('template-parts/content', 'none');

endif;
?>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
