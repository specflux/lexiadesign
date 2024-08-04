<?php
/**
 * Title: Contact Details with Testimonial
 * Slug: lexiadesign/contact-details-with-testimonial
 * Description: Contact details with call to action buttons and a testimonial
 * Categories: lexiadesign/contact, lexiadesign/testimonial, lexiadesign/call-to-action
 * Keywords: contact, testimonial, about, columns, ratings, email, phone
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"15px"}},"backgroundColor":"brand-200","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-200-background-color has-background" style="border-radius:15px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px">
<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Contact Us', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e( 'Give us a ring, we\'d love to chat with you.', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
<p style="padding-top:0px;padding-bottom:0px"><?php esc_html_e( 'Whether you\'re looking for a brand refresh, a new web presence, or are curious about consultation, please drop us a line and let\'s start a blossoming relationship!', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"base-900"} -->
<p class="has-base-900-color has-text-color">
<span style="text-decoration: underline;"><?php esc_html_e( 'Social Media', 'lexiadesign' ); ?></span>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"brand-900","iconColorValue":"#002A5D","openInNewTab":true,"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|xx-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="padding-top:var(--wp--preset--spacing--xx-small);padding-bottom:var(--wp--preset--spacing--xx-small)">
<!-- wp:social-link {"url":"https://x.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://youtube.com","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"base-900"} -->
<p class="has-base-900-color has-text-color">
<span style="text-decoration: underline;"><?php esc_html_e( 'Email', 'lexiadesign' ); ?></span>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-900-lighter"} -->
<p class="has-base-900-lighter-color has-text-color"><?php esc_html_e( 'mail@example.com', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"base-900"} -->
<p class="has-base-900-color has-text-color">
<span style="text-decoration: underline;"><?php esc_html_e( 'Phone', 'lexiadesign' ); ?></span>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-900-lighter"} -->
<p class="has-base-900-lighter-color has-text-color"><?php esc_html_e( '815-420-2024', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"base-900"} -->
<p class="has-base-900-color has-text-color">
<span style="text-decoration: underline;"><?php esc_html_e( 'Address', 'lexiadesign' ); ?></span>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-900-lighter"} -->
<p class="has-base-900-lighter-color has-text-color"><?php esc_html_e( '1234 Theme Street', 'lexiadesign' ); ?><br><?php esc_html_e( 'San Francisco, CA 94070', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
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
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"15px"},"dimensions":{"minHeight":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"backgroundColor":"brand-800","textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-100-color has-brand-800-background-color has-text-color has-background has-link-color" style="border-radius:15px;min-height:100%;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color">
★★★★★
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<p class="has-base-100-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php esc_html_e( '“My work has been easier since using Lexia from start to end.”', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"base-100","fontSize":"small"} -->
<p class="has-base-100-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e( 'Rated 5/5 stars by 1,234 happy reviewers', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
