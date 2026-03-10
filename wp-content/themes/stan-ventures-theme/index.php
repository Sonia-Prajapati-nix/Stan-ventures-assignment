<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<section class="sv-generic-page">
    <div class="sv-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('sv-generic-page__article'); ?>>
                    <h1 class="sv-page-title"><?php the_title(); ?></h1>
                    <div class="sv-page-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No content found.', 'stan-ventures'); ?></p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();

