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
            <p class="sv-eyebrow">Why Stan Ventures</p>
            <h2 class="sv-section__title">How we compare to in‑house and generic agencies.</h2>
        </header>

        <div class="sv-comparison__table" role="table" aria-label="<?php esc_attr_e('SEO partner comparison', 'stan-ventures'); ?>">
            <div class="sv-comparison__row sv-comparison__row--head" role="row">
                <div class="sv-comparison__cell sv-comparison__cell--label" role="columnheader">
                    &nbsp;
                </div>
                <?php foreach ($columns as $index => $columnLabel) : ?>
                    <div
                        class="sv-comparison__cell sv-comparison__cell--col <?php echo $index === (count($columns) - 1) ? 'is-highlight' : ''; ?>"
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
                        <?php
                        $classes = ['sv-comparison__cell', 'sv-comparison__cell--col'];
                        if (isset($row['highlightIndex']) && $index === $row['highlightIndex']) {
                            $classes[] = 'is-highlight';
                        }
                        ?>
                        <div class="<?php echo esc_attr(implode(' ', $classes)); ?>" role="cell">
                            <?php echo esc_html($value); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

