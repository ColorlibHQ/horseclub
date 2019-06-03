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
 * General Section Fields
 ***********************************/


// Theme Main Color Picker
Epsilon_Customizer::add_field(
    'horseclub_themecolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Main Color.', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_general_options_section',
        'default'     => '#f45622',
    )
);
// Google map api key field
$url = 'https://developers.google.com/maps/documentation/geocoding/get-api-key';

Epsilon_Customizer::add_field(
    'horseclub_map_apikey',
    array(
        'type'              => 'text',
        'label'             => esc_html__( 'Google map api key', 'horseclub' ),
        'description'       => sprintf( __( 'Set google map api key. To get api key %s click here %s.', 'horseclub' ), '<a target="_blank" href="'.esc_url( $url  ).'">', '</a>' ),
        'section'           => 'horseclub_general_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => '',
        
    )
);
/***********************************
 * Header Section Fields
 ***********************************/
Epsilon_Customizer::add_field(
    'horseclub_reverse_email_position',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Reverse Email & Phone Position', 'horseclub' ),
        'section'     => 'horseclub_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header top left text
Epsilon_Customizer::add_field(
    'horseclub_header_left_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Left Text', 'horseclub' ),
        'section'     => 'horseclub_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'info@example.com', 'horseclub' ),
    )
);
// Header top left text
Epsilon_Customizer::add_field(
    'horseclub_header_phone',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Header Top Phone Number', 'horseclub' ),
        'section'     => 'horseclub_headertop_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( '+880 123 12 658 439', 'horseclub' ),
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'horseclub_header_lefttext',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Left Text Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '#000000',
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'horseclub_header_phone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Top Phone Number Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '#000000',
    )
);
// Header Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'horseclub_header_navbar_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Background Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '',
    )
);
// Header Sticky  Nav Bar Background Color Picker
Epsilon_Customizer::add_field(
    'horseclub_header_navbarsticky_bgColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Sticky Nav Bar Background Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '',
    )
);
// Header Nav Bar Menu Color Picker
Epsilon_Customizer::add_field(
    'horseclub_header_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '#222',
    )
);
// Header Nav Bar Menu Hover Color Picker
Epsilon_Customizer::add_field(
    'horseclub_header_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Nav Bar Menu Hover Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '#f45622',
    )
);
// Header sticky nav bar menu color picker
Epsilon_Customizer::add_field(
    'horseclub_header_sticky_navbar_menuColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '#222',
    )
);
// Header sticky nav bar menu hover color picker
Epsilon_Customizer::add_field(
    'horseclub_header_sticky_navbar_menuHovColor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header Nav Bar Menu Hover Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_headertop_options_section',
        'default'     => '#f45622',
    )
);
// Page Header Background Color Picker
Epsilon_Customizer::add_field(
    'horseclub_headerbgcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Background Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#999',
    )
);
// Page Header text Color Picker
Epsilon_Customizer::add_field(
    'horseclub_headertextcolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Text Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => '#fff',
    )
);
// Header overlay switch field
Epsilon_Customizer::add_field(
    'horseclub-headeroverlay-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Toggle header overlay', 'horseclub' ),
        'section'     => 'colors',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
// Header overlay color
Epsilon_Customizer::add_field(
    'horseclub_headeroverlaycolor',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Overlay Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'colors',
        'default'     => 'rgba(0, 0, 0, 0.7)',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/


// Post excerpt length field
Epsilon_Customizer::add_field(
    'horseclub_post_excerpt',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Post Excerpt', 'horseclub' ),
        'description' => esc_html__( 'Set post excerpt length.', 'horseclub' ),
        'section'     => 'horseclub_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);
// Blog sidebar layout field
Epsilon_Customizer::add_field(
    'horseclub-blog-sidebar-settings',
    array(
        'type'     => 'epsilon-layouts',
        'label'    => esc_html__( 'Blog Layout', 'horseclub' ),
        'section'  => 'horseclub_blog_options_section',
        'description' => esc_html__( 'Select the option to set blog page sidebar position.', 'horseclub' ),
        'layouts'  => array(
            '1' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/one-column.png',
            '2' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleright.jpg',
            '3' => get_template_directory_uri() . '/inc/libraries/epsilon-framework/assets/img/epsilon-section-titleleft.jpg',
        ),
        'default'  => array(
            'columnsCount' => 1,
            'columns'      => array(
                1 => array(
                    'index' => 1,
                ),
                2 => array(
                    'index' => 2,
                ),
                3 => array(
                    'index' => 3,
                ),
            ),
        ),
        'min_span' => 4,
        'fixed'    => true
    )
);
if( defined( 'HORSECLUB_COMPANION_VERSION' ) ) {
// Header social switch field
Epsilon_Customizer::add_field(
    'horseclub-blog-social-share-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Social Share Show/Hide', 'horseclub' ),
        'section'     => 'horseclub_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);

// Header social switch field
Epsilon_Customizer::add_field(
    'horseclub-blog-like-toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Like Button Show/Hide', 'horseclub' ),
        'section'     => 'horseclub_blog_options_section',
        'sanitize_callback' => 'sanitize_text_field'
    )
);
}
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'horseclub_fof_text_one',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'horseclub' ),
        'section'           => 'horseclub_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Ooops 404 Error !'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'horseclub_fof_text_two',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'horseclub' ),
        'section'           => 'horseclub_fof_options_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Either something went wrong or the page dosen\'t exist anymore.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'horseclub_fof_textonecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_fof_options_section',
        'default'     => '#404551', 
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'horseclub_fof_texttwocolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_fof_options_section',
        'default'     => '#abadbe',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'horseclub_fof_bgcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_fof_options_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'horseclub-widget-toggle-settings',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'horseclub' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'horseclub' ),
        'section'     => 'horseclub_footer_options_section',
        'default'     => false,
    )
);

// Footer copy right text add settings

// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s. Copyright &copy; %s  |  All rights reserved', 'horseclub' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );

Epsilon_Customizer::add_field(
    'horseclub-copyright-text-settings',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'horseclub' ),
        'section'     => 'horseclub_footer_options_section',
        'default'     => wp_kses_post( $copyText ),
    )
);
// Footer widget background color field
Epsilon_Customizer::add_field(
    'horseclub_footer_bgColor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_footer_options_section',
        'default'     => '#fff',
    )
);
// Footer widget text color field
Epsilon_Customizer::add_field(
    'horseclub_footer_color_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_footer_options_section',
        'default'     => '#777777',
    )
);
// Footer widget title color field
Epsilon_Customizer::add_field(
    'horseclub_footer_widgettitlecolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widgets Title Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_footer_options_section',
        'default'     => '#222222',
    )
);
// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'horseclub_footer_anchorcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_footer_options_section',
        'default'     => '#777',
    )
);
// Footer widget anchor hover Color 
Epsilon_Customizer::add_field(
    'horseclub_footer_anchorhovcolor_settings',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'horseclub' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'horseclub_footer_options_section',
        'default'     => '#f45622',
    )
);
