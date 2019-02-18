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
 * Horseclub elementor Team Member section widget.
 *
 * @since 1.0
 */
class Horseclub_Services extends Widget_Base {

	public function get_name() {
		return 'horseclub-services';
	}

	public function get_title() {
		return __( 'Services', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Services Section Heading ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Services Section Heading', 'horseclub' ),
            ]
        );
        $this->add_control(
            'sect_title', [
                'label' => __( 'Title', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );
        $this->add_control(
            'sect_subtitle', [
                'label' => __( 'Sub Title', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
                'label_block' => true

            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'horseclub' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Service', 'horseclub' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'label',
                        'label' => __( 'Name', 'horseclub' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => 'Name'
                    ],
                    [
                        'name'  => 'url',
                        'label' => __( 'Title Url', 'horseclub' ),
                        'type'  => Controls_Manager::URL,
                        'show_external' => false,
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'horseclub' ),
                        'type'  => Controls_Manager::TEXTAREA,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'horseclub' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End Services content


        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333333',
                'selectors' => [
                    '{{WRAPPER}} .title h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_sectsubtitle', [
                'label'     => __( 'Section Sub Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .title p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        //------------------------------ Style Services Box ------------------------------
        $this->start_controls_section(
            'style_servicesbox', [
                'label' => __( 'Style Services Content', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service-page h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_featuredescription', [
                'label' => __( 'Description Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-service-page p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <section class="service-page-area section-gap">
        <div class="container">

            <?php 
            // Section Heading
            horseclub_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?> 

            <div class="row">

                <?php 
                if( is_array( $settings['services_content'] ) && count( $settings['services_content'] ) > 0 ):
                    foreach( $settings['services_content'] as $service ):
 
                // Member Picture
                $bgUrl = '';
                if( ! empty( $service['img']['url'] ) ) {
                    $bgUrl = $service['img']['url'];
                }
                            

                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-service-page">
                        <div class="thumbs relative">
                            <div class="overlay-bg"></div>
                            <?php 
                            // Image
                            echo horseclub_img_tag(
                                array(
                                    'url'   => esc_url( $bgUrl ),
                                    'class' => 'img-fluid'
                                )
                            );
                            ?>
                        </div>
                        <div class="details">
                            <?php 
                            // Title
                            if( ! empty( $service['label'] ) ) {

                                $atagstart  = '';
                                $atagend    = '';

                                if( ! empty( $service['url']['url'] ) ) {

                                    $atagstart  = '<a href="'.esc_url( $service['url']['url'] ).'">';
                                    $atagend    = '</a>';

                                }
                                echo wp_kses_post( $atagstart );
                                echo horseclub_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $service['label'] )
                                    )
                                );
                                echo wp_kses_post( $atagend );
                            }
                             
                            // Description
                            if( ! empty( $service['desc'] ) ) {
                                echo horseclub_paragraph_tag(
                                    array(
                                        'text'  => esc_html( $service['desc'] ),
                                    )
                                );
                            }
                            ?>

                        </div>
                    </div>
                </div>  
                <?php
                    endforeach; 
                endif;
                ?>

            </div>
        </div>  
    </section>

    <?php

    }

	
}
