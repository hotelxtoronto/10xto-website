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
