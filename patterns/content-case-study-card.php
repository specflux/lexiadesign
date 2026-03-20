<?php
/**
 * Title: Case Study Cards
 * Slug: lexiadesign/content-case-study-card
 * Description: Two case study cards with results metrics and project descriptions
 * Categories: lexiadesign/content
 * Keywords: case study, portfolio, results, metrics, projects
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: content
 * @ai-color-scheme: light
 * @ai-layout: grid-2col, full-width
 * @ai-suggested-position: middle
 * @ai-slots: heading, case_1_title, case_1_description, case_1_metric, case_1_metric_label, case_2_title, case_2_description, case_2_metric, case_2_metric_label
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"textColor":"brand","fontSize":"x-small"} -->
<p class="has-text-align-center has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Our Work', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Results that speak for themselves', 'lexiadesign' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--medium)">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:image {"sizeSlug":"large","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" alt="<?php esc_attr_e( 'Project screenshot', 'lexiadesign' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Meridian Financial', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-600","fontSize":"small"} -->
<p class="has-base-600-color has-text-color has-small-font-size"><?php esc_html_e( 'Complete brand identity and website redesign for a growing fintech startup, resulting in a significant increase in qualified leads.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"border":{"top":{"color":"var:preset|color|base-200","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-200);border-top-width:1px">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"brand","fontSize":"large"} -->
<p class="has-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '+340%', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-500","fontSize":"x-small"} -->
<p class="has-base-500-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Lead generation', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"brand","fontSize":"large"} -->
<p class="has-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '2.1x', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-500","fontSize":"x-small"} -->
<p class="has-base-500-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Conversion rate', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"12px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:image {"sizeSlug":"large","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/woman-on-computer.webp" alt="<?php esc_attr_e( 'Project screenshot', 'lexiadesign' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php esc_html_e( 'Bloom Wellness', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"base-600","fontSize":"small"} -->
<p class="has-base-600-color has-text-color has-small-font-size"><?php esc_html_e( 'E-commerce platform and marketing strategy for an organic wellness brand, driving consistent month-over-month revenue growth.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"},"border":{"top":{"color":"var:preset|color|base-200","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-200);border-top-width:1px">
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"brand","fontSize":"large"} -->
<p class="has-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '+180%', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-500","fontSize":"x-small"} -->
<p class="has-base-500-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Online revenue', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"brand","fontSize":"large"} -->
<p class="has-brand-color has-text-color has-large-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e( '-45%', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"base-500","fontSize":"x-small"} -->
<p class="has-base-500-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Bounce rate', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
