<?php
/**
 * Title: Atom - Team Member
 * Slug: lexiadesign/_atom-team-member
 * Description: A single team member card with photo, name, role, and social links for AI assembler use.
 * Categories: lexiadesign/atoms
 * Keywords: team, member, profile, atom
 * Viewport Width: 400
 * Block Types:
 * Post Types:
 * Inserter: false
 *
 * @ai-section-type: atom
 * @ai-color-scheme: light
 * @ai-layout: vertical
 * @ai-suggested-position: any
 * @ai-slots: member_photo_url, member_name, member_role, social_link_1, social_link_2, social_link_3
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"15px"}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" style="border-radius:15px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-900"}}}},"textColor":"base-900"} -->
<h4 class="wp-block-heading has-text-align-center has-base-900-color has-text-color has-link-color"><?php esc_html_e( 'Jane Potter', 'lexiadesign' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"base-700","fontSize":"small"} -->
<p class="has-text-align-center has-base-700-color has-text-color has-small-font-size"><?php esc_html_e( 'Content Strategist', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"base-700","iconColorValue":"#636381","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"https://x.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
