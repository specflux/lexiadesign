<?php
/**
 * Title: Footer Light
 * Slug: lexiadesign/footer-light
 * Description:
 * Categories: lexiadesign/footer
 * Keywords:
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"brand-200","className":"alignfull dark-footer has-main-color has-tertiary-background-color has-text-color has-background has-link-color"} -->
<div class="wp-block-group alignfull dark-footer has-main-color has-tertiary-background-color has-text-color has-background has-link-color has-brand-200-background-color" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading"><?php echo esc_html_e( 'Design with Lexia', 'lexiadesign' ); ?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Lexia block theme. No coding skills required. Download for free today!', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"main","iconBackgroundColorValue":"#14111f","style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php echo esc_html_e( 'Company', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'About', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Blog', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Press', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Partners', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600"><?php echo esc_html_e( 'Resources', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"right":"0","left":"0"}}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size" style="padding-right:0;padding-left:0">
<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Support', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Terms &amp; Conditions', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Privacy Policy', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Contact', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|brand-900"}}}},"textColor":"brand-900"} -->
<div class="wp-block-group alignwide has-brand-900-color has-text-color has-link-color" style="padding-top:0px">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
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
<!-- /wp:group --></div>
<!-- /wp:group -->
