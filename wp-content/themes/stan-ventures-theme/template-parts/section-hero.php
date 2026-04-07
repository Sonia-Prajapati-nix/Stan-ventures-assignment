<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_trust_logos;
?>

<section class="sv-section sv-hero">
    <div class="sv-container sv-hero__inner">
        <div class="sv-hero__content">
            <div class="sv-hero__badge">
                <span class="sv-hero__badge-dot"></span>
                <span class="sv-hero__badge-text">Accepting New Agency Partners for Q1</span>
            </div>
            <h1 class="sv-hero__title">
                SEO that scales
                <span class="sv-hero__title-highlight">on autopilot.</span>
            </h1>
            <p class="sv-hero__subtitle">
                We help agencies and brands grow faster with scalable SEO, high‑quality
                link building, and fully managed content strategies — delivered with
                transparency, speed, and proven results.
            </p>
            <div class="sv-hero__actions">
                <a href="#contact" class="sv-btn sv-btn--primary sv-btn--lg">
                    Start Your Growth Engine
                </a>
                <button type="button" class="sv-btn sv-btn--ghost sv-btn--lg">
                    View Our Process
                </button>
            </div>
        </div>

        <div class="sv-hero__visual">
            <div class="sv-hero-card">
                <div class="sv-hero-card__shell"></div>
                <div class="sv-hero-dashboard" role="img" aria-label="<?php esc_attr_e('SEO analytics dashboard preview', 'stan-ventures'); ?>">
                    <div class="sv-hero-dashboard__panel">
                        <div class="sv-hero-dashboard__topbar">
                            <span class="sv-hero-dashboard__pill"></span>
                            <span class="sv-hero-dashboard__pill sv-hero-dashboard__pill--short"></span>
                            <span class="sv-hero-dashboard__bubble"></span>
                            <span class="sv-hero-dashboard__bubble"></span>
                        </div>
                        <div class="sv-hero-dashboard__chart">
                            <span style="--bar-h: 42px"></span>
                            <span style="--bar-h: 70px"></span>
                            <span style="--bar-h: 52px"></span>
                            <span style="--bar-h: 92px"></span>
                            <span style="--bar-h: 74px"></span>
                            <span style="--bar-h: 104px"></span>
                            <span style="--bar-h: 80px"></span>
                            <span style="--bar-h: 112px"></span>
                            <span style="--bar-h: 72px"></span>
                            <span style="--bar-h: 98px"></span>
                        </div>
                        <div class="sv-hero-dashboard__footer">
                            <span class="sv-hero-dashboard__pill sv-hero-dashboard__pill--wide"></span>
                            <!-- <span class="sv-hero-dashboard__trend">&#8599; +124%</span> -->
                        </div>
                    </div>

                    <div class="sv-hero-dashboard__stats">
                        <div class="sv-hero-stat-card">
                            <span class="sv-hero-stat-card__icon"></span>
                            <p class="sv-hero-stat-card__value">2,543</p>
                            <p class="sv-hero-stat-card__label">Keywords Ranked</p>
                        </div>
                        <div class="sv-hero-stat-card">
                            <span class="sv-hero-stat-card__icon"></span>
                            <p class="sv-hero-stat-card__value">485%</p>
                            <p class="sv-hero-stat-card__label">Traffic Growth</p>
                        </div>
                    </div>

                    <div class="sv-hero-floating-card">
                        <span class="sv-hero-floating-card__icon"></span>
                        <div>
                            <p class="sv-hero-floating-card__title">Organic Traffic</p>
                            <p class="sv-hero-floating-card__value">+12,405</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sv-hero__trusted" aria-label="<?php esc_attr_e('Trusted by brands', 'stan-ventures'); ?>">
            <p class="sv-hero__trusted-label">Trusted by Industry‑Leading Agencies &amp; Fast‑Growing Brands</p>
            <div class="sv-hero__trusted-logos">
                <?php foreach (($stan_trust_logos ?? []) as $logo) : ?>
                    <div class="sv-hero__trusted-logo" data-animate="fade-up">
                        <img
                            src="<?php echo esc_url(get_template_directory_uri() . '/' . $logo['src']); ?>"
                            alt="<?php echo esc_attr($logo['label']); ?>"
                            loading="lazy"
                        />
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

