<?php
/**
 * 10XTO Theme functions and definitions
 *
 * @package 10XTO
 */

if (!function_exists('tenxto_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function tenxto_setup()
	{
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// Register Navigation Menus.
		register_nav_menus(array(
			'primary' => esc_html__('Primary Menu', '10xto'),
			'footer' => esc_html__('Footer Menu', '10xto'),
		));
	}
endif;
add_action('after_setup_theme', 'tenxto_setup');

/**
 * Enqueue scripts and styles.
 */
function tenxto_scripts()
{
	// Enqueue Google Fonts
	wp_enqueue_style('tenxto-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Work+Sans:wght@400;500;600;700&display=swap', array(), null);

	// Enqueue Custom CSS
	wp_enqueue_style('tenxto-design-system', get_template_directory_uri() . '/css/design-system.css', array(), '1.0.0');
	wp_enqueue_style('tenxto-main-styles', get_template_directory_uri() . '/css/styles.css', array('tenxto-design-system'), '1.0.0');
	wp_enqueue_style('tenxto-style', get_stylesheet_uri(), array('tenxto-main-styles'), '1.0.0');

	// Enqueue Custom JS
	wp_enqueue_script('tenxto-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'tenxto_scripts');

function fix_10xto_page_templates() {
    $pages_to_fix = [
        'about' => 'page-about.php',
        'events' => 'page-events.php',
        'the-club' => 'page-the-club.php',
        'racquets' => 'page-racquets.php',
        'programs' => 'page-programs.php',
        'families' => 'page-families.php',
        'fitness' => 'page-fitness.php'
    ];
    foreach ($pages_to_fix as $slug => $template) {
        $page = get_page_by_path($slug);
        if ($page) {
            $current_template = get_post_meta($page->ID, '_wp_page_template', true);
            if ($current_template !== $template) {
                update_post_meta($page->ID, '_wp_page_template', $template);
            }
        }
    }
}
add_action('init', 'fix_10xto_page_templates');
