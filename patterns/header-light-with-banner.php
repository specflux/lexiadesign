<?php
/**
 * Title: Header Light With Banner
 * Slug: lexiadesign/header-light-with-banner
 * Description: Header with nav and social icons
 * Categories: lexiadesign/header
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"brand-900","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-900-background-color has-background">
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|small","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small"}},"color":{"gradient":"linear-gradient(90deg,#006EF3 0%,#002A5D 100%)"}},"textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-text-color has-background" style="background:linear-gradient(90deg,#006EF3 0%,#002A5D 100%);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-0","fontSize":"small"} -->
<p class="has-base-0-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_e( 'Lexia is available now', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size">
<a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><?php echo esc_html_e( 'Download Now', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|brand-900"}}}},"backgroundColor":"brand-200","textColor":"brand-900","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-900-color has-brand-200-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:site-title {"fontSize":"base"} /-->

<!-- wp:navigation {"ref":4,"textColor":"base-900","overlayBackgroundColor":"main","overlayTextColor":"base-900-lighter","layout":{"type":"flex","orientation":"horizontal"},"style":{"spacing":{"blockGap":"20px"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
