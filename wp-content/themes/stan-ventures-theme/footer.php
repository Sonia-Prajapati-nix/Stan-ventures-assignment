<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<footer class="sv-site-footer" id="contact">
    <div class="sv-container sv-site-footer__inner">
        <div class="sv-site-footer__brand">
            <div class="sv-site-footer__logo">
                <span class="sv-logo-mark">SV</span>
                <span class="sv-logo-text">Stan Ventures</span>
            </div>
            <p class="sv-site-footer__tagline">
                SEO partners for teams that care about sustainable, compounding growth.
            </p>
        </div>

        <div class="sv-site-footer__newsletter">
            <h3 class="sv-site-footer__heading">Stay ahead on organic growth</h3>
            <form class="sv-footer-form" novalidate>
                <label for="sv-footer-email" class="sv-footer-form__label">
                    Email address
                </label>
                <div class="sv-footer-form__controls">
                    <input
                        id="sv-footer-email"
                        name="email"
                        type="email"
                        class="sv-input"
                        placeholder="you@company.com"
                        required
                    />
                    <button type="submit" class="sv-btn sv-btn--secondary">
                        Subscribe
                    </button>
                </div>
                <p class="sv-footer-form__error" aria-live="polite"></p>
            </form>
        </div>

        <div class="sv-site-footer__nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'sv-footer-nav',
                'fallback_cb'    => false,
            ]);
            ?>
        </div>
    </div>

    <div class="sv-site-footer__bottom">
        <div class="sv-container sv-site-footer__bottom-inner">
            <p class="sv-site-footer__copyright">
                &copy; <?php echo esc_html(date('Y')); ?> Stan Ventures. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

