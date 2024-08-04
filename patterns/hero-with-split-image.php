<?php
/**
 * Title: Hero with Split Image
 * Slug: lexiadesign/hero-with-split-image
 * Description:
 * Categories: lexiadesign/hero, lexiadesign/call-to-action
 * Keywords: cta, call to action, buttons, homepage, header, hero, heading, screenshot
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"dimensions":{"minHeight":"70vh"}},"backgroundColor":"brand-900","className":"alignfull has-base-100-color has-text-color has-background"} -->
<div class="wp-block-group alignfull has-base-100-color has-text-color has-background has-brand-900-background-color" style="min-height:70vh">
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignfull">
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100","className":"wp-block-heading has-text-5-xl-font-size"} -->
<h1 class="wp-block-heading has-text-5-xl-font-size has-base-100-color has-text-color has-link-color"><?php echo esc_html_e( 'Design with clicks, not code', 'lexiadesign' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<p class="has-base-100-color has-text-color has-link-color"><?php echo esc_html_e( 'Whip up stunning, one-of-a-kind websites like a boss with the new WordPress Site Editor and the Lexia block theme!', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}}} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button">
<strong><?php esc_html_e( 'Download Lexia', 'lexiadesign' ); ?></strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base-100","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline">
<a class="wp-block-button__link has-base-100-color has-text-color has-link-color wp-element-button"><?php echo esc_html_e( 'Tell Me More', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp","id":76,"dimRatio":0,"isDark":false,"style":{"dimensions":{"aspectRatio":"9/16"},"border":{"radius":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light" style="border-radius:15px">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim">
</span><img class="wp-block-cover__image-background wp-image-76" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">

</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
