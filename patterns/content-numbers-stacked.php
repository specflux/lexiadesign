<?php
/**
 * Title: Content Numbers Stacked
 * Slug: lexiadesign/content-numbers-stacked
 * Description: Display impressive numbers with descriptions in a 2x2 grid with brand accent borders
 * Categories: lexiadesign/content
 * Keywords: numbers, stats, text, values, count
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: content
 * @ai-color-scheme: brand
 * @ai-layout: grid-2col, full-width
 * @ai-suggested-position: middle
 * @ai-slots: stat_1_value, stat_1_description, stat_2_value, stat_2_description, stat_3_value, stat_3_description, stat_4_value, stat_4_description
 * @ai-repeater: stats, min:2, max:4
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-900","textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-base-900-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|brand","width":"3px"},"radius":"8px"}},"backgroundColor":"base-800","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-800-background-color has-background" style="border-radius:8px;border-left-color:var(--wp--preset--color--brand);border-left-width:3px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"base-0","fontSize":"xx-large"} -->
<p class="has-base-0-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '12+ Years', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"small"} -->
<p class="has-base-400-color has-text-color has-small-font-size"><?php esc_html_e( 'Building digital products that drive measurable business growth', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|brand","width":"3px"},"radius":"8px"}},"backgroundColor":"base-800","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-800-background-color has-background" style="border-radius:8px;border-left-color:var(--wp--preset--color--brand);border-left-width:3px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"base-0","fontSize":"xx-large"} -->
<p class="has-base-0-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '340+ Clients', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"small"} -->
<p class="has-base-400-color has-text-color has-small-font-size"><?php esc_html_e( 'From startups to enterprises, we deliver solutions that scale with your ambitions', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|brand","width":"3px"},"radius":"8px"}},"backgroundColor":"base-800","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-800-background-color has-background" style="border-radius:8px;border-left-color:var(--wp--preset--color--brand);border-left-width:3px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"base-0","fontSize":"xx-large"} -->
<p class="has-base-0-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '98% Retention', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"small"} -->
<p class="has-base-400-color has-text-color has-small-font-size"><?php esc_html_e( 'Our clients stay because the results speak for themselves, year after year', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|brand","width":"3px"},"radius":"8px"}},"backgroundColor":"base-800","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-800-background-color has-background" style="border-radius:8px;border-left-color:var(--wp--preset--color--brand);border-left-width:3px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.02em"}},"textColor":"base-0","fontSize":"xx-large"} -->
<p class="has-base-0-color has-text-color has-xx-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:-0.02em"><?php esc_html_e( '$4.2M Generated', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"small"} -->
<p class="has-base-400-color has-text-color has-small-font-size"><?php esc_html_e( 'In trackable revenue for our clients through conversion-optimized digital experiences', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
