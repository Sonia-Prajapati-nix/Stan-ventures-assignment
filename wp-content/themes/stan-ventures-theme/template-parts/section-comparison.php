<?php
if (!defined('ABSPATH')) {
    exit;
}

global $stan_comparison;

$columns = $stan_comparison['columns'] ?? [];
$rows    = $stan_comparison['rows'] ?? [];
?>

<section class="sv-section sv-comparison" id="comparison">
    <div class="sv-container">
        <header class="sv-section__header">
            <h2 class="sv-section__title">Why Agencies Switch to Us</h2>
        </header>

        <div class="sv-comparison__table" role="table" aria-label="<?php esc_attr_e('SEO partner comparison', 'stan-ventures'); ?>">
            <div class="sv-comparison__row sv-comparison__row--head" role="row">
                <div class="sv-comparison__cell sv-comparison__cell--label" role="columnheader">
                    &nbsp;
                </div>
                <?php foreach ($columns as $index => $columnLabel) : ?>
                    <div
                        class="sv-comparison__cell sv-comparison__cell--col <?php echo $index === 0 ? 'is-highlight' : ''; ?>"
                        role="columnheader"
                    >
                        <?php echo esc_html($columnLabel); ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php foreach ($rows as $row) : ?>
                <div class="sv-comparison__row" role="row">
                    <div class="sv-comparison__cell sv-comparison__cell--label" role="rowheader">
                        <?php echo esc_html($row['label']); ?>
                    </div>
                    <?php foreach ($row['values'] as $index => $value) : ?>
                        <?php $is_yes = strtolower((string) $value) === 'yes'; ?>
                        <div class="sv-comparison__cell sv-comparison__cell--col <?php echo $index === 0 ? 'is-highlight' : ''; ?>" role="cell">
                            <span class="sv-comparison__icon <?php echo $is_yes ? 'is-yes' : 'is-no'; ?>" aria-hidden="true">
                                <?php echo $is_yes ? '✓' : '✕'; ?>
                            </span>
                            <span class="screen-reader-text">
                                <?php echo $is_yes ? esc_html__('Yes', 'stan-ventures') : esc_html__('No', 'stan-ventures'); ?>
                            </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

