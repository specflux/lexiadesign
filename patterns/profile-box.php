<?php
/**
 * Title: Profile Box
 * Slug: lexiadesign/profile-box
 * Description: A profile box with an avatar, links to social media, and buttons
 * Categories: lexiadesign/call-to-action
 * Keywords: links, linktree, buttons, profile, bio
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"radius":"15px"}},"backgroundColor":"brand-50","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-50-background-color has-background" style="border-radius:15px;margin-top:0;padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small)">
<!-- wp:group {"className":"alignfull has-tertiary-background-color has-background"} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background">
<!-- wp:image {"id":57,"width":"132px","height":"132px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-circle"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" class="wp-image-57" style="width:132px;height:132px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php echo esc_html_e( 'Rebecca Martins', 'lexiadesign' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php echo esc_html_e( 'Ditch the LinkTree Jungle and Build Your Link Oasis Here!', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php echo esc_html_e( 'Tired of having your followers navigate a maze of links?  This is your one-stop shop for all things you! ✨', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php echo esc_html_e( 'From your dazzling social media presence to your stellar website, connect your followers to everything that matters with just one link.  No more monkeying around, just pure connection magic! 🪄.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconBackgroundColor":"brand","iconBackgroundColorValue":"#4483ed","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|small"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links aligncenter has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--small)">
<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
