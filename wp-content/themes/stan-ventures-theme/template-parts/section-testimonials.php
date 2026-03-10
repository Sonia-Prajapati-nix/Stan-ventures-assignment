<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_testimonials;
?>

<section class="sv-section sv-testimonials" id="testimonials">
    <div class="sv-container">
        <header class="sv-section__header">
            <p class="sv-eyebrow">Testimonials</p>
            <h2 class="sv-section__title">Teams that trust Stan Ventures.</h2>
        </header>

        <div class="sv-testimonials__grid">
            <?php foreach ($stan_testimonials as $testimonial) : ?>
                <article class="sv-card sv-testimonial-card" data-animate="fade-up">
                    <p class="sv-testimonial-card__quote">
                        <?php echo esc_html($testimonial['quote']); ?>
                    </p>
                    <div class="sv-testimonial-card__footer">
                        <div class="sv-testimonial-card__person">
                            <div class="sv-testimonial-card__avatar">
                                <img
                                    src="<?php echo esc_url(get_template_directory_uri() . '/' . $testimonial['avatar']); ?>"
                                    alt="<?php echo esc_attr($testimonial['name']); ?>"
                                    loading="lazy"
                                />
                            </div>
                            <div>
                                <p class="sv-testimonial-card__name">
                                    <?php echo esc_html($testimonial['name']); ?>
                                </p>
                                <p class="sv-testimonial-card__role">
                                    <?php echo esc_html($testimonial['role']); ?>
                                </p>
                            </div>
                        </div>
                        <div class="sv-testimonial-card__logo">
                            <img
                                src="<?php echo esc_url(get_template_directory_uri() . '/' . $testimonial['companyLogo']); ?>"
                                alt=""
                                loading="lazy"
                            />
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

