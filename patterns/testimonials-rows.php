<?php
/**
 * Title: Testimonials Rows
 * Slug: lexiadesign/testimonials-rows
 * Description:
 * Categories: lexiadesign/testimonial
 * Keywords: testimonial, text, review, rating, avatar, card
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: testimonial
 * @ai-color-scheme: light
 * @ai-layout: grid-2col, full-width
 * @ai-suggested-position: middle
 * @ai-slots: section-heading, section-description, testimonial-quote-1, author-name-1, author-role-1, testimonial-quote-2, author-name-2, author-role-2, testimonial-quote-3, author-name-3, author-role-3, testimonial-quote-4, author-name-4, author-role-4, testimonial-quote-5, author-name-5, author-role-5, testimonial-quote-6, author-name-6, author-role-6
 * @ai-repeater: testimonial_card, min:2, max:6
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","right":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"brand-50","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-brand-50-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-group">
<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_e( 'Trusted by businesses like yours', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html_e( 'We measure our success by the results our clients achieve. Here\'s what they have to say about working with our team.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"alignwide"} -->
<div class="wp-block-group alignwide">
<!-- wp:columns {"className":"alignwide are-vertically-aligned-center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( '"Our revenue grew 35% within six months of launching the new website. The design team nailed our brand voice, and the site practically sells for us now. The ROI on this project has been incredible."', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":33080,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-1.webp" alt="" class="wp-image-33080" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><?php echo esc_html_e( 'Lauren Chen', 'lexiadesign' ); ?></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'Founder, Bloom Skincare', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( '"The quality of the design work is outstanding. Every detail was considered, from typography to mobile responsiveness. Our customers constantly compliment the site, and our bounce rate dropped by half after the redesign."', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-4.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><strong><?php echo esc_html_e( 'Tom Ashworth', 'lexiadesign' ); ?></strong></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'Director, Ashworth Legal', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"alignwide are-vertically-aligned-center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'They turned our project around in just four weeks. We needed a full site rebuild before our product launch and they delivered ahead of schedule without cutting corners. The speed and professionalism were exactly what we needed during a critical growth phase.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":33080,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-2.webp" alt="" class="wp-image-33080" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><strong><?php echo esc_html_e( 'James Okafor', 'lexiadesign' ); ?></strong></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'CTO, Peakline Software', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'What impressed me most was how well they communicated throughout the project. No jargon, no disappearing acts. Every question was answered within hours and they proactively flagged things we hadn\'t even thought of. It felt like working with an extension of our own team.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-5.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><?php echo esc_html_e( 'Nina Alvarez', 'lexiadesign' ); ?></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'Operations Manager, Relay Logistics', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'They didn\'t just build us a website, they helped us rethink our entire digital strategy. From SEO recommendations to content structure, their insights have shaped how we approach marketing. We\'ve referred three other businesses to them already.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-4.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><?php echo esc_html_e( 'Daniel Ortiz', 'lexiadesign' ); ?></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'Owner, Ortiz Dental Group', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"alignwide are-vertically-aligned-center"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center">
<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'We came in with a vague brief and they turned it into something we\'re genuinely proud of. The branding package and website work together perfectly. Every time someone visits our site, they immediately understand who we are and what we stand for.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":33080,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-3.webp" alt="" class="wp-image-33080" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><?php echo esc_html_e( 'Sophie Brennan', 'lexiadesign' ); ?></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'Co-founder, Kindred Coffee Roasters', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"width":"0px","style":"none"}},"className":"is-style-column-box-shadow"} -->
<div class="wp-block-column is-vertically-aligned-center is-style-column-box-shadow" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}},"border":{"radius":"14px"}},"backgroundColor":"brand-100","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-brand-100-background-color has-background" style="border-radius:14px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html_e( 'As a small business owner, I was nervous about the investment. But they walked me through every step, kept things on budget, and the finished site has already paid for itself through new customer enquiries. I wish I\'d done this years ago.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group">
<!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle">
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-5.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:paragraph -->
<p><strong><strong><strong><?php echo esc_html_e( 'Karen Whitfield', 'lexiadesign' ); ?></strong></strong></strong>
</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php echo esc_html_e( 'Owner, The Pressed Flower Studio', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
