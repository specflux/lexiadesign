<?php
/**
 * Title: Social Profile Card
 * Slug: social-profile-card
 * Description:
 * Categories: lexiadesignwp/card
 * Keywords: profile, links, social, twitter, facebook, instagram, linktree, avatar, bio
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"0","left":"0"},"blockGap":"0"},"border":{"radius":"5px"}},"className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default" style="border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"gradient":"blue","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-blue-gradient-background has-background" style="border-top-left-radius:5px;border-top-right-radius:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":56,"width":132,"height":132,"sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-1.webp" alt="" class="wp-image-56" width="132" height="132"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"base"} -->
<h3 class="wp-block-heading has-text-align-center has-base-color has-text-color">John Doe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"tertiary"} -->
<p class="has-text-align-center has-tertiary-color has-text-color">The Most Awesome Person</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":{"bottomLeft":"5px","bottomRight":"5px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-bottom-left-radius:5px;border-bottom-right-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color">Showcase your social media accounts using this sections</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#4d34fa","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|medium"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--medium)">
<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
