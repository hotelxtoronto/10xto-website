<?php
/**
 * Template Name: Membership Page
 */
get_header(); ?>

    <header class="page-hero"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.6) 100%), url('https://static.wixstatic.com/media/dacce5_6de86b5573e04fe1b791f3538a932121~mv2.jpg/v1/fill/w_1920,h_1080/image.jpg') center/cover;">
        <div class="container">
            <h1>Membership</h1>
            <p style="font-size: 1.2rem;">Exclusive access. Premium facilities. Elevated experience.</p>
        </div>
    </header>

    <!-- Brought in from original single page format -->
    <section class="membership" id="tiers" style="padding-top: 4rem;">
        <div class="container">
            <div class="positioning-box">
                <h3>An Inspired Athletic Club.</h3>
                <p>10XTO is a private members club. A membership is <span class="highlight">required</span> to access
                    all club facilities, including the tennis and squash courts.</p>
                <p>Our initiation fees and monthly dues reflect the caliber of our amenities, the exclusivity of our
                    community, and the unparalleled service you will experience every visit.</p>
            </div>

            <div class="membership-cards">
                <!-- Gold Membership -->
                <div class="membership-card">
                    <div class="card-header">
                        <h3>Gold Membership</h3>
                        <p>Full Club Access</p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Access to 6,500 sq. ft. Fitness Centre</li>
                            <li>High-Performance Strength Zone</li>
                            <li>7 Glass Back Squash Courts</li>
                            <li>Unlimited Group Fitness Classes</li>
                            <li>Access to Hotel X Rooftop Pool</li>
                            <li>Contrast Zone access</li>
                            <li>Complimentary Underground Parking</li>
                        </ul>
                        <a href="#apply" class="card-cta">Apply Now</a>
                    </div>
                </div>

                <!-- Platinum Membership (Featured) -->
                <div class="membership-card featured">
                    <div class="card-header">
                        <div class="featured-badge" style="background-color: var(--black); color: var(--white);">
                            Waitlisted</div>
                        <h3>Platinum Membership</h3>
                        <p>Includes Tennis Access</p>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><strong>All Gold Membership Benefits</strong></li>
                            <li>Access to 4 Indoor DecoTurf Tennis Courts</li>
                            <li>7-Day Advance Court Booking Privileges</li>
                            <li>Access to Tennis Programs & Clinics</li>
                            <li>Access to Private Tennis Lessons</li>
                            <li>Priority Event Registration</li>
                        </ul>
                        <a href="#apply" class="card-cta">Join Waitlist</a>
                    </div>
                </div>
            </div>

            <div class="section-header" style="margin-top: 6rem; margin-bottom: 3rem; text-align: center;">
                <div class="section-badge" style="background: var(--yellow); color: var(--black); margin: 0 auto 1rem;">Unparalleled Amenities</div>
                <h2>Member Benefits</h2>
                <p>A 10XTO membership is a passport to an elevated lifestyle, providing access to exclusive perks throughout the Hotel X property.</p>
            </div>
            
            <div class="feature-highlights"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                
                <!-- Room Rates Card -->
                <div class="amenity-card" style="border-radius: var(--radius-lg); overflow: hidden; background: var(--gray-light);">
                    <div class="mini-carousel" style="width: 100%; height: 250px;">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Rooms/TORDH-CRNK.jpg" alt="Hotel X Toronto Luxury Suite" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Rooms/TORDH-PENT.jpg" alt="Hotel X Toronto Luxury Suite" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Rooms/TORDH-PENT-Bi-Level View.jpg" alt="Hotel X Toronto Luxury Suite" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Rooms/TORDH-PRES-Bedroom 04.jpg" alt="Hotel X Toronto Luxury Suite" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                    <div style="padding: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Preferential Room Rates</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">Access member-exclusive pricing and priority booking on luxury accommodations, ensuring your stay at Hotel X Toronto is always exceptional.</p>
                    </div>
                </div>

                <!-- Dining Card -->
                <div class="amenity-card" style="border-radius: var(--radius-lg); overflow: hidden; background: var(--gray-light);">
                    <div class="mini-carousel" style="width: 100%; height: 250px;">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Restaurants/TORDH-Valerie-1.jpg" alt="Valerie Restaurant" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Restaurants/TORDH-Valerie-6.jpg" alt="Valerie Restaurant" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Restaurants/TORDH - Roses_Seating 1.jpg" alt="Roses Restaurant" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Restaurants/TORDH - Crossiant.jpg" alt="Cafe X" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                    <div style="padding: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.25rem;">Exclusive Dining Privileges</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">Enjoy dedicated discounts and priority reservations at Hotel X Toronto's award-winning restaurants and premium cocktail lounges.</p>
                    </div>
                </div>

                <!-- Rooftop Pool Card -->
                <div class="amenity-card" style="border-radius: var(--radius-lg); overflow: hidden; background: var(--gray-light);">
                    <div class="mini-carousel" style="width: 100%; height: 250px;">
                        <div class="mini-carousel-track">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Amenities/Pool.jpg" alt="Hotel X Toronto Rooftop Pool" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Amenities/Year-Round Heated Rooftop Pool 2.jpg" alt="Hotel X Toronto Rooftop Pool" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Hotel X/Amenities/Year-Round Heated Rooftop Pool with Chairs.jpg" alt="Hotel X Toronto Rooftop Pool" class="lightbox-trigger" style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <button class="mc-btn prev" aria-label="Previous image"><i class="fas fa-chevron-left"></i></button>
                        <button class="mc-btn next" aria-label="Next image"><i class="fas fa-chevron-right"></i></button>
                        <div class="mc-dots"></div>
                    </div>
                    <div style="padding: 1.5rem;">
                        <h4 style="margin-bottom: 0.5rem; font-size: 1.25rem;">The Rooftop Pool</h4>
                        <p style="color: #666; font-size: 0.95rem; line-height: 1.5;">Experience year-round access to the iconic three-story rooftop pool and terrace, featuring sweeping panoramic views of the city skyline.</p>
                    </div>
                </div>
            </div>

            <div class="positioning-box"
                style="margin-top: 4rem; background: var(--gray-light); color: var(--black); border-left: none; text-align: center;">
                <h3>Structuring Your Membership</h3>
                <p>Both our Gold and Platinum memberships can be customized to fit your dynamic lifestyle. During your
                    application process, you can select whether you are applying as a <strong>Single</strong>, adding a
                    partner as a <strong>Couple</strong>, or including youth access with a <strong>Family</strong>
                    add-on.</p>
            </div>
        </div>
        </div>
    </section>

    <!-- Application Form -->
    <section class="contact" id="apply">
        <div class="container">
            <div class="form-container" style="max-width: 800px; margin: 0 auto;">
                <div class="form-header">
                    <h3>Membership Inquiry</h3>
                    <p>Complete the form below and our team will contact you within 24 hours.</p>
                </div>
                <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DHp00000DxiST" method="POST" id="membershipForm">
                    <input type="hidden" name="oid" value="00DHp00000DxiST">
                    <input type="hidden" name="retURL" value="https://www.10xto.com/thankyoupage">
                    <input type="hidden" name="Campaign_Source__c" value="General Membership Request Form">
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" maxlength="40" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" maxlength="80" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" maxlength="80" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" maxlength="40" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="00NHp00001VkA8m">Activities of Interest *</label>
                            <select id="00NHp00001VkA8m" name="00NHp00001VkA8m" multiple="multiple" style="height: 110px;" required>
                                <option value="Fitness">Fitness</option>
                                <option value="Squash">Squash</option>
                                <option value="Tennis">Tennis</option>
                                <option value="All of the Above">All of the Above</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="00NHp00001VkEDE">Source *</label>
                            <select id="00NHp00001VkEDE" name="00NHp00001VkEDE" required>
                                <option value="">--None--</option>
                                <option value="Instagram">Instagram</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Online Search">Online Search</option>
                                <option value="Spotify">Spotify</option>
                                <option value="Word of Mouth">Word of Mouth</option>
                                <option value="Referred by Current Member">Referred by Current Member</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group full-width" style="margin-bottom: 1.5rem;">
                        <label for="00NHp00001VkEDJ">Message</label>
                        <textarea id="00NHp00001VkEDJ" name="00NHp00001VkEDJ" rows="4" wrap="soft"></textarea>
                    </div>
                    <button type="submit" name="submit" class="submit-button">Inquire About Membership</button>
                    <p class="form-note">By submitting this form, you agree to be contacted by 10XTO regarding your
                        membership inquiry.</p>
                </form>
            </div>
        </div>
    </section>

<?php get_footer(); ?>