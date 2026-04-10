<?php
/* Template Name: Hotel Guest Information */
get_header();
?>

<style>
    .amenities-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .amenity-card {
        background: var(--white);
        border: 1px solid var(--gray-light);
        padding: 2rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .amenity-card:hover {
        border-color: var(--yellow);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transform: translateY(-5px);
    }

    .amenity-title {
        color: var(--black);
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--yellow);
        display: inline-block;
    }

    .amenity-price-list {
        list-style: none;
        padding: 0;
        margin: 1.5rem 0;
    }

    .amenity-price-list li {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        color: var(--gray-dark);
        font-size: 0.95rem;
        border-bottom: 1px dashed var(--gray-light);
        padding-bottom: 0.25rem;
    }

    .amenity-price-list li span:last-child {
        font-weight: 600;
        color: var(--black);
    }

    .policy-box {
        background: rgba(10, 10, 10, 0.03);
        border-left: 4px solid var(--yellow);
        padding: 2rem;
        margin-top: 4rem;
    }
</style>

<header class="page-hero"
    style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Amenities/Year-Round%20Heated%20Rooftop%20Pool%202.jpg') center/cover;">
    <div class="container">
        <h1>Welcome to 10XTO</h1>
        <p style="font-size: 1.2rem;">The Next Level of Hotel Fitness</p>
    </div>
</header>

<section class="content-section container">
    <div class="section-badge" style="background: var(--black); color: var(--white);">Guest Privileges</div>
    <h2 style="margin-top: 1rem;">An Unmatched Experience</h2>
    <p class="intro-text" style="max-width: 800px;">
        Hotel X Toronto offers a sports and fitness experience unmatched by any city hotel in North America.
        As a registered guest, we encourage you to enjoy complimentary access to the 4th Floor Fitness Centre,
        as well as a variety of additional world-class athletic activities at exclusive rates.
    </p>

    <!-- Wellness Getaway Callout -->
    <div class="wellness-callout"
        style="background: linear-gradient(135deg, var(--black) 0%, #1a1a1a 100%); color: var(--white); padding: 3rem; border-radius: 12px; margin: 3rem 0; display: flex; flex-wrap: wrap; gap: 2rem; align-items: center; border-left: 4px solid var(--yellow);">
        <div style="flex: 1; min-width: 300px;">
            <div class="section-badge"
                style="background: rgba(238, 181, 0, 0.1); color: var(--yellow); margin-bottom: 1rem; border: 1px solid var(--yellow);">
                Special Add-On</div>
            <h3 style="font-size: clamp(1.5rem, 4vw, 2rem); margin-bottom: 1rem;">Experience Wellness</h3>
            <p style="font-size: 1.1rem; line-height: 1.6; color: #ddd; margin-bottom: 1.5rem;">
                Turn your stay into a Toronto wellness getaway. This exclusive package effortlessly integrates
                guided movement and restorative contrast therapy into your hotel stay.
            </p>
            <div
                style="background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 8px; margin-bottom: 1.5rem;">
                <h4 style="color: var(--yellow); margin-bottom: 0.5rem; font-size: 1.1rem;">$50.00 + HST / night per
                    person</h4>
                <ul style="list-style: none; padding: 0; margin: 0; color: #ccc;">
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: start; gap: 0.5rem;"><span
                            style="color: var(--yellow);">✓</span> One (1) 45-minute booking at the Contrast Zone
                    </li>
                    <li style="margin-bottom: 0.5rem; display: flex; align-items: start; gap: 0.5rem;"><span
                            style="color: var(--yellow);">✓</span> One (1) Group Fitness Class at 10XTO</li>
                    <li style="display: flex; align-items: start; gap: 0.5rem;"><span
                            style="color: var(--yellow);">✓</span> In-room use of Kala Red Light Therapy products
                    </li>
                </ul>
            </div>
            <a href="https://www.hotelxtoronto.com/toronto-wellness-getaway-retreat" target="_blank"
                class="cta-primary">Learn More & Book</a>
        </div>
        <div
            style="flex: 1; min-width: 300px; height: 100%; min-height: 350px; border-radius: 8px; overflow: hidden; background: url('<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast%20Zone/Architectural/Contrast%20Zone-10.jpg') center/cover;">
        </div>
    </div>

    <div class="amenities-grid">
        <!-- Fitness Centre -->
        <div class="amenity-card">
            <h3 class="amenity-title">4th Floor Fitness Centre</h3>
            <p>Complimentary access for Registered Guests of Hotel X Toronto.</p>
            <ul class="amenity-price-list">
                <li><span>Access</span><span>Complimentary</span></li>
                <li><span>Hours</span><span>24-hours</span></li>
            </ul>
            <p style="font-size: 0.85rem; color: var(--gray-dark); margin-top: 1rem;">
                *Staffed during regular club hours. Ages 18+ can freely access. Ages 16-17 require parental sign-in.
                Ages 12-15 must be accompanied by a parent.
            </p>
        </div>

        <!-- Tennis -->
        <div class="amenity-card">
            <h3 class="amenity-title">Tennis</h3>
            <p>Four world-class indoor tennis courts offering panoramic city and lake views.</p>
            <ul class="amenity-price-list">
                <li><span>1 Hour Court Booking</span><span>$50</span></li>
                <li><span>Ball Machine Rental</span><span>$75</span></li>
                <li><span>1 Hour Private Lesson</span><span>$145+</span></li>
            </ul>
            <a href="mailto:frontdesk@10xto.com?subject=Hotel%20Guest%20%7C%20Tennis" class="cta-secondary"
                style="margin-top: 1rem; display: inline-block;">Inquire/Book</a>
        </div>

        <!-- Squash -->
        <div class="amenity-card">
            <h3 class="amenity-title">Squash</h3>
            <p>Enjoy an unmatched squash experience across 7 singles and 1 international doubles court.</p>
            <ul class="amenity-price-list">
                <li><span>45 Mins Court Booking</span><span>$30</span></li>
                <li><span>45 Mins Private Lesson</span><span>$130+</span></li>
            </ul>
            <a href="mailto:frontdesk@10xto.com?subject=Hotel%20Guest%20%7C%20Squash" class="cta-secondary"
                style="margin-top: 1rem; display: inline-block;">Inquire/Book</a>
        </div>

        <!-- Group Fitness -->
        <div class="amenity-card">
            <h3 class="amenity-title">Group Fitness</h3>
            <p>Access Hot Yoga, Pilates Reformer, Studio X, and the Strength Zone.</p>
            <ul class="amenity-price-list">
                <li><span>Group Fitness Class</span><span>$25</span></li>
                <li><span>Pilates Reformer Class</span><span>$40</span></li>
            </ul>
            <a href="mailto:frontdesk@10xto.com?subject=Hotel%20Guest%20%7C%20Group%20Fitness" class="cta-secondary"
                style="margin-top: 1rem; display: inline-block;">Inquire/Book</a>
        </div>

        <!-- Personal Training -->
        <div class="amenity-card">
            <h3 class="amenity-title">Personal Training</h3>
            <p>Result-based sessions in our fully equipped state-of-the-art facility.</p>
            <ul class="amenity-price-list">
                <li><span>1 Hour Session</span><span>$120</span></li>
                <li><span>45 Min Session</span><span>$95</span></li>
                <li><span>30 Min Session</span><span>$75</span></li>
            </ul>
            <a href="mailto:frontdesk@10xto.com?subject=Hotel%20Guest%20%7C%20PT" class="cta-secondary"
                style="margin-top: 1rem; display: inline-block;">Inquire/Book</a>
        </div>

        <!-- Sport Simulator -->
        <div class="amenity-card">
            <h3 class="amenity-title">Sport Simulator & Play Centre</h3>
            <p>Topgolf, virtual games, and a 3,000 sq ft ultimate kids' destination.</p>
            <ul class="amenity-price-list">
                <li><span>Simulator (1 Hour)</span><span>$45</span></li>
                <li><span>Play Centre (1 Hour)</span><span>$17</span></li>
                <li><span>Play Centre (Add. Child)</span><span>$6</span></li>
            </ul>
            <a href="mailto:frontdesk@10xto.com?subject=Hotel%20Guest%20%7C%20Simulator" class="cta-secondary"
                style="margin-top: 1rem; display: inline-block;">Inquire/Book</a>
        </div>

        <!-- Pickleball -->
        <div class="amenity-card">
            <h3 class="amenity-title">Pickleball</h3>
            <p>Fast-paced, highly engaging indoor pickleball play.</p>
            <ul class="amenity-price-list">
                <li><span>Half Hour Booking</span><span>$15</span></li>
                <li><span>1 Hour Booking</span><span>$30</span></li>
            </ul>
            <a href="mailto:frontdesk@10xto.com?subject=Hotel%20Guest%20%7C%20Pickleball" class="cta-secondary"
                style="margin-top: 1rem; display: inline-block;">Inquire/Book</a>
        </div>
    </div>

    <!-- Access & Policy -->
    <div class="policy-box">
        <h3>How to Access 10XTO</h3>
        <ol style="margin: 1.5rem 0 2rem 1.5rem; line-height: 1.6;">
            <li>Enter 10XTO Athletic Club through the 4th Floor of the hotel, using your room key card for access.
            </li>
            <li>When you enter, you will see the Play Centre on your left, and a hallway on your right.</li>
            <li>Follow the hallway on your right to the 10XTO Front Desk, where staff will check you in for your
                activity.</li>
        </ol>

        <h3>Booking Policy</h3>
        <ul style="margin: 1.5rem 0 0 1.5rem; line-height: 1.6;">
            <li>Bookings for courts, classes, and simulators can only be made when a guest is checked in.</li>
            <li>Minimum court bookings are 30 minutes.</li>
            <li>Demo equipment is available upon request and included in the booking.</li>
            <li>Personal Training and Private Lessons must be booked a minimum of 7 days in advance.</li>
            <li>Applicable taxes are not included in the listed fees.</li>
        </ul>
    </div>
</section>

<?php get_footer(); ?>
