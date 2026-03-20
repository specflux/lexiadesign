<?php
/**
 * Title: CTA with Social Proof
 * Slug: lexiadesign/call-to-action-with-social-proof
 * Description: Call to action with stacked avatars, client count, and conversion-focused copy
 * Categories: lexiadesign/call-to-action
 * Keywords: cta, social proof, avatars, trust, conversion
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: cta
 * @ai-color-scheme: brand
 * @ai-layout: centered, full-width
 * @ai-suggested-position: bottom
 * @ai-slots: heading, description, button_text, social_proof_text
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"brand-50","layout":{"type":"constrained","contentSize":"680px"}} -->
<div class="wp-block-group alignfull has-brand-50-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Ready to see what we can do for you?', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-600","fontSize":"medium"} -->
<p class="has-text-align-center has-base-600-color has-text-color has-medium-font-size"><?php esc_html_e( 'Book a free 30-minute strategy call. No commitment, no pressure — just a conversation about your goals and how we can help you reach them.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"brand","textColor":"base-0","className":"is-style-elevated"} -->
<div class="wp-block-button is-style-elevated"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Book Your Free Call', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|small"}}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"width":"36px","height":"36px","sizeSlug":"full","className":"is-style-circle","style":{"border":{"width":"2px","color":"#ffffff"}}} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:#ffffff;border-width:2px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-1.webp" alt="" style="width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"36px","height":"36px","sizeSlug":"full","className":"is-style-circle","style":{"border":{"width":"2px","color":"#ffffff"},"spacing":{"margin":{"left":"-12px"}}}} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:#ffffff;border-width:2px;margin-left:-12px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" style="width:36px;height:36px"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"36px","height":"36px","sizeSlug":"full","className":"is-style-circle","style":{"border":{"width":"2px","color":"#ffffff"},"spacing":{"margin":{"left":"-12px"}}}} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:#ffffff;border-width:2px;margin-left:-12px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-5.webp" alt="" style="width:36px;height:36px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"base-600","fontSize":"x-small"} -->
<p class="has-base-600-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Join 200+ businesses that grew with us', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
