<?php
/**
 * Title: Testimonial Card
 * Slug: lexiadesign/testimonial-card
 * Description:
 * Categories: lexiadesign/testimonial
 * Keywords: testimonial, review, rating
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:columns {"className":"alignwide","style":{"border":{"radius":"15px"},"elements":{"link":{"color":{"text":"var:preset|color|base-700"}}}},"backgroundColor":"brand-50","textColor":"base-700"} -->
<div class="wp-block-columns alignwide has-base-700-color has-brand-50-background-color has-text-color has-background has-link-color" style="border-radius:15px"><!-- wp:column {"className":"is-style-column-box-shadow has-border-color has-base-background-color has-background","style":{"border":{"width":"0px","style":"none"}}} -->
<div class="wp-block-column is-style-column-box-shadow has-border-color has-base-background-color has-background" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:image {"id":57,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" class="wp-image-57" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'Using Block in Lexia has been a game-changer! I used to spend hours wrestling with code, but now I can easily create beautiful and functional websites in no time. It\'s like having a superpower for design!', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html_e( 'Sarah Jones', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
