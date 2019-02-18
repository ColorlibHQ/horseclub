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
class Horseclub_Country_List extends Widget_Base {

	public function get_name() {
		return 'horseclub-country-list';
	}

	public function get_title() {
		return __( 'Country List', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Features Section Heading ------------------------------
        $this->start_controls_section(
            'country_list_heading',
            [
                'label' => __( 'Country List Section Heading', 'horseclub' ),
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
			'country_list_block',
			[
				'label' => __( 'Country List', 'horseclub' ),
			]
		);
		$this->add_control(
            'country_content', [
                'label' => __( 'Create Country List', 'horseclub' ),
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
                        'label' => __( 'Url', 'horseclub' ),
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

		$this->end_controls_section(); // End features content


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

        //------------------------------ Style Country ------------------------------
        $this->start_controls_section(
            'style_country', [
                'label' => __( 'Style Country', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'country_title_heading',
            [
                'label'     => __( 'Style Title ', 'horseclub' ),
                'type'      => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'color_featuretitle', [
                'label' => __( 'Title Color', 'horseclub' ),
                'type'  => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-country-list h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .single-country-list p' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .single-country-list .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(250,183,0,0)',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f6214b',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f9f9ff',
                'selectors' => [
                    '{{WRAPPER}} .single-country-list .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {

    $settings = $this->get_settings();

    ?>

    <!-- Start counrty-list Area -->
    <section class="counrty-list-area section-gap">
        <div class="container">

            <?php 
            // Section Heading
            horseclub_section_heading( $settings['sect_title'], $settings['sect_subtitle'] );
            ?>

            <div class="row">
                <?php 
                if( is_array( $settings['country_content'] ) && count( $settings['country_content'] ) > 0 ):
                    foreach( $settings['country_content'] as $country ):
 
                // img
                $bgUrl = '';
                if( ! empty( $country['img']['url'] ) ) {
                    $bgUrl = $country['img']['url'];
                }
                ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-country-list">
                        <?php 
                        // Image
                        echo horseclub_img_tag(
                            array(
                                'url'   => esc_url( $bgUrl )
                            )
                        );
                        // Title
                        if( ! empty( $country['label'] ) ) {

                            $atagstart  = '';
                            $atagend    = '';

                            if( ! empty( $country['url']['url'] ) ) {

                                $atagstart  = '<a href="'.esc_url( $country['url']['url'] ).'">';
                                $atagend    = '</a>';

                            }
                            echo wp_kses_post( $atagstart );
                            echo horseclub_heading_tag(
                                array(
                                    'tag'  => 'h4',
                                    'text' => esc_html( $country['label'] )
                                )
                            );
                            echo wp_kses_post( $atagend );
                        }
                        // Description
                        if( ! empty( $country['desc'] ) ) {
                            echo horseclub_paragraph_tag(
                                array(
                                    'text'  => esc_html( $country['desc'] ),
                                )
                            );
                        }
                        // Anchor
                        if( ! empty( $country['url']['url'] ) ) {
                            echo horseclub_anchor_tag(
                                array(
                                    'text' => esc_html__( 'View Details', 'horseclub' ),
                                    'url'  => esc_url( $country['url']['url'] ),
                                    'class' => 'primary-btn'
                                )
                            );
                        }
                        ?>
                    </div>
                </div>
                <?php 
                    endforeach;
                endif;
                ?>

            </div>
        </div>  
    </section>
    <!-- End counrty-list Area -->

    <?php

    }

	
}
