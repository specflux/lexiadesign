<?php
/**
 * Title: Call To Action Full
 * Slug: lexiadesign/call-to-action-full
 * Description: Full-width CTA with gradient background, centered heading, description, and elevated button
 * Categories: lexiadesign/call-to-action
 * Keywords: card, button, cta, heading, call to action
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: cta
 * @ai-color-scheme: dark
 * @ai-layout: centered, full-width
 * @ai-suggested-position: last
 * @ai-slots: heading, description, button_text
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(160deg, var(--wp--preset--color--brand-900) 0%, var(--wp--preset--color--base-900) 100%)"}},"textColor":"base-100","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignfull has-base-100-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small);background:linear-gradient(160deg, var(--wp--preset--color--brand-900) 0%, var(--wp--preset--color--base-900) 100%)">

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"textColor":"brand-300","fontSize":"x-small"} -->
<p class="has-text-align-center has-brand-300-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Let\'s Work Together', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.02em"><?php esc_html_e( 'Ready to Transform Your Business?', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-300","fontSize":"medium"} -->
<p class="has-text-align-center has-base-300-color has-text-color has-medium-font-size"><?php esc_html_e( 'Schedule a free consultation with our team. We\'ll create a tailored strategy to help you reach your audience and grow your business.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--small)">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","className":"is-style-elevated","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-elevated has-medium-font-size"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Book a Consultation', 'lexiadesign' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-ghost","textColor":"base-300"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link has-base-300-color has-text-color wp-element-button"><?php esc_html_e( 'View Our Work', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","textColor":"base-500","fontSize":"x-small","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<p class="has-text-align-center has-base-500-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><?php esc_html_e( 'No commitment required — Free 30-minute strategy session', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
