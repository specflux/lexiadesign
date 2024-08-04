<?php
/**
 * Title: Footer Minimal
 * Slug: lexiadesign/footer-minimal
 * Description:
 * Categories: lexiadesign/footer
 * Keywords:
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}},"backgroundColor":"brand-950","textColor":"base-0","className":"alignfull dark-footer has-base-100-color has-main-background-color has-text-color has-background has-link-color"} -->
<div class="wp-block-group alignwide alignfull dark-footer has-base-100-color has-main-background-color has-text-color has-background has-link-color has-base-0-color has-brand-950-background-color" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-main-accent-color has-text-color has-link-color">
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php
/* Translators: Site name for the credit line. */
$site_name = esc_html( get_bloginfo( 'name' ) );

$powered_by_link = sprintf(
/* Translators: Powered by WordPress link text. */
__( 'Powered by %s', 'lexiadesign' ),
'<a href="' . esc_url( __( 'https://wordpress.org/', 'lexiadesign' ) ) . '" rel="nofollow">WordPress</a>'
);

echo "&copy; ".date('Y')." · $powered_by_link and <a href=\"" . home_url() . "\">$site_name</a>";
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
