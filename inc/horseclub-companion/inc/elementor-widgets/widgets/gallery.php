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
class Horseclub_Gallery extends Widget_Base {

	public function get_name() {
		return 'horseclub-gallery';
	}

	public function get_title() {
		return __( 'Gallery', 'horseclub' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'horseclub-elements' ];
	}

	protected function _register_controls() {

		$repeater = new \Elementor\Repeater();
        
		// ----------------------------------------  Gallery content ------------------------------
		$this->start_controls_section(
			'gallery_content',
			[
				'label' => __( 'Gallery', 'horseclub' ),
			]
		);
		$this->add_control(
            'gallery_slider', [
                'label' => __( 'Create Gallery', 'horseclub' ),
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
                        'name'  => 'img',
                        'label' => __( 'Photo', 'horseclub' ),
                        'type'  => Controls_Manager::MEDIA,
                    ]
                ],
            ]
		);

		$this->end_controls_section(); // End exibition content

        //------------------------------ Style Content ------------------------------
        $this->start_controls_section(
            'style_content', [
                'label' => __( 'Style Content', 'horseclub' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'hoverbg',
                'label' => __( 'Background', 'horseclub' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .single-gallery .thumb div',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {

    $settings = $this->get_settings();
    // call load widget script
    $this->load_widget_script();

    ?>
    
    <section class="gallery-area">
        <div class="container-fluid">
            <div class="row no-padding">
                <div class="active-gallery">
                    <?php 
                    if( is_array( $settings['gallery_slider'] ) && count( $settings['gallery_slider'] ) > 0 ):

                        foreach( $settings['gallery_slider'] as $gallery ):

                        // Member Picture
                        $bgUrl = '';
                        if( ! empty( $gallery['img']['url'] ) ) {
                            $bgUrl = $gallery['img']['url'];
                        }

                    ?>
                        <div class="item single-gallery">
                            <div class="thumb">
                                <?php 
                                echo horseclub_img_tag(
                                    array(
                                        'url'   => esc_url( $bgUrl )
                                    )
                                );
                                ?>
                                <div class="align-items-center justify-content-center d-flex">
                                </div>
                            </div>
                        </div> 
                    <?php 
                        endforeach; 
                    endif;
                    ?>
                </div>
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
        $('.active-gallery').owlCarousel({
            items:6,
            loop:true,
            dots: true,
            autoplay:true,    
                responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                900: {
                    items: 6,
                }

            }
        });

        })(jQuery);
        </script>
        <?php 
        }
    }
	
}
