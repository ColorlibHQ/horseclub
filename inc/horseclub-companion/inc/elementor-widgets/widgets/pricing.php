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
 * Horseclub elementor pricing table section widget.
 *
 * @since 1.0
 */
class Horseclub_Pricing extends Widget_Base {

	public function get_name() {
		return 'horseclub-pricing';
	}

	public function get_title() {
		return __( 'Pricing Table', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Pricing table head ------------------------------
        $this->start_controls_section(
            'pricing_tblhead',
            [
                'label' => __( 'Table Heading', 'horseclub' ),
            ]
        );
        $this->add_control(
            'pricing_title',
            [
                'label' => esc_html__( 'Title', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'pricing_subtitle',
            [
                'label' => esc_html__( 'Sub Title', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'pricing_packno',
            [
                'label' => esc_html__( 'Package No', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );

        $this->end_controls_section(); // End pricing table head

        // ----------------------------------------  Pricing table price ------------------------------
        $this->start_controls_section(
            'pricing_tblprice',
            [
                'label' => __( 'Price Info', 'horseclub' ),
            ]
        );
        $this->add_control(
            'pricing_price',
            [
                'label' => esc_html__( 'Price', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );

        $this->end_controls_section(); // End price

        // ----------------------------------------  Pricing table features ------------------------------
        $this->start_controls_section(
            'pricing_tblfeatures',
            [
                'label' => __( 'Features', 'horseclub' ),
            ]
        );
        $this->add_control(
            'pricingfeatures', [
                'label' => __( 'Features', 'horseclub' ),
                'type' => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name' => 'label',
                        'label' => __( 'Feature', 'horseclub' ),
                        'type' => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => '2.5 GB Photos'
                    ]

                ],
            ]
        );

        $this->end_controls_section(); // End features

        // ----------------------------------------  Pricing table Button ------------------------------
        $this->start_controls_section(
            'pricing_tblbutton',
            [
                'label' => __( 'Button', 'horseclub' ),
            ]
        );
        $this->add_control(
            'pricing_btnlabel',
            [
                'label' => esc_html__( 'Label', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'pricing_btnurl',
            [
                'label' => esc_html__( 'URL', 'horseclub' ),
                'type'  => Controls_Manager::TEXT,
            ]
        );

        $this->end_controls_section(); // End table button



        //------------------------------ Style Table Heading ------------------------------
        $this->start_controls_section(
            'style_tblheading', [
                'label' => __( 'Style Table Heading', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .single-price .top-part h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hovertitle', [
                'label'     => __( 'Hover Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-price:hover .top-part h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_number', [
                'label'     => __( 'Number Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-price .package-no' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_subtitle', [
                'label'     => __( 'Sub Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .single-price .top-part p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hoversubtitle', [
                'label'     => __( 'Hover Sub Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .single-price:hover .top-part p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_feature', [
                'label'     => __( 'Feature Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .single-price .package-list ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hoverfeature', [
                'label'     => __( 'Hover Feature Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-price:hover .package-list ul li' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_price', [
                'label'     => __( 'Price Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .single-price .bottom-part h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'color_hoverprice', [
                'label'     => __( 'Price Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-price:hover .bottom-part h1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

		//------------------------------ Style Button ------------------------------
		$this->start_controls_section(
			'style_button', [
				'label' => __( 'Style Button', 'horseclub' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			]
		);        
        $this->add_control(
            'color_btnlabel', [
                'label'     => __( 'Button Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-price .bottom-part .price-btn' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhoverlabel', [
                'label'     => __( 'Button Hover Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .single-price .bottom-part .price-btn:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnborder', [
                'label'     => __( 'Button Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#00ff8c',
                'selectors' => [
                    '{{WRAPPER}} .single-price .bottom-part .price-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovborder', [
                'label'     => __( 'Button Hover Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#00ff8c',
                'selectors' => [
                    '{{WRAPPER}} .single-price .bottom-part .price-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnbg', [
                'label'       => __( 'Button Background Color', 'horseclub' ),
                'type'        => Controls_Manager::COLOR,
                'selectors'   => [
                    '{{WRAPPER}} .single-price .bottom-part .price-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_btnhovbg', [
                'label'     => __( 'Button Hover Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#00ff8c',
                'selectors' => [
                    '{{WRAPPER}} .single-price .bottom-part .price-btn:hover' => 'background-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .single-price:hover',
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    $pos = '';
    if( !empty( $settings['featuresvtwo_imgpos'] ) ){
        $pos = 'order-last';
    } 

    ?>

    <div class="single-price">
        <div class="top-part">
            <?php
            // 
            if( ! empty( $settings['pricing_packno'] ) ) {
                echo horseclub_heading_tag(
                    array(
                        'tag'   => 'h1',
                        'text'  => esc_html( $settings['pricing_packno'] ),
                        'class' => 'package-no'
                    )
                );
            }
            // Pricing title
            if( ! empty( $settings['pricing_title'] ) ) {
                echo horseclub_heading_tag(
                    array(
                        'tag'   => 'h4',
                        'text'  => esc_html( $settings['pricing_title'] )
                    )
                );
            }
            // Pricing Sub Title
            if( ! empty( $settings['pricing_subtitle'] ) ) {
                echo horseclub_paragraph_tag(
                    array(
                        'text'  => esc_html( $settings['pricing_subtitle'] )
                    )
                );
            }
            ?>
        </div>
        <div class="package-list">
            <ul>
                <?php 
                if( is_array( $settings['pricingfeatures'] ) && count( $settings['pricingfeatures'] ) > 0 ) {
                    foreach( $settings['pricingfeatures'] as $feature ){
                        if( !empty( $feature['label'] ) ){
                            echo '<li>'.esc_html( $feature['label'] ).'</li>';
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="bottom-part">
            <?php 
            // Price
            if( ! empty( $settings['pricing_price'] ) ) {
                echo horseclub_heading_tag(
                    array(
                        'tag'   => 'h1',
                        'text'  => esc_html( $settings['pricing_price'] ),
                    )
                );
            }
            //
            if( ! empty( $settings['pricing_btnlabel'] ) && ! empty( $settings['pricing_btnurl'] ) ) {
                echo horseclub_anchor_tag(
                    array(
                        'url'   => esc_url( $settings['pricing_btnurl'] ),
                        'text'  => esc_html( $settings['pricing_btnlabel'] ),
                        'class' => 'price-btn text-uppercase',
                    )
                );
            }
            ?>
        </div>                              
    </div>

    <?php

    }
	
}
