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
 * Horseclub elementor section widget.
 *
 * @since 1.0
 */
class Horseclub_Customers_Review_Slider extends Widget_Base {

	public function get_name() {
		return 'horseclub-customersreview';
	}

	public function get_title() {
		return __( 'Customers Review', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-post-slider';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();

        // ----------------------------------------  Customers Review Section Heading ------------------------------
        $this->start_controls_section(
            'customersreview_heading',
            [
                'label' => __( 'Customers Review Section Heading', 'horseclub' ),
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
        
		// ----------------------------------------  Customers review content ------------------------------
		$this->start_controls_section(
			'customersreview_content',
			[
				'label' => __( 'Customers Review', 'horseclub' ),
			]
		);
		$this->add_control(
            'review_slider', [
                'label' => __( 'Create Review', 'horseclub' ),
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
                        'name' => 'reviewstar',
                        'label' => __( 'Star Review', 'horseclub' ),
                        'type' => Controls_Manager::CHOOSE,
                            'options' => [
                                '1' => [
                                    'title' => __( '1', 'horseclub' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '2' => [
                                    'title' => __( '2', 'horseclub' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '3' => [
                                    'title' => __( '3', 'horseclub' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '4' => [
                                    'title' => __( '4', 'horseclub' ),
                                    'icon' => 'fa fa-star',
                                ],
                                '5' => [
                                    'title' => __( '5', 'horseclub' ),
                                    'icon' => 'fa fa-star',
                                ],
                            ],
                    ],
                    [
                        'name'  => 'desc',
                        'label' => __( 'Descriptions', 'horseclub' ),
                        'type'  => Controls_Manager::WYSIWYG,
                    ],
                    [
                        'name'  => 'img',
                        'label' => __( 'Photo', 'horseclub' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content


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

        // ----------------------------------------  Form Settings ------------------------------
        $this->start_controls_section(
            'consultancy_formsettings',
            [
                'label' => __( 'Banner Form Settings', 'horseclub' ),
            ]
        );
        $this->add_control(
            'booking_form_show',
            [
                'label'         => esc_html__( 'Show Car Booking Form', 'horseclub' ),
                'type'          => Controls_Manager::SWITCHER,
            ]
        );
        $this->add_control(
            'consultancy_formtitle',
            [
                'label'         => esc_html__( 'Form Title', 'horseclub' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Appointment Form', 'horseclub' )
            ]
        );
        $this->end_controls_section(); // End Form Settings

        //------------------------------ Style Content ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_title', [
                'label'     => __( 'Title Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .booking-left h4' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_price', [
                'label'     => __( 'Star Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f45622',
                'selectors' => [
                    '{{WRAPPER}} .booking-left .star .checked' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_desc', [
                'label'     => __( 'Descriptions Color', 'horseclub' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777777',
                'selectors' => [
                    '{{WRAPPER}} .booking-left p' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .booking-area .overlay-bg',
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
                'selector' => '{{WRAPPER}} .booking-area',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

    $result = horseclub_booking_form_data();
    ?>

    <!-- Start booking Area -->
    <section class="booking-area section-gap relative" id="consultancy">
        <?php 
        if( ! empty( $settings['bg_overlay'] ) ) {
            echo '<div class="overlay overlay-bg"></div>';
        }
        ?>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 booking-left">
                    <?php 
                    
                    if( is_array( $settings['review_slider'] ) && count( $settings['review_slider'] ) > 0 ):
                        echo '<div class="active-review-carusel"><div class="single-carusel">';
                        $totalReview = count( $settings['review_slider'] ); 
                        $count = 0;
                        foreach( $settings['review_slider'] as $review ):
                                $count++;
                    // Member Picture
                    $bgUrl = '';
                    if( ! empty( $review['img']['url'] ) ) {
                        $bgUrl = $review['img']['url'];
                    }

                    ?>
                        
                            <?php 
                            echo horseclub_img_tag(
                                array(
                                    'url'   => esc_url( $bgUrl )
                                )
                            );
                            ?>
                            <div class="title justify-content-start d-flex">
                            <?php 
                            if( ! empty( $review['label'] ) ) {
                                echo horseclub_heading_tag(
                                    array(
                                        'tag'  => 'h4',
                                        'text' => esc_html( $review['label'] ),
                                    )
                                ); 
                            }
                            //
                            if( ! empty( $review['reviewstar'] ) ) {
                                echo '<div class="star">';
                                    for( $i = 1; $i <= 5; $i++ ) {

                                        if( $review['reviewstar'] >= $i ) {
                                            echo '<span class="fa fa-star checked"></span>';
                                        } else {
                                            echo '<span class="fa fa-star"></span>';
                                        }
                                    }
                                echo '</div>';
                            }
                            ?>
                            </div>
                            <?php 
                            if( ! empty( $review['desc'] ) ) {
                                echo horseclub_get_textareahtml_output( $review['desc'] );
                            }
                            
                            // Condation
                            if( $count % 2 == 0 &&  $count < $totalReview ) {
                                echo '</div><div class="single-carusel">';
                            }
                        
                        endforeach; 
                        echo '</div></div>';
                    endif;
                    ?>
                    
                </div>
                <?php 
                if( ! empty( $settings['booking_form_show'] ) ):
                ?>
                <div class="col-lg-4 col-md-6 booking-right">
                    <?php
                    // Form Title
                    if( ! empty( $settings['consultancy_formtitle'] ) ) {

                        echo horseclub_heading_tag (
                            array(
                                'tag'  => 'h4',
                                'text' => esc_html( $settings['consultancy_formtitle'] ),
                                'class' => 'mb-20'

                            )
                        );
                    } 
                    // 
                    if( $result ) {
                        echo '<div class="alert alert-info"> ' . esc_html( $result ) . ' </div>';
                    }
                    ?>
                    <form action="#" method="post">
                        <input class="form-control" type="text" name="uname" placeholder="<?php esc_html_e( 'Your name', 'horseclub' ) ?>" required>
                        <input class="form-control" type="email" name="uemail" placeholder="<?php esc_html_e( 'Email Address', 'horseclub' ) ?>" required>
                        <input class="form-control" type="text" name="uphone" placeholder="<?php esc_html_e( 'Phone Number', 'horseclub' ) ?>" required>
                        <div class="input-group dates-wrap">                                          
                            <input id="datepicker" name="udate" class="dates form-control" id="exampleAmount" placeholder="<?php esc_html_e( 'Date & time', 'horseclub' ) ?>" type="text">                        
                            <div class="input-group-prepend">
                                <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                            </div>                                          
                        </div>
                        <textarea class="common-textarea form-control mt-10" name="umessage" placeholder="<?php esc_html_e( 'Messege', 'horseclub' ) ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                        <button type="submit"  class="btn btn-default btn-lg btn-block text-center" name="booking_submit"><?php esc_html_e( 'Book Now!', 'horseclub' ) ?></button>
                    </form>
                </div>
                <?php 
                endif;
                ?>
            </div>
        </div>  
    </section>
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            
            // Exibition widget owlCarousel
            $('.active-review-carusel').owlCarousel({
                items:1,
                loop:true,
                margin:30,
                dots: true
            });

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
