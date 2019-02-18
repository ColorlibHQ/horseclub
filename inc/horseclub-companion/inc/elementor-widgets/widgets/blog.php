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
 * Horseclub elementor few words section widget.
 *
 * @since 1.0
 */
class Horseclub_Blog extends Widget_Base {

	public function get_name() {
		return 'horseclub-blog';
	}

	public function get_title() {
		return __( 'Blog', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Blgo', 'horseclub' ),
            ]
        );
        $this->add_control(
            'blog_sectiontitle',
            [
                'label'       => esc_html__( 'Section Title', 'horseclub' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'blog_sectionsubtitle',
            [
                'label'       => esc_html__( 'Section Sub Title', 'horseclub' ),
                'label_block' => true,
                'type'        => Controls_Manager::TEXT,
            ]
        );
        $this->add_control(
            'blog_limit',
            [
                'label'     => esc_html__( 'Post Limit', 'horseclub' ),
                'type'      => Controls_Manager::TEXT,
                'default'   => 3
            ]
        );

        $this->end_controls_section(); // End few words content

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

        //------------------------------ Style text ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_blogtitle', [
                'label'     => __( 'Blog Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtitlehov', [
                'label'     => __( 'Blog Title Hover Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog:hover h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_blogtext', [
                'label'     => __( 'Blog Text Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .single-blog p'                    => 'color: {{VALUE}};',
                    '{{WRAPPER}} .single-blog .meta-bottom p'       => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_tagname', [
                'label'     => __( 'Tags Name Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li a'  => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_tagenamehover', [
                'label'     => __( 'Tags Name Hover Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li a:hover'  => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_tagbg', [
                'label'     => __( 'Tags Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f45622',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li'    => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_taghoverbg', [
                'label'     => __( 'Tags Hover Background Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .latest-blog-area .single-blog .tags li:hover'    => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_date', [
                'label'     => __( 'Date Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222',
                'selectors' => [
                    '{{WRAPPER}} .single-blog p.date'    => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();

    ?>
    <section class="latest-blog-area section-gap">
        <div class="container">
            <?php
            // Section Heading
            horseclub_section_heading( $settings['blog_sectiontitle'], $settings['blog_sectionsubtitle'] );

            // Blog
            horseclub_blog_section( $settings['blog_limit'] );

            ?>
        </div>
    </section>
    
    <?php

        }
	
}
