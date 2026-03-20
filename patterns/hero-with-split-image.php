<?php
/**
 * Title: Hero with Split Image
 * Slug: lexiadesign/hero-with-split-image
 * Description: Dark hero with large heading, subtext, CTAs, and a rounded image with gradient overlay
 * Categories: lexiadesign/hero, lexiadesign/call-to-action
 * Keywords: cta, call to action, buttons, homepage, header, hero, heading, screenshot
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: hero
 * @ai-color-scheme: dark
 * @ai-layout: split, full-width
 * @ai-suggested-position: first
 * @ai-slots: heading, subheading, primary_button_text, secondary_button_text
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"80vh"}},"backgroundColor":"base-900","textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-base-900-background-color has-text-color has-background" style="min-height:80vh;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"border":{"left":{"color":"var:preset|color|brand","width":"3px"}},"spacing":{"padding":{"left":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-left-color:var(--wp--preset--color--brand);border-left-width:3px;padding-left:var(--wp--preset--spacing--x-small)">
<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"textColor":"brand","fontSize":"x-small"} -->
<p class="has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Digital Agency', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}},"fontSize":"xxxx-large"} -->
<h1 class="wp-block-heading has-xxxx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Strategy That Drives Growth', 'lexiadesign' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-300"}}}},"textColor":"base-400","fontSize":"medium"} -->
<p class="has-base-400-color has-text-color has-link-color has-medium-font-size"><?php esc_html_e( 'We partner with forward-thinking businesses to craft digital experiences that engage audiences and deliver measurable results.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)">
<!-- wp:button {"backgroundColor":"brand","textColor":"base-0","className":"is-style-elevated"} -->
<div class="wp-block-button is-style-elevated"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background wp-element-button"><strong><?php esc_html_e( 'Book a Call', 'lexiadesign' ); ?></strong></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"base-100","className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link has-base-100-color has-text-color wp-element-button"><?php esc_html_e( 'Our Services', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small","padding":{"top":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small)">
<!-- wp:paragraph {"textColor":"base-500","fontSize":"x-small"} -->
<p class="has-base-500-color has-text-color has-x-small-font-size">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-500","fontSize":"x-small"} -->
<p class="has-base-500-color has-text-color has-x-small-font-size"><?php esc_html_e( '4.9/5 from 200+ clients', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

</div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp","id":76,"dimRatio":30,"overlayColor":"brand-900","style":{"dimensions":{"aspectRatio":"3/4"},"border":{"radius":"20px"},"shadow":"var:preset|shadow|floating"},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;box-shadow:var(--wp--preset--shadow--floating)">
<span aria-hidden="true" class="wp-block-cover__background has-brand-900-background-color has-background-dim-30 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-76" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"bottom","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"12px"}},"backgroundColor":"base-900","className":"is-style-glass","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-glass has-base-900-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"base-0","fontSize":"large"} -->
<p class="has-base-0-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '+340%', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-300","fontSize":"x-small"} -->
<p class="has-base-300-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Average lead increase', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
