<?php
/**
 * Title: Contact Details
 * Slug: lexiadesign/contact-details
 * Description: Contact details with call to action buttons and a testimonial
 * Categories: lexiadesign/contact, lexiadesign/testimonial, lexiadesign/call-to-action
 * Keywords: contact, testimonial, about, columns, ratings, email, phone
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"radius":"15px"}},"backgroundColor":"brand-200"} -->
<div class="wp-block-group alignwide has-brand-200-background-color has-background" style="border-radius:15px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Contact Us', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Give us a ring, we\'d love to chat with you.', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Whether you\'re looking for a brand refresh, a new web presence, or are curious about consultation, please drop us a line and let\'s start a blossoming relationship!', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color"><strong><span style="text-decoration: underline;"><?php esc_html_e( 'Social Media', 'lexiadesign' ); ?></span></strong></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"main","iconColorValue":"#14111f","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"https://x.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<strong><span style="text-decoration: underline;"><?php esc_html_e( 'Email', 'lexiadesign' ); ?></span></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color"><?php esc_html_e( 'mail@example.com', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<strong><span style="text-decoration: underline;"><?php esc_html_e( 'Phone', 'lexiadesign' ); ?></span></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color"><?php esc_html_e( '815-420-2024', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<strong><span style="text-decoration: underline;"><?php esc_html_e( 'Address', 'lexiadesign' ); ?></span></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color"><?php esc_html_e( '1234 Theme Street', 'lexiadesign' ); ?><br><?php esc_html_e( 'San Francisco, CA 94070', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill">
<a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'Contact Us', 'lexiadesign' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary-button is-style-outline"} -->
<div class="wp-block-button is-style-secondary-button is-style-outline">
<a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Other Enquiries', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
