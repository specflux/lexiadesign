<?php
/**
 * Title: Single Blog Post Card
 * Slug: lexiadesign/posts-single-blog-post-card
 * Description:
 * Categories: lexiadesign/posts
 * Keywords: card, image, text, box, content, link, button
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"tagName":"main","align":"full","layout":{"type":"default"}} -->
<main class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-title {"level":1,"fontSize":"x-large"} /-->

<!-- wp:template-part {"slug":"post-meta","theme":"lexiadesign"} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-content {"lock":{"move":false,"remove":true},"align":"full","layout":{"type":"constrained"}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"padding":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:post-terms {"term":"post_tag","separator":"  ","className":"is-style-pill"} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"var:preset|spacing|large"} -->
<div style="height:var(--wp--preset--spacing--large)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}},"backgroundColor":"base-900-3"} -->
<hr class="wp-block-separator has-text-color has-base-900-3-color has-alpha-channel-opacity has-base-900-3-background-color has-background is-style-wide" style="margin-bottom:var(--wp--preset--spacing--large)"/>
<!-- /wp:separator -->

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:heading -->
<h2 class="wp-block-heading">
Comments
</h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} /--></div>
<!-- /wp:comments -->

<!-- wp:group {"tagName":"nav","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav aria-label="Posts" class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)"><!-- wp:post-navigation-link {"type":"previous","label":"Previous: ","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"label":"Next: ","showTitle":true,"linkLabel":true,"arrow":"arrow"} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->