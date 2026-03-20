<?php
/**
 * Title: Testimonial Highlight
 * Slug: lexiadesign/testimonial-highlight
 * Description: Large featured testimonial with decorative quote mark, author details, and brand accent
 * Categories: lexiadesign/testimonial
 * Keywords: testimonial, review, rating, case study, text, heading
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: testimonial
 * @ai-color-scheme: dark
 * @ai-layout: full-width
 * @ai-suggested-position: middle
 * @ai-slots: testimonial-quote, author-name, author-role
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-900","textColor":"base-100","layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull has-base-100-color has-base-900-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)">

<!-- wp:paragraph {"style":{"typography":{"fontSize":"6rem","lineHeight":"0.8","fontStyle":"normal","fontWeight":"300"}},"textColor":"brand"} -->
<p class="has-brand-color has-text-color" style="font-size:6rem;font-style:normal;font-weight:300;line-height:0.8">&ldquo;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.4","letterSpacing":"-0.01em"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:400;letter-spacing:-0.01em;line-height:1.4"><?php esc_html_e( 'From our initial consultation to the final launch, the entire experience was seamless. The team\'s creative vision and technical expertise helped us achieve results we didn\'t think were possible. They truly care about their clients\' success.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"base-700","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-base-700-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":59,"width":"64px","height":"64px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle","style":{"border":{"width":"3px","color":"var:preset|color|brand"}}} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:var(--wp--preset--color--brand);border-width:3px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-4.webp" alt="" class="wp-image-59" style="width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Sarah Jones', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"small"} -->
<p class="has-base-400-color has-text-color has-small-font-size"><?php esc_html_e( 'CEO, Meridian Studios', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"brand","fontSize":"small"} -->
<p class="has-brand-color has-text-color has-small-font-size">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
