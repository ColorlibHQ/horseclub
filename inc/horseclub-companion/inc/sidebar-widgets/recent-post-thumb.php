<?php
/**
 * @version  1.0
 * @package  Horseclub
 *
 */
 
 
/********************************************
*Creating recent post widget width thumb
**********************************************/
 
class horseclub_recent_widget extends WP_Widget {


function __construct() {

parent::__construct(
// Base ID of your widget
'horseclub_recent_widget', 


// Widget name will appear in UI
esc_html__( '[ Horseclub ] Recent Post', 'horseclub' ), 

// Widget description
array( 'description' => esc_html__( 'Add recent post with thumbnail', 'horseclub' ), ) 
);

}

// This is where the action happens
public function widget( $args, $instance ) {
$title 	= apply_filters( 'widget_title', $instance['title'] );
$post_number = apply_filters( 'widget_post_number', $instance['post_number'] );

// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

	//
	$arrya = array(
		'post_type' 	 => 'post',
		'posts_per_page' => esc_html( $post_number ),
	);
	
	$loop = new WP_Query( $arrya );
	
	if( $loop->have_posts() ){
		echo '<div class="recent-posts-widget"><div class="blog-list">';

		while( $loop->have_posts() ){
			$loop->the_post();

			if( has_post_thumbnail() ):
	?>


    <div class="single-recent-post d-flex flex-row">
        <div class="recent-thumb">
            <?php 
            the_post_thumbnail( 'horseclub_widget_post_thumb', array( 'class' => 'img-fluid' ) );
            ?>
        </div>
        <div class="recent-details">
            <a href="<?php the_permalink(); ?>">
                <h4><?php the_title(); ?></h4>
            </a>
            <p>
             <?php echo esc_html( get_the_date() ); ?>
            </p>
        </div>
    </div>  

	<?php 
		endif;
		}
		wp_reset_postdata();
	echo '</div></div>';
	}
	
	echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
	
if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
}else {
	$title = esc_html__( 'Recent Post', 'horseclub' );
}
//	
if ( isset( $instance[ 'post_number' ] ) ) {
	$post_number = $instance[ 'post_number' ];
}else {
	$post_number = absint( 3 );
}

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ,'horseclub'); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo $this->get_field_id( 'post_number' ); ?>"><?php _e( 'Posts Number:' ,'horseclub'); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'post_number' ); ?>" name="<?php echo $this->get_field_name( 'post_number' ); ?>" type="number" value="<?php echo esc_attr( $post_number ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['post_number'] = ( ! empty( $new_instance['post_number'] ) ) ? strip_tags( $new_instance['post_number'] ) : '';

return $instance;
}
} // Class horseclub_recent_widget ends here


// Register and load the widget
function horseclub_recent_post_load_widget() {
	register_widget( 'horseclub_recent_widget' );
}
add_action( 'widgets_init', 'horseclub_recent_post_load_widget' );