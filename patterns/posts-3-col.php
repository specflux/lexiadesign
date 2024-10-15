<?php
/**
 * Title: List of posts, 3 columns
 * Slug: lexiadesign/posts-3-col
 * Categories: lexiadesign/posts, lexiadesign/content
 * Block Types: core/query
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":12,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"metadata":{"categories":["lexiadesign/posts","lexiadesign/content"],"patternName":"lexiadesign/posts-3-col","name":"List of posts, 3 columns"},"align":"wide","className":"alignfull","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide alignfull"><!-- wp:query-no-results -->
<!-- wp:pattern {"slug":"lexiadesign/hidden-no-results"} /-->
<!-- /wp:query-no-results -->

<!-- wp:group {"className":"","style":{"spacing":{"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"border":{"width":"1px","color":"#111111","radius":"15px"},"spacing":{"padding":{"right":"0","left":"0"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color" style="border-color:#111111;border-width:1px;border-radius:15px;min-height:100%;padding-right:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"var:preset|spacing|small"}},"border":{"radius":"0px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|small"},"padding":{"top":"0","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small);padding-top:0;padding-right:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:post-author-name {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"fontSize":"large"} /-->

<!-- wp:template-part {"slug":"post-meta","theme":"lexia"} /-->

<!-- wp:post-excerpt {"moreText":"Continue Reading","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}},"textColor":"base-900-lighter","fontSize":"small"} /-->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"min(2.5rem, 3vw)","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|medium","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--medium)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
