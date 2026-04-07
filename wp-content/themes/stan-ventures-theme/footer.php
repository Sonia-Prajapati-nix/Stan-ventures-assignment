<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
</main>

<footer class="sv-site-footer" id="contact">
    <div class="sv-container sv-site-footer__inner">
        <div class="sv-site-footer__newsletter">
            <h2 class="sv-site-footer__heading">Ready to scale?</h2>
            <p class="sv-site-footer__tagline">
                Join 4,500+ agencies using Stan Ventures to deliver premium SEO
                results without the overhead.
            </p>
            <form class="sv-footer-form" novalidate>
                <div class="sv-footer-form__controls">
                    <input
                        id="sv-footer-email"
                        name="email"
                        type="email"
                        class="sv-input"
                        placeholder="Enter your work email"
                        required
                    />
                    <button type="submit" class="sv-btn sv-btn--footer">
                        Get Started
                    </button>
                </div>
                <p class="sv-site-footer__microcopy">Free strategy call included. No credit card required.</p>
                <p class="sv-footer-form__error" aria-live="polite"></p>
            </form>
        </div>
    </div>

    <div class="sv-site-footer__bottom">
        <div class="sv-container sv-site-footer__bottom-inner">
            <a class="sv-site-footer__logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Stan Ventures home">
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-main.png'); ?>"
                alt="<?php esc_attr_e('Stan Ventures', 'stan-ventures'); ?>"
                class="sv-site-header__logo-img"
            />
            </a>
            <nav class="sv-site-footer__nav" aria-label="Footer navigation">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'sv-footer-nav',
                    'fallback_cb'    => false,
                ]);
                ?>
            </nav>
            <p class="sv-site-footer__copyright">
                Copyright &copy; <?php echo esc_html(date('Y')); ?> Stan Ventures
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

