<?php
/**
 * Title: Blog Blocks Author Box Minimalist
 * Slug: lexiadesign/blog-blocks-author-box-minimalist
 * Description: Simple Author Info Box to showcase author information.
 * Categories: lexiadesign/blog-blocks
 * Keywords: author, bio, profile, user
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>

<!-- wp:columns {"style":{"layout":{"selfStretch":"fill","flexSize":null},"border":{"width":"1px","radius":"15px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}}} -->
<div class="wp-block-columns" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--small)"><!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"><!-- wp:avatar {"size":60} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"90%"} -->
<div class="wp-block-column" style="flex-basis:90%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"medium"} /-->

<!-- wp:post-author-biography /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
