<?php
/**
 * Title: Atom - Testimonial Card
 * Slug: lexiadesign/_atom-testimonial-card
 * Description: A single testimonial card with quote, avatar, name, and role for AI assembler use.
 * Categories: lexiadesign/atoms
 * Keywords: testimonial, quote, review, atom
 * Viewport Width: 400
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @ai-section-type: atom
 * @ai-color-scheme: light
 * @ai-layout: vertical
 * @ai-suggested-position: any
 * @ai-slots: quote, avatar_image_url, author_name, author_role
 */
?>
<!-- wp:group {"style":{"border":{"radius":"15px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"borderColor":"brand-100","backgroundColor":"brand-50","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-brand-100-border-color has-brand-50-background-color has-background" style="border-width:1px;border-radius:15px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"textColor":"base-700","fontSize":"small"} -->
<p class="has-base-700-color has-text-color has-small-font-size"><?php esc_html_e( 'This product has completely transformed our workflow. The results speak for themselves and we couldn\'t be happier with the outcome.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"48px","height":"48px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" style="width:48px;height:48px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base-900","fontSize":"small"} -->
<p class="has-base-900-color has-text-color has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Sarah Jones', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-700","fontSize":"text-sm"} -->
<p class="has-base-700-color has-text-color has-text-sm-font-size"><?php esc_html_e( 'Product Designer', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
