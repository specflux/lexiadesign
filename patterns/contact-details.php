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
<p class="has-small-font-size" style="font-style:normal;font-weight:500">

    <?php esc_html_x( 'Contact Us', 'Sample subheading', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">

    <?php esc_html_x( 'Give us a ring, we\'d love to chat with you.', 'Sample heading', 'lexiadesign' ); ?>

</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
    <?php esc_html_x( 'Whether you\'re looking for a brand refresh, a new web presence, or are curious about consultation, please drop us a line and let\'s start a blossoming relationship!', 'Sample content', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<strong><span style="text-decoration: underline;">

    <?php esc_html_x( 'Social Media', 'Sample content for this section', 'lexiadesign' ); ?>
</span></strong>
</p>
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
<strong><span style="text-decoration: underline;">
<?php esc_html_x( 'Email', 'Sample content for this section', 'lexiadesign' ); ?>
</span></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<?php esc_html_x( 'mail@example.com', 'Sample content for this section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<strong><span style="text-decoration: underline;">
<?php esc_html_x( 'Phone', 'Sample content for this section', 'lexiadesign' ); ?>
</span></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<?php esc_html_x( '815-420-2024', 'Sample content for this section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<strong><span style="text-decoration: underline;">
<?php esc_html_x( 'Address', 'Sample content for this section', 'lexiadesign' ); ?>
</span></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main"} -->
<p class="has-main-color has-text-color">
<?php esc_html_x( '1234 Theme Street', 'Sample content for this section', 'lexiadesign' ); ?><br>
<?php esc_html_x( 'San Francisco, CA 94070', 'Sample content for this section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill">
<a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button">
<?php esc_html_e( 'Contact Us', 'lexiadesign' ); ?>
</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-secondary-button is-style-outline"} -->
<div class="wp-block-button is-style-secondary-button is-style-outline">
<a class="wp-block-button__link wp-element-button">
<?php esc_html_e( 'Collaboration Enquiries', 'lexiadesign' ); ?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->