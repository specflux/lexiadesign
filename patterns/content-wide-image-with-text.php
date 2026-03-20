<?php
/**
 * Title: Content Wide Image with Text
 * Slug: lexiadesign/content-wide-image-with-text
 * Description: Full-width image with overlaid text card and dual CTAs
 * Categories: lexiadesign/content
 * Keywords: content, image, text, box, link, button
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: content
 * @ai-color-scheme: light
 * @ai-layout: centered
 * @ai-suggested-position: middle
 * @ai-slots: card_heading, card_description, primary_button_text, secondary_button_text
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp","id":43,"dimRatio":60,"overlayColor":"base-900","align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-cover alignwide" style="border-radius:16px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--large)">
<span aria-hidden="true" class="wp-block-cover__background has-base-900-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-43" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":2,"textColor":"base-0","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-base-0-color has-text-color has-x-large-font-size"><?php esc_html_e( 'Crafted for Impact', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-300","fontSize":"medium"} -->
<p class="has-text-align-center has-base-300-color has-text-color has-medium-font-size"><?php esc_html_e( 'We deliver measurable results through thoughtful design and strategic execution. Every project is crafted to elevate your brand and engage your audience.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get Started', 'lexiadesign' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-ghost","textColor":"base-0"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link has-base-0-color has-text-color wp-element-button"><?php esc_html_e( 'Read More', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
