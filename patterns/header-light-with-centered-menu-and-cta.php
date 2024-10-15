<?php
/**
 * Title: Header Light With Centered Menu and CTA
 * Slug: lexiadesign/header-light-with-centered-menu-and-cta
 * Description: Header with nav and cta
 * Categories: lexiadesign/header
 * Keywords: header, nav, links, button
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0px"}}},"backgroundColor":"brand-200","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-200-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /-->

<!-- wp:navigation {"ref":4,"textColor":"main"} /-->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}}} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button"><?php echo esc_html_e( 'Download Now', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
