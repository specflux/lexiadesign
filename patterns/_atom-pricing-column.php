<?php
/**
 * Title: Atom - Pricing Column
 * Slug: lexiadesign/_atom-pricing-column
 * Description: A single pricing tier with title, price, features list, and CTA button for AI assembler use.
 * Categories: lexiadesign/atoms
 * Keywords: pricing, tier, plan, atom
 * Viewport Width: 400
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @ai-section-type: atom
 * @ai-color-scheme: light
 * @ai-layout: vertical
 * @ai-suggested-position: any
 * @ai-slots: tier_name, tier_price, tier_period, tier_description, feature_1, feature_2, feature_3, feature_4, button_text
 * @ai-repeater: features, min:1, max:8
 */
?>
<!-- wp:group {"style":{"border":{"radius":"15px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"borderColor":"brand-100","backgroundColor":"brand-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-brand-100-border-color has-brand-50-background-color has-background" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-large","fontFamily":"primary"} -->
<p class="has-primary-font-family has-x-large-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( '$29', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.4rem"}}},"textColor":"base-700","fontSize":"small","fontFamily":"primary"} -->
<p class="has-base-700-color has-text-color has-primary-font-family has-small-font-size" style="margin-top:1.4rem"><?php esc_html_e( 'per month', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-900"}}}},"textColor":"base-900"} -->
<h4 class="wp-block-heading has-base-900-color has-text-color has-link-color"><?php esc_html_e( 'Professional', 'lexiadesign' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-700","fontSize":"small"} -->
<p class="has-base-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Great for professionals who need all the tools to build amazing websites.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"brand","width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"}},"elements":{"link":{"color":{"text":"var:preset|color|brand"}}}},"borderColor":"brand","className":"is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link has-brand-color has-text-color has-link-color has-border-color has-brand-border-color wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'Get Started', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>&#10003;</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Unlimited Projects', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-text-color has-main-accent-color has-background is-style-separator-dotted"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-main-accent-color has-background is-style-separator-dotted"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>&#10003;</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Priority Support', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-text-color has-main-accent-color has-background is-style-separator-dotted"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-main-accent-color has-background is-style-separator-dotted"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>&#10003;</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Advanced Analytics', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"has-text-color has-main-accent-color has-background is-style-separator-dotted"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-text-color has-main-accent-color has-background is-style-separator-dotted"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>&#10003;</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Custom Integrations', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
