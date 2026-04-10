<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="<?php echo is_front_page() ? 'transparent' : 'scrolled'; ?>">
    <div class="nav-container">
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/logo/10XTO_LOGO_white_primary_transparent.png" alt="<?php bloginfo('name'); ?>" class="logo">
        </a>
        
        <?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_id' => 'primary-menu',
    'menu_class' => 'nav-links',
    'container' => false,
    'fallback_cb' => false,
));
?>

        <!-- Note: We inject the CTA directly alongside the menu, or use a custom walker if needed. -->
        <a href="<?php echo esc_url(site_url('/membership/#apply')); ?>" class="cta-button mobile-hidden">Become a Member</a>

        <div class="mobile-menu-toggle">
            <span></span><span></span><span></span>
        </div>
    </div>
</nav>

<!-- Mobile Menu / Drawer -->
<div class="mobile-menu">
    <a href="<?php echo esc_url(site_url('/about')); ?>">About</a>
    <a href="<?php echo esc_url(site_url('/membership')); ?>">Membership</a>
    <a href="<?php echo esc_url(site_url('/the-club')); ?>">The Club</a>
    <div class="drawer-submenu">
        <a href="<?php echo esc_url(site_url('/racquets')); ?>">Racquets</a>
        <a href="<?php echo esc_url(site_url('/fitness')); ?>">Fitness</a>
        <a href="<?php echo esc_url(site_url('/wellness')); ?>">Wellness</a>
        <a href="<?php echo esc_url(site_url('/families')); ?>">Families</a>
    </div>
    <a href="<?php echo esc_url(site_url('/programs')); ?>">Programs</a>
    <a href="<?php echo esc_url(site_url('/events')); ?>">Events</a>
    <a href="<?php echo esc_url(site_url('/gallery')); ?>">Gallery</a>
    <a href="<?php echo esc_url(site_url('/contact')); ?>">Contact</a>
    <a href="<?php echo esc_url(site_url('/hotel-guest')); ?>">Hotel Guest Information</a>
    <a href="<?php echo esc_url(site_url('/membership/#apply')); ?>" style="color: var(--yellow);">Become a Member</a>
</div>


<!-- Main Content Area Starts -->
<main id="primary" class="site-main">
