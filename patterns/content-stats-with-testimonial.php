<?php
/**
 * Title: Stats with Testimonial
 * Slug: lexiadesign/content-stats-with-testimonial
 * Description: Metrics bar combined with a featured testimonial for maximum social proof
 * Categories: lexiadesign/content, lexiadesign/testimonial
 * Keywords: stats, testimonial, social proof, numbers, results
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: content
 * @ai-color-scheme: dark
 * @ai-layout: split, full-width
 * @ai-suggested-position: middle
 * @ai-slots: stat_1_value, stat_1_label, stat_2_value, stat_2_label, stat_3_value, stat_3_label, testimonial_quote, testimonial_name, testimonial_role
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"base-900","textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-base-900-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"brand","fontSize":"xxx-large"} -->
<p class="has-brand-color has-text-color has-xxx-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '340+', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"small"} -->
<p class="has-base-400-color has-text-color has-small-font-size"><?php esc_html_e( 'Projects completed', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"base-700","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-base-700-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--x-small);margin-bottom:var(--wp--preset--spacing--x-small)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '98%', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"x-small"} -->
<p class="has-base-400-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Client retention', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<p class="has-x-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '4.9/5', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"x-small"} -->
<p class="has-base-400-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Average rating', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"12px","left":{"color":"var:preset|color|brand","width":"4px"}}},"backgroundColor":"base-800","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-800-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--brand);border-left-width:4px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"textColor":"base-200","fontSize":"medium"} -->
<p class="has-base-200-color has-text-color has-medium-font-size" style="font-style:italic"><?php esc_html_e( '"They didn\'t just build us a website — they built us a growth engine. Within three months of launch, our inbound leads tripled and our sales team couldn\'t keep up. That\'s the kind of problem you want to have."', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group">
<!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-1.webp" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'James Whitaker', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-400","fontSize":"x-small"} -->
<p class="has-base-400-color has-text-color has-x-small-font-size"><?php esc_html_e( 'CEO, Northpoint Consulting', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
