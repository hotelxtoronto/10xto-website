<?php
require_once( dirname( __FILE__ ) . '/../../../wp-load.php' );

// Prevent unauthorized access
if ( !isset($_GET['secret']) || $_GET['secret'] !== '10xto_deploy_2026' ) {
    die("Unauthorized.");
}

$pages = [
    ['slug' => 'private-athletic-club-toronto', 'title' => 'Paid Ads Landing Page'],
    ['slug' => 'membership-request-form', 'title' => 'Membership Request Form'],
    ['slug' => 'newsletter-sign-up', 'title' => 'Newsletter Sign Up'],
    ['slug' => 'thankyoupage', 'title' => 'Thank You'],
    ['slug' => 'thank-you-newsletter-signup', 'title' => 'Thank You Newsletter Signup'],
    ['slug' => 'tennis-club-champs', 'title' => 'Tennis Club Champs'],
    ['slug' => 'tournament', 'title' => '10XTO Indoor Doubles Championships'],
    ['slug' => 'kids-camps', 'title' => 'Kids Camps'],
    ['slug' => '10xto-staff-directory', 'title' => '10XTO Staff Directory'],
    ['slug' => 'member-policies', 'title' => 'Member Club Policies'],
    ['slug' => '10xto-corporate-membership-packages', 'title' => 'Corporate Memberships'],
    ['slug' => 'membership-referrals', 'title' => 'Membership Referrals'],
    ['slug' => 'membership-options', 'title' => 'Membership Options'],
    ['slug' => 'group-tennis-schedule', 'title' => 'Group Tennis Schedule'],
    ['slug' => 'fitness-bingo', 'title' => 'Fitness Bingo'],
    ['slug' => 'unsubscribe', 'title' => 'Unsubscribe'],
    ['slug' => 'member-advent-calendar', 'title' => 'Member Advent Calendar'],
    ['slug' => 'squash-club-championships', 'title' => 'Squash Club Championships'],
    ['slug' => 'calendars', 'title' => 'Club Calendars'],
    ['slug' => 'group-squash-schedule', 'title' => 'Group Squash Schedule'],
    ['slug' => 'unsubscribe-confirmation', 'title' => 'Unsubscribe Confirmation'],
    ['slug' => 'golf-sim-league', 'title' => 'Golf Simulator League'],
    ['slug' => 'membership-service-fees', 'title' => 'Membership Service Fees'],
];

echo "<h3>Initializing Page Creation...</h3>";

foreach ($pages as $p) {
    $slug = $p['slug'];
    $title = $p['title'];
    
    // Check if page already exists by path
    $page = get_page_by_path($slug);
    
    if (!$page) {
        $post_id = wp_insert_post([
            'post_title'    => $title,
            'post_name'     => $slug,
            'post_status'   => 'publish',
            'post_type'     => 'page',
            'post_author'   => 1,
            'page_template' => "page-{$slug}.php"
        ]);
        echo "<p style='color:green;'>✅ Created page: <strong>{$title}</strong> (ID: {$post_id})</p>";
    } else {
        // Ensure template is set even if it exists
        update_post_meta($page->ID, '_wp_page_template', "page-{$slug}.php");
        echo "<p style='color:blue;'>ℹ️ Page already exists, updated template: <strong>{$title}</strong> (ID: {$page->ID})</p>";
    }
}

echo "<h3>All done! You can now delete this script for security.</h3>";
?>
