<?php
/**
 * Title: Content FAQ
 * Slug: lexiadesign/content-faq
 * Description:
 * Categories: lexiadesign/content
 * Keywords: faq, text, content
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 *
 * @ai-section-type: content
 * @ai-color-scheme: light
 * @ai-layout: centered, grid-2col
 * @ai-suggested-position: middle
 * @ai-slots: section_label, section_heading, section_description, faq_1_question, faq_1_answer, faq_2_question, faq_2_answer, faq_3_question, faq_3_answer, faq_4_question, faq_4_answer, faq_5_question, faq_5_answer, faq_6_question, faq_6_answer, cta_heading, cta_description, cta_button_text
 * @ai-repeater: faq_items, min:2, max:6
 */

?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-bottom:0"><!-- wp:group {"align":"wide","className":"alignfull feature-boxes","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group alignwide alignfull feature-boxes" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"has-text-color","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-text-color has-x-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Frequently Asked Questions', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Common Questions, Clear Answers', 'lexiadesign' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Find answers to our most frequently asked questions below. If you need additional information, our team is always happy to help.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e( 'How long does a typical project take?', 'lexiadesign' );?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Most projects are completed within 4 to 12 weeks, depending on scope and complexity. During our initial consultation, we provide a detailed timeline so you know exactly what to expect at every stage.', 'lexiadesign' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e( 'What is included in your packages?', 'lexiadesign' );?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Each package includes discovery, design, development, testing, and launch support. We tailor the scope to your goals, whether you need a simple landing page or a full-scale digital platform.', 'lexiadesign' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Do you offer ongoing support?', 'lexiadesign' );?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Yes. We offer flexible maintenance and support plans to keep your site secure, up to date, and performing at its best. Our team is available for updates, troubleshooting, and ongoing improvements.', 'lexiadesign' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e( 'How do you handle revisions?', 'lexiadesign' );?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We include dedicated revision rounds at each milestone to ensure you are completely satisfied. Feedback is collected through a structured review process, keeping the project on track and aligned with your vision.', 'lexiadesign' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e( 'What industries do you work with?', 'lexiadesign' );?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'We serve clients across a wide range of industries, including technology, healthcare, finance, retail, and professional services. Our adaptable process ensures we deliver solutions that fit your specific market.', 'lexiadesign' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading" style="font-style:normal;font-weight:600"><?php esc_html_e( 'How do we get started?', 'lexiadesign' );?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Getting started is simple. Reach out through our contact form or give us a call to schedule a free consultation. We will discuss your goals, recommend an approach, and provide a clear proposal.', 'lexiadesign' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"border":{"radius":"15px"},"spacing":{"padding":{"right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}}},"backgroundColor":"brand-100"} -->
<div class="wp-block-columns has-brand-100-background-color has-background" style="border-radius:15px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:column {"width":"15%"} -->
<div class="wp-block-column" style="flex-basis:15%"><!-- wp:image {"id":58,"width":"60px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-circle"} -->
<figure class="wp-block-image size-full is-resized is-style-circle"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people-3.webp" alt="" class="wp-image-58" style="aspect-ratio:1;object-fit:cover;width:60px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|base-700"}}}},"textColor":"base-700","fontSize":"medium"} -->
<p class="has-base-700-color has-text-color has-link-color has-medium-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Still have questions?', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-700"}}}},"textColor":"base-700"} -->
<p class="has-base-700-color has-text-color has-link-color"><?php esc_html_e( 'Our team is ready to help you find the right solution.', 'lexiadesign' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"brand","textColor":"base-0","width":100,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-0-color"}}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link has-base-0-color has-brand-background-color has-text-color has-background has-link-color wp-element-button"><?php esc_html_e( 'Contact Us →', 'lexiadesign' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
