</main><!-- #primary -->

<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Quick Links</h4>
                <?php
wp_nav_menu(array(
    'theme_location' => 'footer',
    'menu_id' => 'footer-menu',
    'container' => false,
    'fallback_cb' => false,
));
?>
            </div>
            
            <div class="footer-section">
                <h4>Programs</h4>
                <ul>
                    <li><a href="<?php echo esc_url(site_url('/programs')); ?>">Group Fitness</a></li>
                    <li><a href="<?php echo esc_url(site_url('/programs')); ?>">Personal Training</a></li>
                    <li><a href="<?php echo esc_url(site_url('/facilities')); ?>">Tennis Programs</a></li>
                    <li><a href="<?php echo esc_url(site_url('/facilities')); ?>">Squash Programs</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Information</h4>
                <ul>
                    <li><a href="<?php echo esc_url(site_url('/faq')); ?>">FAQs</a></li>
                    <li><a href="<?php echo esc_url(site_url('/contact')); ?>">Contact Us</a></li>
                    <li><a href="<?php echo esc_url(site_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url(site_url('/terms-conditions')); ?>">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Visit Us</h4>
                <p style="opacity: 0.8; margin-bottom: 1.5rem; font-size: 0.95rem; line-height: 1.8;">
                    107 Princes' Boulevard<br>
                    Toronto, ON M6K 3C3<br>
                    <a href="tel:647-475-9295" style="color: var(--yellow); text-decoration: none;">647.475.9295</a><br>
                    <a href="mailto:membership@10xto.com" style="color: var(--yellow); text-decoration: none;">membership@10xto.com</a>
                </p>
                <div class="social-links">
                    <a href="https://www.instagram.com/10xto" target="_blank" rel="noopener" aria-label="Instagram">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> 10XTO. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
