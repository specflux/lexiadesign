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
define('THEME_TEXT_DOMAIN', 'lexiadesign');

/**
 * Register block styles.
 */

if (!function_exists('lexia_block_styles')):
    /**
     * Register custom block styles
     *
     * @since Lexia Design 1.0
     * @return void
     */
    function lexia_block_styles()
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

add_action('init', 'lexia_block_styles');

/**
 * Register pattern categories.
 */

if (!function_exists('lexia_pattern_categories')):
    /**
     * Register pattern categories
     *
     * @since Lexia Design 1.0
     * @return void
     */
    function lexia_pattern_categories()
{

        $block_pattern_categories = array(
            'lexiadesign/blog-blocks' => array(
                'label' => 'Blog Blocks',
                'description' => 'A collection of blog block layouts.',
            ),
            'lexiadesign/call-to-action' => array(
                'label' => 'Call To Action',
                'description' => 'A collection of call to action layouts.',
            ),
            'lexiadesign/contact' => array(
                'label' => 'Contact',
                'description' => 'A collection of contact layouts.',
            ),
            'lexiadesign/content' => array(
                'label' => 'Content',
                'description' => 'A collection of content layouts.',
            ),
            'lexiadesign/hero' => array(
                'label' => 'Hero',
                'description' => 'A collection of hero layouts.',
            ),
            'lexiadesign/features' => array(
                'label' => 'Features',
                'description' => 'A collection of features layouts.',
            ),
            'lexiadesign/footer' => array(
                'label' => 'Footer',
                'description' => 'A collection of footer layouts.',
            ),
            'lexiadesign/header' => array(
                'label' => 'Header',
                'description' => 'A collection of header layouts.',
            ),
            'lexiadesign/pages' => array(
                'label' => 'Pages',
                'description' => 'A collection of pages layouts.',
            ),
            'lexiadesign/posts' => array(
                'label' => 'Posts',
                'description' => 'A collection of posts layouts.',
            ),
            'lexiadesign/pricing' => array(
                'label' => 'Pricing',
                'description' => 'A collection of pricing layouts.',
            ),
            'lexiadesign/team' => array(
                'label' => 'Team',
                'description' => 'A collection of team layouts.',
            ),
            'lexiadesign/testimonial' => array(
                'label' => 'Testimonials',
                'description' => 'A collection of testimonial layouts.',
            ),
        );

        foreach ($block_pattern_categories as $name => $properties) {
            register_block_pattern_category($name, $properties);
        }
    }
endif;

add_action('init', 'lexia_pattern_categories');
