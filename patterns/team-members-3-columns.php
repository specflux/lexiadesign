<?php
/**
 * Title: Team Members 3 Columns
 * Slug: lexiadesign/team-members-3-columns
 * Description: Team section with photos, names, roles, social links in elevated cards
 * Categories: lexiadesign/team
 * Keywords: team, members
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 * @ai-section-type: team
 * @ai-color-scheme: light
 * @ai-layout: grid-3col, centered
 * @ai-suggested-position: middle
 * @ai-slots: section_heading, section_description, member_1_name, member_1_role, member_2_name, member_2_role, member_3_name, member_3_role
 * @ai-repeater: team_member, min:3, max:3
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--small)">

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xx-small"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group">
<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontStyle":"normal","fontWeight":"600"}},"textColor":"brand","fontSize":"x-small"} -->
<p class="has-text-align-center has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Our Team', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Meet Our Team', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-500"} -->
<p class="has-text-align-center has-base-500-color has-text-color"><?php esc_html_e( 'A dedicated group of strategists, designers, and engineers committed to delivering exceptional results for every client.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-hover-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px","width":"1px","color":"var:preset|color|base-200"}},"backgroundColor":"base-0","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group is-style-hover-lift has-border-color has-base-0-background-color has-background" style="border-color:var(--wp--preset--color--base-200);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:image {"sizeSlug":"full","className":"is-style-circle","style":{"border":{"width":"3px","color":"var:preset|color|brand-100"}},"width":"120px","height":"120px"} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:var(--wp--preset--color--brand-100);border-width:3px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" style="width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e( 'Jane Potter', 'lexiadesign' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"brand","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Content Strategist', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"base-400","iconColorValue":"#94a3b8","align":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"https://x.com","service":"twitter"} /-->
<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-hover-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px","width":"1px","color":"var:preset|color|base-200"}},"backgroundColor":"base-0","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group is-style-hover-lift has-border-color has-base-0-background-color has-background" style="border-color:var(--wp--preset--color--base-200);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:image {"sizeSlug":"full","className":"is-style-circle","style":{"border":{"width":"3px","color":"var:preset|color|brand-100"}},"width":"120px","height":"120px"} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:var(--wp--preset--color--brand-100);border-width:3px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-5.webp" alt="" style="width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e( 'Alex Wong', 'lexiadesign' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"brand","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Lead Developer', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"base-400","iconColorValue":"#94a3b8","align":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"https://x.com","service":"twitter"} /-->
<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:group {"className":"is-style-hover-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-small"},"border":{"radius":"12px","width":"1px","color":"var:preset|color|base-200"}},"backgroundColor":"base-0","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group is-style-hover-lift has-border-color has-base-0-background-color has-background" style="border-color:var(--wp--preset--color--base-200);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
<!-- wp:image {"sizeSlug":"full","className":"is-style-circle","style":{"border":{"width":"3px","color":"var:preset|color|brand-100"}},"width":"120px","height":"120px"} -->
<figure class="wp-block-image size-full is-resized is-style-circle has-border-color" style="border-color:var(--wp--preset--color--brand-100);border-width:3px"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-1.webp" alt="" style="width:120px;height:120px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"medium"} -->
<h4 class="wp-block-heading has-text-align-center has-medium-font-size"><?php esc_html_e( 'Sarah Mitchell', 'lexiadesign' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"brand","fontSize":"x-small","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<p class="has-text-align-center has-brand-color has-text-color has-x-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Creative Director', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"base-400","iconColorValue":"#94a3b8","align":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-small"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only">
<!-- wp:social-link {"url":"https://x.com","service":"twitter"} /-->
<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
