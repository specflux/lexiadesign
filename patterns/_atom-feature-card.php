<?php
/**
 * Title: Atom - Feature Card
 * Slug: lexiadesign/_atom-feature-card
 * Description: A single feature card atom with heading, description, and button for AI assembler use.
 * Categories: lexiadesign/atoms
 * Keywords: feature, card, atom
 * Viewport Width: 400
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @ai-section-type: atom
 * @ai-color-scheme: light
 * @ai-layout: vertical
 * @ai-suggested-position: any
 * @ai-slots: feature_title, feature_description, feature_button_text
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"border":{"radius":"15px","width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"brand-100","textColor":"base-700","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-base-700-color has-brand-100-background-color has-text-color has-background" style="border-width:1px;border-radius:15px;min-height:100%;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-900"}}}},"textColor":"base-900"} -->
<h3 class="wp-block-heading has-text-align-center has-base-900-color has-text-color has-link-color"><?php esc_html_e( 'Feature Title', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"text-sm"} -->
<p class="has-text-align-center has-text-sm-font-size"><?php esc_html_e( 'Feature description goes here. Explain the benefit clearly and concisely.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"brand","textColor":"base-0","width":100,"className":"is-style-secondary-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0"}}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-secondary-button has-small-font-size"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'Tell Me More', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
