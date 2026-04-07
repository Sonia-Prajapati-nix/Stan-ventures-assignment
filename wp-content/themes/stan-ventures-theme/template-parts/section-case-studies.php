<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_case_studies;
?>

<section class="sv-section sv-case-studies" id="case-studies">
    <div class="sv-container">
        <header class="sv-section__header">
            <h2 class="sv-section__title">Proven Results</h2>
            <p class="sv-eyebrow">Data-backed case studies from our partner agencies.</p>
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
                        <div class="sv-case-card__copy">
                            <p class="sv-case-card__client">
                                <?php echo esc_html($case['client']); ?>
                            </p>
                            <span class="sv-case-card__metric-value">
                                <?php echo esc_html($case['stat_value']); ?>
                            </span>
                           
                            <!-- <p class="sv-case-card__description">
                                <?php echo esc_html($case['description']); ?>
                            </p> -->
                        </div>
                        <div class="sv-case-card__metric">
                            <!-- <span class="sv-case-card__metric-value">
                                <?php echo esc_html($case['stat_value']); ?>
                            </span> -->
                            
                            <h3 class="sv-case-card__title">
                                <?php echo esc_html($case['title']); ?>
                            </h3>
                            <span class="sv-case-card__metric-label">
                                <?php echo esc_html($case['stat_label']); ?>
                            </span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

