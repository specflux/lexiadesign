<?php
/**
 * Title: Call To Action With Rightside Image
 * Slug: lexiadesign/call-to-action-with-rightside-image
 * Description:
 * Categories: lexiadesign/call-to-action
 * Keywords: card, button, cta, heading, call to action
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"backgroundColor":"brand-800","textColor":"base-100","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide has-base-100-color has-brand-800-background-color has-text-color has-background has-link-color" style="border-radius:15px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}},"textColor":"base-100"} -->
<h2 class="wp-block-heading has-base-100-color has-text-color has-link-color"><?php esc_html_e( 'Boost your productivity. Start using our app today.', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"brand","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-brand-background-color has-background wp-element-button"><?php esc_html_e( 'CTA', 'lexiadesign' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base-100","width":100,"className":"is-style-secondary-button is-style-outline","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-secondary-button is-style-outline"><a class="wp-block-button__link has-base-100-color has-text-color has-link-color wp-element-button"><?php esc_html_e( 'Secondary Button','lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":76,"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"25px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" class="wp-image-76" style="border-radius:25px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
