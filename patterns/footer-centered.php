<?php
/**
 * Title: Footer Centered
 * Slug: lexiadesign/footer-centered
 * Description:
 * Categories: lexiadesign/footer
 * Keywords:
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>
<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"brand-200","textColor":"base","className":"alignfull dark-footer has-base-color has-main-background-color has-text-color has-background has-link-color"} -->
<div class="wp-block-group alignwide alignfull dark-footer has-base-color has-main-background-color has-text-color has-background has-link-color has-brand-200-background-color" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:site-title {"textAlign":"center"} /-->

<!-- wp:social-links {"iconColor":"main","iconColorValue":"#150E29","iconBackgroundColor":"base","iconBackgroundColorValue":"#fff","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent","fontSize":"small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-small-font-size">
<?php
/* Translators: Site name for the credit line. */
$site_name = esc_html( get_bloginfo( 'name' ) );

$powered_by_link = sprintf(
  /* Translators: Powered by WordPress link text. */
  __( 'Powered by %s', 'lexiadesign' ),
  '<a href="' . esc_url( __( 'https://wordpress.org/', 'lexiadesign' ) ) . '" rel="nofollow">WordPress</a>'
);

echo "&copy; ".date('Y')." · $powered_by_link and <a href=\"" . site_url() . "\">$site_name</a>";
?>

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->