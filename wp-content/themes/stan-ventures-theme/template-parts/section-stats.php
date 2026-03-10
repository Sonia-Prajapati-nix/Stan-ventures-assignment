<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_stats;
?>

<section class="sv-section sv-stats">
    <div class="sv-container sv-stats__inner">
        <?php foreach ($stan_stats as $stat) : ?>
            <div class="sv-stat-card" data-animate="fade-up">
                <div class="sv-stat-card__value">
                    <?php echo esc_html($stat['value']); ?>
                </div>
                <div class="sv-stat-card__label">
                    <?php echo esc_html($stat['label']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

