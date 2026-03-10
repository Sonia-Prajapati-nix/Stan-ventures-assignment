<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_services;
?>

<section class="sv-section sv-services" id="services">
    <div class="sv-container">
        <header class="sv-section__header">
            <p class="sv-eyebrow">Services</p>
            <h2 class="sv-section__title">Everything you need to scale SEO, end‑to‑end.</h2>
            <p class="sv-section__subtitle">
                From strategy to execution, we partner with your in‑house team to ship SEO work that moves the right numbers.
            </p>
        </header>

        <div class="sv-services__grid">
            <?php foreach ($stan_services as $service) : ?>
                <article class="sv-card sv-service-card" data-animate="fade-up">
                    <div class="sv-service-card__icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/' . $service['icon']); ?>"
                             alt=""
                             loading="lazy" />
                    </div>
                    <h3 class="sv-service-card__title">
                        <?php echo esc_html($service['title']); ?>
                    </h3>
                    <p class="sv-service-card__description">
                        <?php echo esc_html($service['description']); ?>
                    </p>
                    <button class="sv-service-card__link" type="button">
                        Learn more
                    </button>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

