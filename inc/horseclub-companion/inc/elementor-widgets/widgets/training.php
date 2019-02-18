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
class Horseclub_Training extends Widget_Base {

	public function get_name() {
		return 'horseclub-training';
	}

	public function get_title() {
		return __( 'Training', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  training Section Heading ------------------------------
        $this->start_controls_section(
            'training_heading',
            [
                'label' => __( 'Training Section Heading', 'horseclub' ),
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
        
		// ----------------------------------------   Training content ------------------------------
		$this->start_controls_section(
			'training_block',
			[
				'label' => __( 'Training', 'horseclub' ),
			]
		);
		$this->add_control(
            'training_content', [
                'label' => __( 'Create Training', 'horseclub' ),
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
                        'name'  => 'tagtitle',
                        'label' => __( 'Tag Title', 'horseclub' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'tagurl',
                        'label' => __( 'Tag Url', 'horseclub' ),
                        'type'  => Controls_Manager::TEXT,
                    ],
                    [
                        'name'  => 'price',
                        'label' => __( 'Price', 'horseclub' ),
                        'type'  => Controls_Manager::TEXT,
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

        //------------------------------ Style Training Box ------------------------------
        $this->start_controls_section(
            'style_trainingbox', [
                'label' => __( 'Style Training Content', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_trainingtitle', [
                'label' => __( 'Title Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-training .details h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_trainingdescription', [
                'label' => __( 'Description Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-training .details p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_trainingbtnbg', [
                'label' => __( 'Button Background Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'default' => '#f45622',
                'selectors' => [
                    '{{WRAPPER}} .training-area .single-training .thumb .admission-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_trainingbtntext', [
                'label' => __( 'Button Text Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .training-area .single-training .thumb .admission-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_trainingprice', [
                'label' => __( 'Price Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'default' => '#f45622',
                'selectors' => [
                    '{{WRAPPER}} .training-area .single-training .details .price' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <!-- Start training Area -->
    <section class="training-area section-gap">
        <div class="container">
            <?php 
            // Section Heading
            horseclub_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <?php 
                if( is_array( $settings['training_content'] ) && count( $settings['training_content'] ) > 0 ):
                    foreach( $settings['training_content'] as $training ):
 
                // Member Picture
                $bgUrl = '';
                if( ! empty( $training['img']['url'] ) ) {
                    $bgUrl = $training['img']['url'];
                }
                
                ?>
                <div class="col-lg-4 cl-md-6">
                    <div class="single-training">
                        <div class="thumb relative">
                            <div class="overlay-bg"></div>
                            <?php 
                            // Image
                            echo horseclub_img_tag(
                                array(
                                    'url'   => esc_url( $bgUrl ),
                                    'class'   => 'img-fluid'
                                )
                            );
                            //
                            if( ! empty( $training['tagtitle'] ) ) {
                                $url = ! empty( $training['tagurl'] ) ? $training['tagurl'] : '';

                                echo '<a class="admission-btn" href=" ' . esc_url( $url ) . ' ">' . esc_html( $training['tagtitle'] ) . '</a>';
                            }
                            ?>
                        </div>
                        <div class="details">
                            <div class="title justify-content-between d-flex">
                                <?php 
                                // Title
                                if( ! empty( $training['label'] ) ) {

                                    $atagstart  = '';
                                    $atagend    = '';

                                    if( ! empty( $training['url']['url'] ) ) {

                                        $atagstart  = '<a href="'.esc_url( $training['url']['url'] ).'">';
                                        $atagend    = '</a>';

                                    }
                                    echo wp_kses_post( $atagstart );
                                    echo horseclub_heading_tag(
                                        array(
                                            'tag'  => 'h4',
                                            'text' => esc_html( $training['label'] )
                                        )
                                    );
                                    echo wp_kses_post( $atagend );
                                }
                                // Price
                                if( ! empty( $training['price'] ) ) {
                                    echo horseclub_other_tag(
                                        array(
                                            'text'  => esc_html( $training['price'] ),
                                            'class' => 'price'
                                        )
                                    );
                                }
                                ?>
                            </div>
                            <?php
                            // Description
                            if( ! empty( $training['desc'] ) ) {
                                echo horseclub_paragraph_tag(
                                    array(
                                        'text'  => esc_html( $training['desc'] ),
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
    <!-- End training Area -->

    <?php

    }

}
