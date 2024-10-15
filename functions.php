<?php
/**
 * Lexia Design functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lexia Design
 * @since Lexia Design 1.0
 */

define( 'LEXIADESIGN_NAMESPACE', __NAMESPACE__);
define( 'LEXIADESIGN_TEXT_DOMAIN', 'lexiadesign' );

/**
 * Register block styles.
 */

if ( !function_exists( 'lexiadesign_block_styles' )):
    /**
     * Register custom block styles
     *
     * @since Lexia Design 1.0
     * @return void
     */
    function lexiadesign_block_styles()
    {

        register_block_style(
            'core/details',
            array(
                'name' => 'arrow-icon-details',
                'label' => 'Arrow icon',
            )
        );
        register_block_style(
            'core/post-terms',
            array(
                'name' => 'pill',
                'label' => 'Pill',
            )
        );
        register_block_style(
            'core/list',
            array(
                'name' => 'checkmark-list',
                'label' => 'Checkmark',
            )
        );
    } 
endif;

add_action( 'init', 'lexiadesign_block_styles' );

/**
 * Register pattern categories.
 */

if (!function_exists( 'lexiadesign_pattern_categories' )):
    /**
     * Register pattern categories
     *
     * @since Lexia Design 1.0
     * @return void
     */
    function lexiadesign_pattern_categories()
{

        $block_pattern_categories = array(
            'lexiadesign/blog-blocks' => array(
                'label' => esc_html__( 'Blog Blocks', 'lexiadesign' ),
                'description' => esc_html__( 'A collection of blog block layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/call-to-action' => array(
                'label' => esc_html__( 'Call To Action', 'lexiadesign' ),
                'description' => esc_html__( 'A collection of call to action layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/contact' => array(
                'label'  => esc_html__( 'Contact', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of contact layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/content' => array(
                'label'  => esc_html__( 'Content', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of content layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/hero' => array(
                'label'  => esc_html__( 'Hero', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of hero layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/features' => array(
                'label'  => esc_html__( 'Features', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of features layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/footer' => array(
                'label'  => esc_html__( 'Footer', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of footer layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/header' => array(
                'label'  => esc_html__( 'Header', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of header layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/pages' => array(
                'label'  => esc_html__( 'Pages', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of pages layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/posts' => array(
                'label'  => esc_html__( 'Posts', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of posts layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/pricing' => array(
                'label'  => esc_html__( 'Pricing', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of pricing layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/team' => array(
                'label'  => esc_html__( 'Team', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of team layouts.', 'lexiadesign' ),
            ),
            'lexiadesign/testimonial' => array(
                'label'  => esc_html__( 'Testimonials', 'lexiadesign' ),
                'description'  => esc_html__( 'A collection of testimonial layouts.', 'lexiadesign' ),
            ),
        );

        foreach ($block_pattern_categories as $name => $properties) {
            register_block_pattern_category($name, $properties);
        }
    }
endif;

add_action( 'init', 'lexiadesign_pattern_categories' );


/**
 * Load custom block styles only when the block is used.
 */
function lexiadesign_enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );


	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "lexia-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', 'lexiadesign_enqueue_custom_block_styles' );