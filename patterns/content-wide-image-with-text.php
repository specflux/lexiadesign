<?php
/**
 * Title: Content Wide Image with Text
 * Slug: lexiadesign/content-wide-image-with-text
 * Description:
 * Categories: lexiadesign/content
 * Keywords: content, image, text, box, link, button
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>

<!-- wp:group {"align":"wide","className":"is-style-default has-base-background-color has-background"} -->
<div class="wp-block-group alignwide is-style-default has-base-background-color has-background">
<!-- wp:image {"id":43,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|teal"},"border":{"radius":"15px"}}} -->
<figure class="wp-block-image size-full has-custom-border">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" alt="" class="wp-image-43" style="border-radius:15px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
<!-- wp:heading {"level":4,"align":"wide"} -->
<h4 class="wp-block-heading alignwide"><?php esc_html_e( 'Image and Text Card', 'lexiadesign' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Now we can whip up stunning, full-page designs with gorgeous patterns in a flash, all thanks to the awesome new Site Editor and Lexia themes. WordPress just became way cooler than a bucket and spade!  ✨', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"align":"wide","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-buttons alignwide">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","width":50,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}},"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'Get Started', 'lexiadesign' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"className":"is-style-secondary-button is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-secondary-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
