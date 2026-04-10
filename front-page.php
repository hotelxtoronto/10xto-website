<?php get_header(); ?>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-background"></div>
        <div class="hero-content">
            <div class="hero-badge">Private Members Club</div>
            <h1>An Inspired<br>Athletic Club</h1>
            <p class="hero-subtitle">A Next Generation Lifestyle Athletic Club in the Heart of the Exhibition Grounds.
            </p>
            <div class="hero-ctas">
                <a href="#apply" class="cta-primary">Become a Member</a>
                <a href="#contact" class="cta-secondary">Schedule a Tour</a>
            </div>
        </div>
        <div class="scroll-indicator" onclick="document.querySelector('#about').scrollIntoView({behavior: 'smooth'})">
            <svg fill="none" viewBox="0 0 24 24" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Private Club Notice -->
    <div class="private-notice">
        <p><strong>10XTO is a private members club.</strong> A membership is required to access all club facilities,
            including tennis and squash courts. If you are a guest at Hotel X Toronto and would like to inquire about
            amenity access, <a href="#contact">click here</a>.</p>
    </div>

    <!-- Value Propositions -->
    <section class="value-props" id="about">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">What Sets Us Apart</div>
                <h2>Deliberately Designed.<br>Unparalleled Experience.</h2>
                <p>An accomplished team engineering an incomparable member experience in a stunning, deliberately
                    designed space.</p>
            </div>
            <div class="props-grid">
                <div class="prop-card">
                    <div class="prop-icon">10X</div>
                    <h3>Exclusive Access</h3>
                    <p>10XTO is a private members club. A membership is required to access all club facilities, ensuring
                        an uncrowded and premium experience.</p>
                </div>
                <div class="prop-card">
                    <div class="prop-icon">★</div>
                    <h3>Premium Amenities</h3>
                    <p>Four DecoTurf courts, glass-backed squash, dedicated strength zones, and a stunning 6,500 sq. ft.
                        fitness centre with skyline views.</p>
                </div>
                <div class="prop-card">
                    <div class="prop-icon">♦</div>
                    <h3>Inspired Community</h3>
                    <p>Built with inspiration and energy front of mind. Encased in glass, our open layout fosters a
                        thriving community among Members and Staff alike.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities" id="facilities">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">World-Class Facilities</div>
                <h2>Space. Light. Performance.</h2>
                <p>Open, airy environments with abundant natural light and cutting-edge equipment designed to inspire
                    your best performance.</p>
            </div>
            <div class="facilities-grid">
                <a href="<?php echo site_url('/racquets'); ?>" class="facility-card" style="text-decoration: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Tennis Courts/Courts in Play-1.jpg" alt="Tennis Courts"
                        class="facility-image">
                    <div class="facility-overlay"></div>
                    <div class="facility-content">
                        <h3>Racquets</h3>
                        <p style="color: var(--white);">4 stunning indoor tennis courts with floor-to-ceiling windows and breathtaking city views,
                            plus glass-backed squash courts</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Racquets &rarr;</span>
                    </div>
                </a>
                <a href="<?php echo site_url('/fitness'); ?>" class="facility-card" style="text-decoration: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/10XTO-Fitness Centre.jpg" alt="Fitness Center"
                        class="facility-image">
                    <div class="facility-overlay"></div>
                    <div class="facility-content">
                        <h3>Athletics</h3>
                        <p style="color: var(--white);">State-of-the-art fitness center, dedicated strength zone, and premium equipment in open,
                            naturally-lit spaces</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Athletics &rarr;</span>
                    </div>
                </a>
                <a href="<?php echo site_url('/wellness'); ?>" class="facility-card" style="text-decoration: none;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast Zone/Architectural/Contrast Zone-10.jpg" alt="Wellness"
                        class="facility-image">
                    <div class="facility-overlay"></div>
                    <div class="facility-content">
                        <h3>Wellness</h3>
                        <p style="color: var(--white);">Signature Contrast Zone with hot/cold therapy, hot yoga studio with skyline views, and
                            comprehensive recovery amenities</p>
                        <span style="color: var(--yellow); font-weight: 600; margin-top: 1rem; display: inline-block;">Explore Wellness &rarr;</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Contrast Zone Feature -->
    <section class="contrast-feature">
        <div class="container">
            <div class="contrast-content">
                <div class="contrast-text">
                    <div class="section-badge" style="background: var(--yellow); color: var(--black);">Newly Open</div>
                    <h2>Contrast Zone:<br><span class="highlight">Heat. Cold. Light.</span></h2>
                    <p>A wellness space designed for luxury rejuvenation through contrast therapy. Experience the
                        transformative power of hot and cold immersion—included with your membership at no additional
                        cost.</p>
                    <p>This signature amenity sets 10XTO apart, offering therapeutic benefits rarely found in
                        traditional athletic clubs.</p>
                    <a href="#apply" class="cta-primary">Explore Membership</a>
                </div>
                <div class="contrast-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Ambience/Contrast Zone/Architectural/Contrast Zone-5.jpg"
                        alt="Contrast Zone">
                    <div class="feature-badge">Included</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Group Fitness -->
    <section class="group-fitness" id="programs">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Group Fitness</div>
                <h2>Over 60+ Weekly Classes</h2>
                <p>From Hot Yoga to Pilates Reformer, Studio X athletic conditioning to our dedicated Strength Zone—find
                    classes that fit your goals.</p>
            </div>
            <div class="fitness-showcase">
                <div class="fitness-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Content/Expertise/Group Fitness/IMG_4452-Edit.jpg" alt="Group Fitness">
                </div>
                <div class="fitness-classes">
                    <div class="class-item">
                        <h4>Hot Yoga Flow</h4>
                        <p>Heated studio with breathtaking skyline views, perfect for building strength and flexibility
                            while finding your zen.</p>
                    </div>
                    <div class="class-item">
                        <h4>Athletic Conditioning</h4>
                        <p>High-intensity training designed to elevate your performance, build endurance, and push your
                            limits.</p>
                    </div>
                    <div class="class-item">
                        <h4>Reformer Pilates</h4>
                        <p>Instructor-led classes focused on core stability, optimal movement patterns, and total-body
                            strength.</p>
                    </div>
                    <div class="class-item">
                        <h4>Guided Breathwork</h4>
                        <p>Mindful practices to enhance recovery, reduce stress, and improve overall wellness and mental
                            clarity.</p>
                    </div>
                    <div class="class-item">
                        <h4>Youth Movement</h4>
                        <p>Age-appropriate classes designed to build athleticism, coordination, and confidence in young
                            members.</p>
                    </div>
                    <a href="#contact" class="cta-primary" style="margin-top: 1rem;">View Full Schedule</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">7</div>
                    <div class="stat-label">Glass Back Squash Courts</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">60+</div>
                    <div class="stat-label">Weekly Classes</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4</div>
                    <div class="stat-label">Indoor Tennis Courts</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">1</div>
                    <div class="stat-label">Inspired Community</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Membership Section -->
    <section class="membership" id="membership">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Membership</div>
                <h2>Join 10XTO</h2>
                <p>Experience Toronto's premier private athletic club designed for those who demand excellence</p>
            </div>

            <div class="positioning-box">
                <h3>An Inspired Athletic Club.</h3>
                <p>10XTO is a private members club. A membership is <span class="highlight">required</span> to access
                    all club facilities, including the tennis and squash courts.</p>
                <p>Our initiation fees and monthly dues reflect the caliber of our amenities, the exclusivity of our
                    community, and the unparalleled service you will experience every visit.</p>
                <p>This is a deliberate choice—we believe in fostering an inspiring and encouraging atmosphere in which
                    Members thrive off each others' energy.</p>
            </div>

            <div class="membership-cards" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));">
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
                            <li>Available as Single, Couple, or Family</li>
                        </ul>
                        <a href="<?php echo site_url('/membership/#apply'); ?>" class="card-cta">Apply Now</a>
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
                            <li>Available as Single, Couple, or Family</li>
                        </ul>
                        <a href="<?php echo site_url('/membership/#apply'); ?>" class="card-cta">Join Waitlist</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact/Application Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="contact-container">
                <div class="contact-info">
                    <div class="section-badge" style="background: var(--yellow); color: var(--black);">Get in Touch
                    </div>
                    <h2>Visit Us Today</h2>
                    <p>Experience 10XTO firsthand. Schedule a personal tour and discover what sets Toronto's premier
                        private athletic club apart.</p>

                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div class="contact-item-content">
                                <h4>Location</h4>
                                <p>107 Princes' Boulevard<br>Toronto, ON M6K 3C3<br>At Hotel X Toronto</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">📞</div>
                            <div class="contact-item-content">
                                <h4>Phone</h4>
                                <p><a href="tel:647-475-9295">647.475.9295</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">✉️</div>
                            <div class="contact-item-content">
                                <h4>Email</h4>
                                <p><a href="mailto:membership@10xto.com">membership@10xto.com</a></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">🕐</div>
                            <div class="contact-item-content">
                                <h4>Hours</h4>
                                <p>Monday - Friday: 6:00am - 11:00pm<br>Saturday & Sunday: 7:00am - 10:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-container" id="apply">
                    <div class="form-header">
                        <h3>Apply for Membership</h3>
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
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>