<?php
/**
 * Title: Services Grid
 * Slug: lexiadesign/content-services-grid
 * Description: Three service cards with icons, descriptions, and individual CTAs
 * Categories: lexiadesign/content, lexiadesign/features
 * Keywords: services, cards, grid, features, offerings
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: features
 * @ai-color-scheme: light
 * @ai-layout: grid-3col, full-width
 * @ai-suggested-position: middle
 * @ai-slots: heading, subheading, service_1_title, service_1_description, service_2_title, service_2_description, service_3_title, service_3_description
 * @ai-repeater: services, min:2, max:3
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"textColor":"brand","fontSize":"x-small"} -->
<p class="has-text-align-center has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'What We Do', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Services built around your goals', 'lexiadesign' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--medium)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px","width":"1px","color":"var:preset|color|base-200"}},"backgroundColor":"base-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-base-0-background-color has-background" style="border-color:var(--wp--preset--color--base-200);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}},"textColor":"brand"} -->
<p class="has-brand-color has-text-color" style="font-size:2.5rem">&#9672;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Web Design & Development', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-600","fontSize":"small"} -->
<p class="has-base-600-color has-text-color has-small-font-size"><?php esc_html_e( 'Custom websites that look great, load fast, and convert visitors into customers. Built on modern platforms with your growth in mind.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default"><a href="#"><?php esc_html_e( 'Learn more →', 'lexiadesign' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px","width":"1px","color":"var:preset|color|base-200"}},"backgroundColor":"base-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-base-0-background-color has-background" style="border-color:var(--wp--preset--color--base-200);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}},"textColor":"brand"} -->
<p class="has-brand-color has-text-color" style="font-size:2.5rem">&#9671;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Brand Strategy & Identity', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-600","fontSize":"small"} -->
<p class="has-base-600-color has-text-color has-small-font-size"><?php esc_html_e( 'From logo design to full brand systems, we create visual identities that resonate with your audience and differentiate you from competitors.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default"><a href="#"><?php esc_html_e( 'Learn more →', 'lexiadesign' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px","width":"1px","color":"var:preset|color|base-200"}},"backgroundColor":"base-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-base-0-background-color has-background" style="border-color:var(--wp--preset--color--base-200);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem"}},"textColor":"brand"} -->
<p class="has-brand-color has-text-color" style="font-size:2.5rem">&#9670;</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"medium"} -->
<h3 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Growth & Optimization', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-600","fontSize":"small"} -->
<p class="has-base-600-color has-text-color has-small-font-size"><?php esc_html_e( 'SEO, conversion optimization, and analytics to ensure your digital presence works harder over time. Data-driven decisions, real results.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-default"} -->
<p class="is-style-default"><a href="#"><?php esc_html_e( 'Learn more →', 'lexiadesign' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
