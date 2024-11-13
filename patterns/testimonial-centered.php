<?php
/**
 * Title: Centered testimonial
 * Slug: lexiadesign/testimonial-centered
 * Keywords: testimonial, review, rating
 * Categories: lexiadesign/testimonial
 * Viewport width: 1300
 */
?>

<!-- wp:group {"align":"full","className":"has-base-100-color","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"brand-800","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-base-color has-brand-800-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"base-0","fontSize":"x-large"} -->
<p class="has-text-align-center has-base-0-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:500"><br><em>"<?php echo esc_html_e( 'Building my website used to be a daunting task, but Lexia have completely changed the game! With pre-designed patterns, ', 'lexiadesign' ); ?><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-base-100-color">I was able to create a beautiful and professional website even with limited design experience.</mark> It's like having a personal design assistant at my fingertips!"</em><br></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-4.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"has-base-100-color has-text-color","textColor":"base"} -->
<p class="has-base-100-color has-text-color has-base-color has-text-color">
<strong><?php echo esc_html_e( 'Sarah Jones', 'lexiadesign' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'Photographer', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
