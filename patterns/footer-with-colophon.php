<?php
/**
 * Title: Footer with colophon
 * Slug: lexiadesign/footer-with-colophon
 * Categories: lexiadesign/footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small","top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"base-900","textColor":"base","className":"alignfull dark-footer has-main-color has-tertiary-background-color has-text-color has-background has-link-color"} -->
<div class="wp-block-group alignfull dark-footer has-main-color has-tertiary-background-color has-text-color has-background has-link-color has-base-color has-base-900-background-color" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<div class="wp-block-column has-base-100-color has-text-color has-link-color">
<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<h4 class="wp-block-heading has-base-100-color has-text-color has-link-color">
<?php echo esc_html_x( 'Design with Lexia', 'Sample heading', 'lexiadesign' ); ?>
</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">
<?php echo esc_html_x( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Lexia block theme. No coding skills required. Download for free today!', 'Sample paragraph', 'lexiadesign' ); ?>
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
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<p class="has-base-100-color has-text-color has-link-color" style="font-style:normal;font-weight:600">
<?php echo esc_html_x( 'Company', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"},"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100","layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group has-base-100-color has-text-color has-link-color has-small-font-size">
<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'About', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Blog', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Press', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Partners', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-100"}}}},"textColor":"base-100"} -->
<div class="wp-block-column has-base-100-color has-text-color has-link-color">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-style:normal;font-weight:600">
<?php echo esc_html_x( 'Resources', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Support', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Terms &amp; Conditions', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Privacy Policy', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>
  <?php echo esc_html_x( 'Contact', 'Sample content for section', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"backgroundColor":"base-900-lighter","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-base-900-lighter-color has-alpha-channel-opacity has-base-900-lighter-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|brand-200"}}}},"textColor":"brand-100"} -->
<div class="wp-block-group alignwide has-brand-100-color has-text-color has-link-color" style="padding-top:0px">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<p class="has-base-color has-text-color has-link-color has-small-font-size">
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
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->