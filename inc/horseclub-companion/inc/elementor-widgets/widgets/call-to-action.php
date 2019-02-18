<?php
namespace Horseclubelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Horseclub elementor call to action section widget.
 *
 * @since 1.0
 */
class Horseclub_Cta extends Widget_Base {

	public function get_name() {
		return 'horseclub-cta';
	}

	public function get_title() {
		return __( 'Call To Action', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-call-to-action';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {


        // ----------------------------------------  Call to action content ------------------------------
        $this->start_controls_section(
            'cta_content',
            [
                'label' => __( 'Call To Action Content', 'horseclub' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Everything You can imagine is right here', 'horseclub' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button Label', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'Reach Our Support Team', 'horseclub' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label' => esc_html__( 'Button Url', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Contact', 'horseclub' ),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => esc_html__( 'inappropriate behaviour is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.', 'horseclub' )
            ]
        );

        $this->end_controls_section(); // End content

        /**
         * Style Tab
         * ------------------------------ Style ------------------------------
         *
         */
        $this->start_controls_section(
            'stylecolor', [
                'label' => __( 'Style Color', 'horseclub' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_titlebold', [
                'label'     => __( 'Description Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area p' => 'color: {{VALUE}};',
                ],
            ]
        );


        $this->end_controls_section();        

        /**
         * Style Tab
         * ------------------------------ Button Style ------------------------------
         *
         */
        $this->start_controls_section(
            'buttonstyle', [
                'label' => __( 'Style Button', 'horseclub' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_label', [
                'label'     => __( 'Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(250,183,0,0)',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .callto-area .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
   

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'horseclub' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'bg_overlay',
            [
                'label' => __( 'Overlay', 'horseclub' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'Show', 'horseclub' ),
                'label_off' => __( 'Hide', 'horseclub' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'sect_ooverlay_bgcolor',
            [
                'label'     => __( 'Overlay Color', 'horseclub' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionoverlaybg',
                'label' => __( 'Overlay', 'horseclub' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .callto-area .overlay-bg',
                'condition' => [
                    'bg_overlay' => 'yes'
                ]
            ]
        );
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'horseclub' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'horseclub' ),
                'types' => [ 'classic', 'gradient', 'video' ],
                'selector' => '{{WRAPPER}} .callto-area',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <section class="callto-area section-gap relative">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <?php 
                    // Title
                    if( ! empty( $settings['title'] ) ) {
                        echo horseclub_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['title'] ),
                            )
                        );
                    }
                    // Description
                    if( ! empty( $settings['content'] ) ) {
                        echo '<div class="pt-20 pb-20">';
                        echo horseclub_get_textareahtml_output( $settings['content'] );
                        echo '</div>';
                    }
                    // Button 
                    if( !empty( $settings['btnlabel'] ) && ! empty( $settings['btnurl'] ) ) {
                        echo horseclub_anchor_tag(
                            array(
                                'text'   => esc_html( $settings['btnlabel'] ),
                                'url'    => esc_url( $settings['btnurl'] ),
                                'class'  => 'primary-btn',
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>  
    </section>

    <?php

        }
	
}
