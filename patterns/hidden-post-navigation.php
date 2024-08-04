<?php
/**
 * Title: Post navigation
 * Slug: lexiadesign/hidden-post-navigation
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"nav","ariaLabel":"<?php esc_attr_e( 'Posts', 'lexiadesign' ); ?>","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)" aria-label="<?php esc_attr_e( 'Posts', 'lexiadesign' ); ?>">

<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_html_e( 'Previous: ', 'lexiadesign' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
<!-- wp:post-navigation-link {"label":"<?php echo esc_html_e( 'Next: ', 'lexiadesign' ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->
</nav>
<!-- /wp:group -->
