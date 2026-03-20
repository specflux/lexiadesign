<?php
/**
 * Title: Content with Centered statement
 * Slug: lexiadesign/content-with-text-centered-statement
 * Description: Large centered statement with brand gradient background and decorative typography
 * Categories: lexiadesign/content
 * Keywords: content, text, statement, quote, centered
 * Viewport width: 1500
 *
 * @ai-section-type: content
 * @ai-color-scheme: brand
 * @ai-layout: centered, full-width
 * @ai-suggested-position: middle
 * @ai-slots: statement_heading
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"color":{"gradient":"linear-gradient(145deg, var(--wp--preset--color--brand-50) 0%, var(--wp--preset--color--base-0) 50%, var(--wp--preset--color--brand-50) 100%)"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small);background:linear-gradient(145deg, var(--wp--preset--color--brand-50) 0%, var(--wp--preset--color--base-0) 50%, var(--wp--preset--color--brand-50) 100%)">

<!-- wp:group {"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.02em","lineHeight":"1.3"}},"fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.02em;line-height:1.3"><?php esc_html_e( 'We believe great design is not just how it looks, but how it works. Every pixel serves a purpose.', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-small"}}},"backgroundColor":"brand","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-brand-background-color has-background is-style-default" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--xx-small)"/>
<!-- /wp:separator -->

<!-- wp:paragraph {"align":"center","textColor":"base-500","fontSize":"small"} -->
<p class="has-text-align-center has-base-500-color has-text-color has-small-font-size"><?php esc_html_e( 'Our design philosophy', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
