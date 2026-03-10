<?php

if (!defined('ABSPATH')) {
    exit;
}

// Theme setup.
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    register_nav_menus([
        'primary' => __('Primary Menu', 'stan-ventures'),
        'footer'  => __('Footer Menu', 'stan-ventures'),
    ]);
});

// Enqueue assets.
add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'stan-ventures-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $theme_version
    );

    wp_enqueue_script(
        'stan-ventures-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $theme_version,
        true
    );
});

// Load shared data for homepage sections.
require_once get_template_directory() . '/inc/data.php';

