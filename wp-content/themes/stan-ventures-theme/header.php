<?php
if (!defined('ABSPATH')) {
    exit;
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sv-site-header">
    <div class="sv-container sv-site-header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="sv-site-header__logo">
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-main.png'); ?>"
                alt="<?php esc_attr_e('Stan Ventures', 'stan-ventures'); ?>"
                class="sv-site-header__logo-img"
            />
        </a>

        <button
            class="sv-header-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="sv-primary-menu"
        >
            <span class="sv-header-toggle__bar"></span>
            <span class="sv-header-toggle__bar"></span>
        </button>

        <nav
            class="sv-site-header__nav"
            id="sv-primary-menu"
            aria-label="<?php esc_attr_e('Primary menu', 'stan-ventures'); ?>"
        >
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'sv-nav-list',
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>

        <div class="sv-site-header__cta">
            <a href="#contact" class="sv-btn sv-btn--accent">Get a Proposal</a>
        </div>
    </div>
</header>

<main class="sv-site-main">

