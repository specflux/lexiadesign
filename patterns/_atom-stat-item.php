<?php
/**
 * Title: Atom - Stat Item
 * Slug: lexiadesign/_atom-stat-item
 * Description: A single stat item with large number and label for AI assembler use.
 * Categories: lexiadesign/atoms
 * Keywords: stat, number, metric, atom
 * Viewport Width: 300
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @ai-section-type: atom
 * @ai-color-scheme: brand
 * @ai-layout: vertical
 * @ai-suggested-position: any
 * @ai-slots: stat_number, stat_label
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-900"}}}},"textColor":"base-900","fontSize":"x-large"} -->
<h3 class="wp-block-heading has-text-align-center has-base-900-color has-text-color has-link-color has-x-large-font-size"><strong><?php esc_html_e( '10,000+', 'lexiadesign' ); ?></strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-700","fontSize":"small"} -->
<p class="has-text-align-center has-base-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Active users on the platform', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
