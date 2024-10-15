<?php
/**
 * Title: Blog Blocks Author Box
 * Slug: lexiadesign/blog-blocks-author-box
 * Description: Author Info Box to showcase author information including social links.
 * Categories: lexiadesign/blog-blocks
 * Keywords: author, bio, profile, user
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>

<!-- wp:group {"className":"has-brand-200-background-color has-background block-pattern"} -->
<div class="wp-block-group has-brand-200-background-color has-background block-pattern">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"15px","width":"1px"}},"borderColor":"base-900-lighter","backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-base-900-lighter-border-color has-base-background-color has-background" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:avatar {"size":60} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->

<!-- wp:post-author-biography /-->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"brand","iconBackgroundColorValue":"#4483ed","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|small"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color">
<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
