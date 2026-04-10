<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

    <header class="page-hero"
        style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/Content/Website_Gallery/10XTO_yoga_studio_skyline_panoramic_view.jpg') center/cover;">
        <div class="container">
            <h1>Contact Us</h1>
            <p style="font-size: 1.2rem;">We look forward to connecting with you.</p>
        </div>
    </header>

    <section class="contact-page">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info-panel">
                    <h3>Get in Touch</h3>

                    <div class="info-block">
                        <h4>Location</h4>
                        <p>107 Princes' Boulevard<br>Toronto, ON M6K 3C3<br>At Hotel X Toronto</p>
                    </div>

                    <div class="info-block">
                        <h4>Phone</h4>
                        <p><a href="tel:647-475-9295">647.475.9295</a></p>
                    </div>

                    <div class="info-block">
                        <h4>Email</h4>
                        <p><a href="mailto:membership@10xto.com">membership@10xto.com</a></p>
                    </div>

                    <div class="info-block">
                        <h4>Hours of Operation</h4>
                        <p>Monday - Friday: 6:00am - 11:00pm<br>Saturday & Sunday: 7:00am - 10:00pm</p>
                    </div>
                </div>

                <!-- General Inquiry Form -->
                <div class="form-panel">
                    <h3>Membership Inquiry</h3>
                    <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8&orgId=00DHp00000DxiST" method="POST" id="generalContactForm">
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
                            <textarea id="00NHp00001VkEDJ" name="00NHp00001VkEDJ" rows="5" wrap="soft"></textarea>
                        </div>
                        <button type="submit" name="submit" class="submit-button">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/about/">About 10XTO</a></li>
                        <li><a href="/membership/">Membership Types</a></li>
                        <li><a href="/facilities/">Facilities</a></li>
                        <li><a href="/programs/">Programs</a></li>
                        <li><a href="/contact/">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Programs</h4>
                    <ul>
                        <li><a href="/programs/">Group Fitness</a></li>
                        <li><a href="/programs/">Personal Training</a></li>
                        <li><a href="/facilities/">Tennis Programs</a></li>
                        <li><a href="/facilities/">Squash Programs</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="/faq/">FAQs</a></li>
                        <li><a href="/contact/">Hotel Guests</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Visit Us</h4>
                    <p style="opacity: 0.8; margin-bottom: 1.5rem; font-size: 0.95rem; line-height: 1.8;">
                        107 Princes' Boulevard<br>
                        Toronto, ON M6K 3C3<br>
                        <a href="tel:647-475-9295"
                            style="color: var(--yellow); text-decoration: none;">647.475.9295</a><br>
                        <a href="mailto:membership@10xto.com"
                            style="color: var(--yellow); text-decoration: none;">membership@10xto.com</a>
                    </p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/10xto" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/10xto" target="_blank" rel="noopener" aria-label="Instagram">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="https://www.twitter.com/10xto_" target="_blank" rel="noopener" aria-label="Twitter">
                            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 10XTO. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms &
                        Conditions</a></p>
            </div>
        </div>
    </footer>
    <script>
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) nav.classList.add('scrolled');
            else nav.classList.remove('scrolled');
        });

        document.getElementById('generalContactForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Thank you for your message. A member of our team will get back to you shortly.');
            this.reset();
        });
    </script>
</body>

</html>