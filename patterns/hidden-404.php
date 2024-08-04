<?php
/**
 * Title: 404
 * Slug: lexiadesign/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"dimensions":{"minHeight":"70vh"}},"backgroundColor":"brand-900","className":"alignfull has-base-100-color has-text-color has-background"} -->
<div class="wp-block-group alignfull has-base-100-color has-text-color has-background has-brand-900-background-color" style="min-height:70vh">
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignfull">
<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404.webp","id":2150,"dimRatio":0,"customOverlayColor":"#686868","isUserOverlayColor":true,"style":{"dimensions":{"aspectRatio":"1"},"border":{"radius":"15px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:15px">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#686868">
</span><img class="wp-block-cover__image-background wp-image-2150" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/404.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">

</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column is-vertically-aligned-center">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<h2 class="wp-block-heading has-base-100-color has-text-color has-link-color"><?php echo esc_html_e( 'Page Not Found', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100","fontSize":"medium"} -->
<p class="has-base-100-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html_e( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}},"backgroundColor":"brand","textColor":"base-0","fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
