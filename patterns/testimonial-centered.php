<?php
/**
 * Title: Centered testimonial
 * Slug: lexiadesign/testimonial-centered
 * Keywords: testimonial, review, rating
 * Categories: lexiadesign/testimonials
 * Viewport width: 1300
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"main","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base","fontSize":"x-large"} -->
<p class="has-text-align-center has-base-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:500">
<em>
    <?php echo esc_html_x( '"Building my website used to be a daunting task, but Lexia have completely changed the game! With pre-designed patterns, ', 'Content for the testimonial card block', 'lexiadesign' ); ?>
    <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-main-accent-color">
<?php echo esc_html_x( 'I was able to create a beautiful and professional website even with limited design experience.', 'Highlighted text for the testimonial card block', 'lexiadesign' ); ?>
</mark> 
<?php echo esc_html_x( 'It\'s like having a personal design assistant at my fingertips!"', 'Paragraph for the testimonial card block', 'lexiadesign' ); ?>
</em>
</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-4.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color">
<strong>
    <?php echo esc_html_x( 'Sarah Jones', 'Sample testimonial name', 'lexiadesign' ); ?>
</strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size">
<?php echo esc_html_x( 'Photographer', 'Sample testimonial job title', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->