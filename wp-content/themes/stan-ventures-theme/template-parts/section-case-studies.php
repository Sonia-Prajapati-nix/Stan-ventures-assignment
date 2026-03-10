<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_case_studies;
?>

<section class="sv-section sv-case-studies" id="case-studies">
    <div class="sv-container">
        <header class="sv-section__header sv-section__header--row">
            <div>
                <p class="sv-eyebrow">Case studies</p>
                <h2 class="sv-section__title">Proven results across SaaS, e‑commerce, and marketplaces.</h2>
            </div>
            <div class="sv-section__header-cta">
                <button class="sv-btn sv-btn--ghost" type="button">
                    View all case studies
                </button>
            </div>
        </header>

        <div class="sv-case-studies__grid">
            <?php foreach ($stan_case_studies as $case) : ?>
                <article class="sv-card sv-case-card" data-animate="fade-up">
                    <div class="sv-case-card__media">
                        <span class="sv-badge"><?php echo esc_html($case['badge']); ?></span>
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/' . $case['image']); ?>"
                            alt=""
                            loading="lazy"
                        />
                    </div>
                    <div class="sv-case-card__body">
                        <p class="sv-case-card__client">
                            <?php echo esc_html($case['client']); ?>
                        </p>
                        <h3 class="sv-case-card__title">
                            <?php echo esc_html($case['title']); ?>
                        </h3>
                        <p class="sv-case-card__description">
                            <?php echo esc_html($case['description']); ?>
                        </p>
                        <div class="sv-case-card__metric">
                            <span class="sv-case-card__metric-label">
                                <?php echo esc_html($case['stat_label']); ?>
                            </span>
                            <span class="sv-case-card__metric-value">
                                <?php echo esc_html($case['stat_value']); ?>
                            </span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

