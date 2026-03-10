<?php
/**
 * Template Name: Homepage
 *
 * Custom front-page template that composes the homepage sections.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

get_template_part('template-parts/section', 'hero');
get_template_part('template-parts/section', 'stats');
get_template_part('template-parts/section', 'services');
get_template_part('template-parts/section', 'case-studies');
get_template_part('template-parts/section', 'testimonials');
get_template_part('template-parts/section', 'comparison');

get_footer();

