<?php
/**
 * Title: Call to Action with Lead Magnet
 * Slug: lexiadesign/call-to-action-with-lead-magnet
 * Description: A call-to-action box to offer a free download or sign up user to an email list.
 * Categories: lexiadesign/call-to-action
 * Keywords: download, button, cta, email
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|base-100"},":hover":{"color":{"text":"var:preset|color|base-0"}}}}},"backgroundColor":"brand-800","textColor":"base-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-100-color has-brand-800-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp","id":33150,"dimRatio":0,"focalPoint":{"x":0.48,"y":0.47},"minHeight":281,"minHeightUnit":"px","isDark":false,"style":{"color":{"duotone":"unset"}},"className":"is-style-rounded-cover"} -->
<div class="wp-block-cover is-light is-style-rounded-cover" style="min-height:281px">
<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim">
</span><img class="wp-block-cover__image-background wp-image-33150" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp" style="object-position:48% 47%" data-object-fit="cover" data-object-position="48% 47%"/><div class="wp-block-cover__inner-container">
<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size">

</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
<!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0"}}}},"textColor":"base-0"} -->
<h3 class="wp-block-heading has-base-0-color has-text-color has-link-color">

    <?php esc_html_x( 'Ditch the design struggle', 'Sample heading', 'lexiadesign' ); ?>

</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">

    <?php esc_html_x( 'Unleash your inner website wizard with the brand new WordPress Site Editor and Lexia block theme! Craft captivating, one-of-a-kind websites that\'ll have your visitors saying "Wowzers!". So ditch the design struggle and get ready to build something truly magnificent!', 'Sample content', 'lexiadesign' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"backgroundColor":"brand","width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100">
<a class="wp-block-button__link has-brand-background-color has-background wp-element-button" href="<?php echo site_url(); ?>">
<?php esc_html_e('Download Lexia for Free !', 'lexiadesign');?>
</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->