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
        $block_styles = array(
            'core/details' => array(
                array( 'name' => 'arrow-icon-details', 'label' => 'Arrow icon' ),
            ),
            'core/post-terms' => array(
                array( 'name' => 'pill', 'label' => 'Pill' ),
            ),
            'core/list' => array(
                array( 'name' => 'checkmark-list', 'label' => 'Checkmark' ),
                array( 'name' => 'arrow-list', 'label' => 'Arrow' ),
                array( 'name' => 'no-marker', 'label' => 'No Marker' ),
            ),
            'core/button' => array(
                array( 'name' => 'outline', 'label' => 'Outline' ),
                array( 'name' => 'ghost', 'label' => 'Ghost' ),
                array( 'name' => 'pill', 'label' => 'Pill' ),
                array( 'name' => 'elevated', 'label' => 'Elevated' ),
                array( 'name' => 'text-only', 'label' => 'Text Only' ),
            ),
            'core/separator' => array(
                array( 'name' => 'separator-dotted', 'label' => 'Dotted' ),
                array( 'name' => 'separator-thin', 'label' => 'Thin' ),
            ),
            'core/image' => array(
                array( 'name' => 'rounded', 'label' => 'Rounded' ),
                array( 'name' => 'circle', 'label' => 'Circle' ),
                array( 'name' => 'shadow', 'label' => 'Shadow' ),
                array( 'name' => 'border-frame', 'label' => 'Border Frame' ),
                array( 'name' => 'grayscale-hover', 'label' => 'Grayscale Hover' ),
            ),
            'core/group' => array(
                array( 'name' => 'background-blur', 'label' => 'Background Blur' ),
                array( 'name' => 'shadow-light', 'label' => 'Shadow Light' ),
                array( 'name' => 'shadow-dark', 'label' => 'Shadow Dark' ),
                array( 'name' => 'glass', 'label' => 'Glass' ),
                array( 'name' => 'hover-lift', 'label' => 'Hover Lift' ),
                array( 'name' => 'card-elevated', 'label' => 'Card Elevated' ),
                array( 'name' => 'border-left-accent', 'label' => 'Left Accent Border' ),
                array( 'name' => 'gradient-subtle', 'label' => 'Subtle Gradient' ),
            ),
            'core/columns' => array(
                array( 'name' => 'column-box-shadow', 'label' => 'Box Shadow' ),
                array( 'name' => 'columns-gap-none', 'label' => 'No Gap' ),
            ),
            'core/heading' => array(
                array( 'name' => 'underline-accent', 'label' => 'Underline Accent' ),
                array( 'name' => 'overline', 'label' => 'Overline' ),
            ),
            'core/quote' => array(
                array( 'name' => 'left-border', 'label' => 'Left Border' ),
            ),
            'core/paragraph' => array(
                array( 'name' => 'lead', 'label' => 'Lead Text' ),
                array( 'name' => 'highlight', 'label' => 'Highlight' ),
            ),
            'core/cover' => array(
                array( 'name' => 'rounded-cover', 'label' => 'Rounded' ),
            ),
            'core/table' => array(
                array( 'name' => 'striped', 'label' => 'Striped Rows' ),
            ),
        );

        foreach ( $block_styles as $block => $styles ) {
            foreach ( $styles as $style ) {
                register_block_style( $block, $style );
            }
        }
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
            'lexiadesign/atoms' => array(
                'label'  => esc_html__( 'Atoms', 'lexiadesign' ),
                'description'  => esc_html__( 'Atomic building blocks for the AI pattern assembler.', 'lexiadesign' ),
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