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
 * Horseclub elementor about us section widget.
 *
 * @since 1.0
 */
class Horseclub_Banner extends Widget_Base {

	public function get_name() {
		return 'horseclub-banner';
	}

	public function get_title() {
		return __( 'Banner', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_content',
            [
                'label' => __( 'Banner Section Content', 'horseclub' ),
            ]
        );
        $this->add_control(
            'banner_titleone',
            [
                'label'         => esc_html__( 'Title #1', 'horseclub' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => esc_html__( 'Process Visa without within hours', 'horseclub' ),
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_titletwo',
            [
                'label'         => esc_html__( 'Title #2', 'horseclub' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true
            ]
        );
        $this->add_control(
            'banner_btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'horseclub' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Book Consultancy', 'horseclub' )
            ]
        );
        $this->add_control(
            'banner_btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'horseclub' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->end_controls_section(); // End content

        //------------------------------ Style title ------------------------------
        $this->start_controls_section(
            'style_textcolor', [
                'label' => __( 'Style Content', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_titleone', [
                'label'     => __( 'Title #1 Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titleone',
                'selector'  => '{{WRAPPER}} .banner-content h6',
            ]
        );
        $this->add_control(
            'color_titletwo', [
                'label'     => __( 'Title #2 Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(), [
                'name'      => 'typography_titletwo',
                'selector'  => '{{WRAPPER}} .banner-content h1',
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style button ------------------------------
        $this->start_controls_section(
            'style_btn', [
                'label' => __( 'Style Button', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_btnlabel', [
                'label'     => __( 'Button Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnborder', [
                'label'     => __( 'Button Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovborder', [
                'label'     => __( 'Button Hover Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'horseclub' ),
                'type'        => Controls_Manager::COLOR,
                'default'     => '#f45622',
                'selectors'   => [
                    '{{WRAPPER}} .banner-content .genric-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(255,255,255,0)',
                'selectors' => [
                    '{{WRAPPER}} .banner-content .genric-btn:hover' => 'background-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .banner-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .banner-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

    ?>
    <section class="banner-area relative">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">             
            <div class="row fullscreen d-flex align-items-center justify-content-start">
                <div class="banner-content col-lg-12">
                    <?php 
                    // Banner Title
                    if( ! empty( $settings['banner_titleone'] ) ) {
                        echo horseclub_heading_tag(
                            array(
                                'tag' => 'h6',
                                'text' => esc_html( $settings['banner_titleone'] ),
                            )
                        );
                    }
                    ?>
                    <span class="bar"></span>
                    <?php 
                    //
                    if( ! empty( $settings['banner_titletwo'] ) ) {
                        echo horseclub_heading_tag(
                            array(
                                'tag' => 'h1',
                                'text' => esc_html( $settings['banner_titletwo'] ),
                            )
                        );
                    }
                    //
                    if( ! empty( $settings[ 'banner_btnlabel' ] ) && !empty( $settings['banner_btnurl']['url'] ) ) {
                        echo horseclub_anchor_tag(
                            array(
                                'url'   => esc_url( $settings['banner_btnurl']['url'] ),
                                'text'  => esc_html( $settings['banner_btnlabel'] ),
                                'class' => esc_attr( 'genric-btn' )
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
    
    public function load_widget_script() {
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            // Exibition widget owlCarousel
            var window_height    = window.innerHeight,
            header_height        = $(".default-header").height(),
            fitscreen            = window_height - header_height;


            $(".fullscreen").css("height", window_height)
            $(".fitscreen").css("height", fitscreen);
        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
