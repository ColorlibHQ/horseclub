<?php
namespace Horseclubelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 *
 * Horseclub elementor about page section widget.
 *
 * @since 1.0
 */
class Horseclub_About extends Widget_Base {

	public function get_name() {
		return 'horseclub-aboutus';
	}

	public function get_title() {
		return __( 'About Us', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-post-content';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  About content ------------------------------
        $this->start_controls_section(
            'about_content',
            [
                'label' => __( 'About Content', 'horseclub' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__( 'Title', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We’ve made a life that will change you', 'horseclub' )
            ]
        );
        $this->add_control(
            'subtitletop',
            [
                'label' => esc_html__( 'Sub Title Top', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'BRAND NEW APP TO BLOW YOUR MIND', 'horseclub' )
            ]
        );

        $this->add_control(
            'subtitlebottom',
            [
                'label' => esc_html__( 'Sub Title Bottom', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'We are here to listen from you deliver exellence', 'horseclub' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label' => esc_html__( 'Button Label', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => esc_html__( 'get details', 'horseclub' )
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
        $this->add_control(
            'imgposition',
            [
                'label'         => esc_html__( 'Image Position', 'horseclub' ),
                'type'          => Controls_Manager::SWITCHER,
                'label_on'      => esc_html__( 'Left', 'horseclub' ),
                'label_off'     => esc_html__( 'Right', 'horseclub' ),
                'return_value'  => 'yes',
                'default'       => 'yes',
            ]
        );
        $this->add_control(
            'youtubeurl',
            [
                'label' => esc_html__( 'Youtube Video Url', 'horseclub' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' => ''
            ]
        );
        $this->add_control(
            'featured_img',
            [
                'label'         => esc_html__( 'Featured Image', 'horseclub' ),
                'type'          => Controls_Manager::MEDIA,
                'label_block'   => true,
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
                'default'   => '#222222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left h1'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_subtitletop', [
                'label'     => __( 'Sub Title Top', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left h6' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_subtitlebottom', [
                'label'     => __( 'Sub Title Bottom', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left p span' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Description Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left p' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .about-video-left .primary-btn'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_label', [
                'label'     => __( 'Hover Label Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f45622',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn:hover'   => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_bg', [
                'label'     => __( 'Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_bg', [
                'label'     => __( 'Hover Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'rgba(15,0,1,0)',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_border', [
                'label'     => __( 'Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_hover_border', [
                'label'     => __( 'Hover Border Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f45622',
                'selectors' => [
                    '{{WRAPPER}} .about-video-left .primary-btn:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    $imgUrl = ! empty( $settings['featured_img']['url'] ) ? $settings['featured_img']['url'] : '';
    $url = ! empty( $settings['youtubeurl'] ) ? $settings['youtubeurl'] : '';

    ?>

    <section class="about-video-area section-gap">
        <div class="container">
            <div class="row">
                <?php 
                if( ! empty( $settings['imgposition'] ) ) :
                ?>
                <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex" style="background-image: url(<?php echo esc_url( $imgUrl ); ?>)">

                    <?php 
                    if( $url ) {
                        echo '<a class="play-btn" href="'. esc_url( $url ) .'">';
                            echo horseclub_img_tag(
                                array(
                                    'url'   =>  HORSECLUB_COMPANION_DIR_URL . 'inc/elementor-widgets/assets/img/play.png',
                                    'class' => 'img-fluid'
                                )
                            );
                        echo '</a>';
                    }
                    ?>
                </div>
                <?php 
                endif;
                ?>
                <div class="col-lg-6 about-video-left">
                    <?php 
                    // Title
                    if( ! empty( $settings['subtitletop'] ) ) {
                        echo horseclub_heading_tag(
                            array(
                                'tag'   => 'h6',
                                'text'  => esc_html( $settings['subtitletop'] ),
                                'class' => 'text-uppercase'
                            )
                        );
                    }
                    // Title
                    if( ! empty( $settings['title'] ) ) {
                        echo horseclub_heading_tag(
                            array(
                                'tag'   => 'h1',
                                'text'  => esc_html( $settings['title'] )
                            )
                        );
                    }

                    // Sub Title 2
                    if( ! empty( $settings['subtitlebottom'] ) ) {
                        echo horseclub_other_tag(
                            array(
                                'tag' => 'span',
                                'text' => esc_html( $settings['subtitlebottom'] ),
                                'wrap_before'   => '<p>',
                                'wrap_after'    => '</p>',
                            )
                        );
                    }
                    // Content
                    if( ! empty( $settings['content'] ) ) {
                        echo horseclub_get_textareahtml_output( $settings['content'] );
                    }
                    //
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

                <?php 
                if( empty( $settings['imgposition'] ) ) :
                ?>
                <div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex" style="background-image: url(<?php echo esc_url( $imgUrl ); ?>)">

                    <?php 

                    if( $url ) {
                        echo '<a class="play-btn" href="'.esc_url( $url ).'">';
                            echo horseclub_img_tag(
                                array(
                                    'url'   => HORSECLUB_COMPANION_DIR_URL . 'inc/elementor-widgets/assets/img/play.png',
                                    'class' => 'img-fluid'
                                )
                            );
                        echo '</a>';
                    }
                    ?>
                </div>
                <?php 
                endif;
                ?>

            </div>
        </div>  
    </section>

    <?php

    }
	
}
