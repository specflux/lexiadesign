<?php
/**
 * Title: Blog Blocks Author Box Minimalist
 * Slug: blog-blocks-author-box-minimalist
 * Description: Simple Author Info Box to showcase author information.
 * Categories: lexia/blog-blocks
 * Keywords: author, bio, profile, user
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"15px","width":"1px"}},"borderColor":"base-900-lighter","backgroundColor":"base","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","orientation":"horizontal"}} -->
<div class="wp-block-group has-border-color has-base-900-lighter-border-color has-base-background-color has-background" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:columns {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"><!-- wp:avatar {"size":60} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"90%"} -->
<div class="wp-block-column" style="flex-basis:90%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->

<!-- wp:post-author-biography /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->