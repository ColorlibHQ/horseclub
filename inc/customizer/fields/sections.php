<?php 
/**
 * @Packge     : Horseclub
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'horseclub_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'horseclub' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(
    /**
     * General Section
     */
    array(
        'id'   => 'horseclub_general_options_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'horseclub' ),
            'panel'    => 'horseclub_options_panel',
            'priority' => 1,
        ),
    ),
    /**
     * Header Section
     */
    array(
        'id'   => 'horseclub_headertop_options_section',
        'args' => array(
            'title'    => esc_html__( 'Header Top', 'horseclub' ),
            'panel'    => 'horseclub_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Blog Section
     */
    array(
        'id'   => 'horseclub_blog_options_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'horseclub' ),
            'panel'    => 'horseclub_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * 404 Page Section
     */
    array(
        'id'   => 'horseclub_fof_options_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'horseclub' ),
            'panel'    => 'horseclub_options_panel',
            'priority' => 6,
        ),
    ),
    /**
     * Footer Section
     */
    array(
        'id'   => 'horseclub_footer_options_section',
        'args' => array(
            'title'    => esc_html__( 'Footer', 'horseclub' ),
            'panel'    => 'horseclub_options_panel',
            'priority' => 7,
        ),
    ),

);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Colorlib_Customizer::add_multiple( $collection );
