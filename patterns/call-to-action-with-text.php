<?php
/**
 * Title: Call To Action with Text
 * Slug: lexiadesign/call-to-action-with-text
 * Description: A call to action with text and a button.
 * Categories: lexiadesign/call-to-action, lexiadesign/content
 * Keywords: cta, call to action, buttons, heading
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
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"backgroundColor":"brand-950","textColor":"base-0","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-0-color has-brand-950-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}},"textColor":"base-0"} -->
<h2 class="wp-block-heading has-text-align-center has-base-0-color has-text-color has-link-color"><?php esc_html_e( 'Start Your Next Project Today', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Whether you need a brand refresh, a new digital platform, or a growth strategy, our team is ready to help you achieve your goals. Let us bring your vision to life.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"tertiary"} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-tertiary-color has-brand-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Get Started Today', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
