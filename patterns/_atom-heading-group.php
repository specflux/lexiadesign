<?php
/**
 * Title: Atom - Heading Group
 * Slug: lexiadesign/_atom-heading-group
 * Description: An overline, heading, and subheading group atom for AI assembler use.
 * Categories: lexiadesign/atoms
 * Keywords: heading, overline, subheading, atom
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @ai-section-type: atom
 * @ai-color-scheme: light
 * @ai-layout: vertical
 * @ai-suggested-position: any
 * @ai-slots: overline, heading, subheading
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"0.1em"}},"textColor":"brand","fontSize":"text-sm"} -->
<p class="has-text-align-center has-brand-color has-text-color has-text-sm-font-size" style="font-style:normal;font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php esc_html_e( 'Overline Text', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-900"}}}},"textColor":"base-900"} -->
<h2 class="wp-block-heading has-text-align-center has-base-900-color has-text-color has-link-color"><?php esc_html_e( 'Main Heading Goes Here', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-700","fontSize":"medium"} -->
<p class="has-text-align-center has-base-700-color has-text-color has-medium-font-size"><?php esc_html_e( 'A brief subheading that provides additional context and supports the main heading above.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
