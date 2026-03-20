<?php
/**
 * Title: Hero with Trust Bar
 * Slug: lexiadesign/hero-with-trust-bar
 * Description: Hero section with headline, CTA buttons, and a logo trust bar below
 * Categories: lexiadesign/hero
 * Keywords: hero, trust, logos, social proof, clients
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: hero
 * @ai-color-scheme: dark
 * @ai-layout: centered, full-width
 * @ai-suggested-position: top
 * @ai-slots: heading, subheading, primary_button_text, secondary_button_text
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-900","textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-base-900-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.02em"}},"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="letter-spacing:-0.02em"><?php esc_html_e( 'We build digital experiences that grow businesses', 'lexiadesign' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-300"}}}},"textColor":"base-300","fontSize":"medium"} -->
<p class="has-text-align-center has-base-300-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e( 'From strategy to launch, we partner with ambitious teams to create websites, brands, and products that convert visitors into customers.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"brand","textColor":"base-0"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'Start a Project', 'lexiadesign' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'View Our Work', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large)">
<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-400"}}}},"textColor":"base-400","fontSize":"x-small"} -->
<p class="has-text-align-center has-base-400-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'Trusted by forward-thinking companies', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide">
<!-- wp:image {"width":"120px","height":"32px","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-placeholder.webp" alt="<?php esc_attr_e( 'Client logo', 'lexiadesign' ); ?>" style="width:120px;height:32px;object-fit:contain;opacity:0.5"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"120px","height":"32px","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-placeholder.webp" alt="<?php esc_attr_e( 'Client logo', 'lexiadesign' ); ?>" style="width:120px;height:32px;object-fit:contain;opacity:0.5"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"120px","height":"32px","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-placeholder.webp" alt="<?php esc_attr_e( 'Client logo', 'lexiadesign' ); ?>" style="width:120px;height:32px;object-fit:contain;opacity:0.5"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"120px","height":"32px","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-placeholder.webp" alt="<?php esc_attr_e( 'Client logo', 'lexiadesign' ); ?>" style="width:120px;height:32px;object-fit:contain;opacity:0.5"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"120px","height":"32px","sizeSlug":"full","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-placeholder.webp" alt="<?php esc_attr_e( 'Client logo', 'lexiadesign' ); ?>" style="width:120px;height:32px;object-fit:contain;opacity:0.5"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
