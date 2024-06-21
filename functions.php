<?php
/**
 * Lexia Design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lexia Design
 * @since Lexia Design 1.0
 */

 // Define constants
define('THEME_NAMESPACE', __NAMESPACE__);
define('THEME_TEXT_DOMAIN', 'Lexia');

/**
 * Register block styles.
 */

if ( ! function_exists( 'lexia_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Lexia Design 1.0
	 * @return void
	 */
	function lexia_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => esc_html_x( 'Arrow icon', 'lexia' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => esc_html_x( 'Pill', 'lexia' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => esc_html_x( 'Checkmark', 'lexia' ),
			)
		);
	}
endif;

add_action( 'init', 'lexia_block_styles' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'lexia_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Lexia Design 1.0
	 * @return void
	 */
	function lexia_pattern_categories() {

		$block_pattern_categories = array(
			'lexiadesign/blog-blocks'           => array(
				'label' => esc_html_x( 'Blog Blocks', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of blog block layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/call-to-action' => array(
				'label' => esc_html_x( 'Call To Action', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of call to action layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/contact' => array(
				'label' => esc_html_x( 'Contact', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of contact layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/content' => array(
				'label' => esc_html_x( 'Content', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of content layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/hero'           => array(
				'label' => esc_html_x( 'Hero', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of hero layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/features'       => array(
				'label' => esc_html_x( 'Features', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of features layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/footer'       => array(
				'label' => esc_html_x( 'Footer', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of footer layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/header'       => array(
				'label' => esc_html_x( 'Header', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of header layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/pages'          => array(
				'label' => esc_html_x( 'Pages', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of pages layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/posts'          => array(
				'label' => esc_html_x( 'Posts', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of posts layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/pricing'        => array(
				'label' => esc_html_x( 'Pricing', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of pricing layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/team'    => array(
				'label' => esc_html_x( 'Team', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of team layouts.', THEME_NAMESPACE ),
			),
			'lexiadesign/testimonial'    => array(
				'label' => esc_html_x( 'Testimonials', THEME_NAMESPACE ),
				'description' => esc_html_x( 'A collection of testimonial layouts.', THEME_NAMESPACE ),
			),
		);

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}
	}
endif;

add_action( 'init', 'lexia_pattern_categories' );
