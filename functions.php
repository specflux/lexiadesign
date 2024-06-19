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
				'label'        => __( 'Arrow icon', 'lexia' ),
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'lexia' ),
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'lexia' ),
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
			'lexia/blog-blocks'           => array(
				'label' => __( 'Blog Blocks', THEME_NAMESPACE ),
				'description' => __( 'A collection of blog block layouts.', THEME_NAMESPACE ),
			),
			'lexia/call-to-action' => array(
				'label' => __( 'Call To Action', THEME_NAMESPACE ),
				'description' => __( 'A collection of call to action layouts.', THEME_NAMESPACE ),
			),
			'lexia/contact' => array(
				'label' => __( 'Contact', THEME_NAMESPACE ),
				'description' => __( 'A collection of contact layouts.', THEME_NAMESPACE ),
			),
			'lexia/content' => array(
				'label' => __( 'Content', THEME_NAMESPACE ),
				'description' => __( 'A collection of content layouts.', THEME_NAMESPACE ),
			),
			'lexia/hero'           => array(
				'label' => __( 'Hero', THEME_NAMESPACE ),
				'description' => __( 'A collection of hero layouts.', THEME_NAMESPACE ),
			),
			'lexia/features'       => array(
				'label' => __( 'Features', THEME_NAMESPACE ),
				'description' => __( 'A collection of features layouts.', THEME_NAMESPACE ),
			),
			'lexia/footer'       => array(
				'label' => __( 'Footer', THEME_NAMESPACE ),
				'description' => __( 'A collection of footer layouts.', THEME_NAMESPACE ),
			),
			'lexia/header'       => array(
				'label' => __( 'Header', THEME_NAMESPACE ),
				'description' => __( 'A collection of header layouts.', THEME_NAMESPACE ),
			),
			'lexia/pages'          => array(
				'label' => __( 'Pages', THEME_NAMESPACE ),
				'description' => __( 'A collection of pages layouts.', THEME_NAMESPACE ),
			),
			'lexia/posts'          => array(
				'label' => __( 'Posts', THEME_NAMESPACE ),
				'description' => __( 'A collection of posts layouts.', THEME_NAMESPACE ),
			),
			'lexia/pricing'        => array(
				'label' => __( 'Pricing', THEME_NAMESPACE ),
				'description' => __( 'A collection of pricing layouts.', THEME_NAMESPACE ),
			),
			'lexia/team'    => array(
				'label' => __( 'Team', THEME_NAMESPACE ),
				'description' => __( 'A collection of team layouts.', THEME_NAMESPACE ),
			),
			'lexia/testimonial'    => array(
				'label' => __( 'Testimonials', THEME_NAMESPACE ),
				'description' => __( 'A collection of testimonial layouts.', THEME_NAMESPACE ),
			),
		);

		foreach ( $block_pattern_categories as $name => $properties ) {
			register_block_pattern_category( $name, $properties );
		}
	}
endif;

add_action( 'init', 'lexia_pattern_categories' );
