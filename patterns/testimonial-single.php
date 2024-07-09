<?php
/**
 * Title: Testimonial Single
 * Slug: lexiadesign/testimonial-single
 * Description:
 * Categories: lexiadesign/testimonial
 * Keywords: testimonial, text, review, rating, avatar, card
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"border":{"radius":"15px"},"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}}},"backgroundColor":"brand-100","className":"has-main-background-color has-background"} -->
<div class="wp-block-group has-main-background-color has-background has-brand-100-background-color" style="border-radius:15px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)">
<!-- wp:paragraph {"align":"center","textColor":"base","className":"has-base-color has-text-color has-text-2-xl-font-size","fontSize":"medium"} -->
<p class="has-text-align-center has-base-color has-text-color has-text-2-xl-font-size has-medium-font-size">
<?php echo esc_html_x( 'As a busy entrepreneur, I don\'t have time to mess around with code. Block themes have been a lifesaver! I can quickly add stunning layouts with relevant functionalities like contact forms and testimonials, all within the user-friendly block editor. It\'s saved me time and money, and most importantly, my website looks amazing', 'Paragraph for the testimonial card block', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":58,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-3.webp" alt="" class="wp-image-58" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color">
<strong>
    <?php echo esc_html_x( 'Mary Potter', 'Sample testimonial name', 'lexiadesign' ); ?>
</strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size">
<?php echo esc_html_x( 'Entrepreneur', 'Sample testimonial job title', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->