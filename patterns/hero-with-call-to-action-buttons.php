<?php
/**
 * Title: Hero with Call To Action Buttons
 * Slug: lexiadesign/hero-with-call-to-action-buttons
 * Description: Full-screen hero with background image, gradient overlay, centered heading, and dual CTAs
 * Categories: lexiadesign/hero, lexiadesign/call-to-action
 * Keywords: cta, header, buttons, heading, hero, feature, homepage
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: hero
 * @ai-color-scheme: dark
 * @ai-layout: centered, full-width
 * @ai-suggested-position: first
 * @ai-slots: heading, subheading, primary_button_text, secondary_button_text, background_image_url
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp","id":1855,"dimRatio":70,"overlayColor":"base-900","isUserOverlayColor":true,"minHeight":85,"minHeightUnit":"vh","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|xx-large","top":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-cover alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small);min-height:85vh"><span aria-hidden="true" class="wp-block-cover__background has-base-900-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-1855" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group">

<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontStyle":"normal","fontWeight":"600"}},"textColor":"brand-300","fontSize":"x-small"} -->
<p class="has-text-align-center has-brand-300-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.15em;text-transform:uppercase"><?php esc_html_e( 'Digital Strategy &amp; Design', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}},"textColor":"base-0","fontSize":"xxxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-base-0-color has-text-color has-xxxx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'We Transform Businesses Through Digital Strategy', 'lexiadesign' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-300","fontSize":"medium"} -->
<p class="has-text-align-center has-base-300-color has-text-color has-medium-font-size"><?php esc_html_e( 'From brand identity to digital experiences, we help ambitious companies grow with data-driven strategy and world-class design.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","className":"is-style-elevated"} -->
<div class="wp-block-button is-style-elevated"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><strong><?php esc_html_e( 'Get Started', 'lexiadesign' ); ?></strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base-0","className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link has-base-0-color has-text-color wp-element-button"><?php esc_html_e( 'Learn More', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
