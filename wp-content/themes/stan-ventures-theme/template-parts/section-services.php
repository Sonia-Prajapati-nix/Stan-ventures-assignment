<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_process_steps;
?>

<section class="sv-section sv-services" id="services">
    <div class="sv-container">
        <header class="sv-services__header">
            <h2 class="sv-services__title">
                <span class="sv-services__title-line">Simple Process.</span>
                <span class="sv-services__title-line">Powerful Results.</span>
            </h2>
        </header>

        <div class="sv-services__process">
            <?php foreach ($stan_process_steps as $step) : ?>
                <article class="sv-process-step" data-animate="fade-up">
                    <div class="sv-process-step__number"><?php echo esc_html($step['number']); ?></div>
                    <div class="sv-process-step__line"></div>
                    <h3 class="sv-process-step__title"><?php echo esc_html($step['title']); ?></h3>
                    <p class="sv-process-step__description"><?php echo esc_html($step['description']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
