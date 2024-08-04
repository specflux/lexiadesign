<?php
/**
 * Title: Footer Minimal Light
 * Slug: lexiadesign/footer-minimal-light
 * Description:
 * Categories: lexiadesign/footer
 * Keywords:
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"brand-200","className":"alignfull dark-footer has-tertiary-background-color has-background has-link-color"} -->
<div class="wp-block-group alignfull dark-footer has-tertiary-background-color has-background has-link-color has-brand-200-background-color" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide">
<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /-->

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
