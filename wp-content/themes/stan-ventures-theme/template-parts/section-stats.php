<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_services, $stan_stats;

$featured_services_row_one = array_slice($stan_services, 0, 3);
$featured_services_row_two = array_slice($stan_services, 3, 3);
?>

<section class="sv-section sv-stats sv-stats--services">
    <div class="sv-container">
        <header class="sv-stats__header">
            <div>
                <h2 class="sv-stats__title">
                    Our SEO Services That
                    <span class="sv-stats__title-highlight">Drive Scalable Growth</span>
                </h2>
                <p class="sv-stats__subtitle">
                    Flexible, white-label, and built for long-term results.
                </p>
            </div>
            <div class="sv-stats__header-cta">
                <a href="#services" class="sv-btn sv-btn--ghost sv-btn--sm">
                    View Full Catalog
                </a>
            </div>
        </header>

        <div class="sv-stats__cards sv-stats__cards--primary">
            <?php foreach ($featured_services_row_one as $service) : ?>
                <article class="sv-stats-card" data-animate="fade-up">
                    <div class="sv-stats-card__icon">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/' . $service['icon']); ?>"
                            alt=""
                            loading="lazy"
                        />
                    </div>
                    <h3 class="sv-stats-card__title">
                        <?php echo esc_html($service['title']); ?>
                    </h3>
                    <p class="sv-stats-card__description">
                        <?php echo esc_html($service['description']); ?>
                    </p>
                    <button class="sv-stats-card__link" type="button">
                        Learn more
                    </button>
                </article>
            <?php endforeach; ?>
        </div>

        <?php if (!empty($featured_services_row_two)) : ?>
            <div class="sv-stats__cards sv-stats__cards--secondary">
                <?php foreach ($featured_services_row_two as $service) : ?>
                    <article class="sv-stats-card" data-animate="fade-up">
                        <div class="sv-stats-card__icon">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/' . $service['icon']); ?>"
                                alt=""
                                loading="lazy"
                            />
                        </div>
                        <h3 class="sv-stats-card__title">
                            <?php echo esc_html($service['title']); ?>
                        </h3>
                        <p class="sv-stats-card__description">
                            <?php echo esc_html($service['description']); ?>
                        </p>
                        <button class="sv-stats-card__link" type="button">
                            Learn more
                        </button>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($stan_stats)) : ?>
            <div class="sv-stats-metrics">
                <?php foreach ($stan_stats as $stat) : ?>
                    <div class="sv-stats-metric" data-animate="fade-up">
                        <div class="sv-stats-metric__value">
                            <?php echo esc_html($stat['value']); ?>
                        </div>
                        <div class="sv-stats-metric__label">
                            <?php echo esc_html($stat['label']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

