<?php
/**
 * Title: Testimonials With Big Text
 * Slug: lexiadesign/testimonials-with-big-text
 * Description:
 * Categories: lexiadesign/testimonial
 * Keywords: testimonial, review, rating, quote, heading, columns, avatar
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: testimonial
 * @ai-color-scheme: light
 * @ai-layout: split, full-width
 * @ai-suggested-position: middle
 * @ai-slots: section-label, heading-highlight, heading-body, testimonial-quote-1, author-name-1, testimonial-quote-2, author-name-2
 * @ai-repeater: testimonial_card, min:1, max:2
 */

?>
<!-- wp:group {"className":"alignfull has-tertiary-background-color has-background","style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"backgroundColor":"brand-50"} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background has-brand-50-background-color" style="padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0px;margin-bottom:0px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"5px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-radius:5px;margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"className":"has-text-color","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
<p class="has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html_e( 'Testimonials', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">
<strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color "><?php echo esc_html_e( 'What our clients say about working with us.', 'lexiadesign' ); ?></mark></strong> <?php echo esc_html_e( 'Real results from real partnerships. Here\'s how we\'ve helped businesses grow through design and strategy.', 'lexiadesign' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"className":"is-style-column-box-shadow","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"15px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-column-box-shadow has-brand-100-background-color has-background" style="border-radius:15px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph -->
<p><?php echo esc_html_e( 'From our first strategy call to the final launch, the process was seamless. They took the time to understand our audience and built a site that actually converts. Our online sales jumped 40% in the first quarter after the redesign. Truly outstanding work.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":60,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-5.webp" alt="" class="wp-image-60" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php echo esc_html_e( 'Priya Kapoor', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-column-box-shadow","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}},"border":{"radius":"15px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-column-box-shadow has-brand-100-background-color has-background" style="border-radius:15px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph -->
<p><?php echo esc_html_e( 'Communication was the biggest standout. Weekly updates, clear timelines, and zero surprises. They delivered our brand refresh on schedule and the final product was exactly what we described in our brief. It\'s rare to find an agency that actually listens.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":33081,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-4.webp" alt="" class="wp-image-33081" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500"><?php echo esc_html_e( 'Marcus Webb', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
