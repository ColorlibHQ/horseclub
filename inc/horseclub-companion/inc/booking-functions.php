<?php 
/**
 * @Packge     : Horseclub Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( ! defined( 'WPINC' ) ) {
    die;
}

// Car Bokking scripts enqueue
add_action( 'admin_enqueue_scripts', 'horseclub_appointment_scripts' );
function horseclub_appointment_scripts() {
    wp_enqueue_style( 'appointment-style', HORSECLUB_COMPANION_DIR_URL . 'css/booking.css', array(), '1.0', false );
    wp_enqueue_script( 'repeater-script', HORSECLUB_COMPANION_DIR_URL . 'js/repeater.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'appointment-script', HORSECLUB_COMPANION_DIR_URL . 'js/booking.js', array('jquery'), '1.0', true );
}


// Register car appointment post type
function horseclub_custom_init() {
    $args = array(
      'public' => false,
      'label'  => esc_html__( 'Appointment', 'horseclub' )
    );
    register_post_type( 'appointment', $args );
}
add_action( 'init', 'horseclub_custom_init' );

// remove post type menu
function horseclub_remove_menu_items() {

    remove_menu_page( 'edit.php?post_type=appointment' );

}
add_action( 'admin_menu', 'horseclub_remove_menu_items' );

// Add admin menu for car appointment list
add_action( 'admin_menu', 'horseclub_admin_menu' );

function horseclub_admin_menu() {
    add_menu_page( esc_html__( 'Appointment Lists', 'horseclub' ), esc_html__( 'Appointment', 'horseclub' ), 'manage_options', 'horseclub-appointment', 'horseclub_booking_admin_page', '
dashicons-calendar-alt', 6  );
}

// Car booking admin page
function horseclub_booking_admin_page() {
?>
  
    <div class="booking-area booking-lists" style="display:block;">
        <?php horseclub_booking_lists(); ?>
    </div>

<?php

}


// Booking List
function horseclub_booking_lists() {
    $args = array(
        'post_type'     => 'consultancy',
        'posts_per_page' => '-1'
    );

    $booking_lists = get_posts( $args );
    
    echo '<div class="booking-list"><ul>';
    echo '<h2 style="text-align:center;">Booking List</h2>';

    horseclub_delete_booking();
    //
    echo '<li style="padding: 8px;background-color:#f8f8f8;"><strong>Name</strong><span style="margin-left: 30px;"><strong>Date</strong></span><span style="float:right;"><strong>Action</strong></span></li>';
    foreach( $booking_lists as $list ) {

    $uname   = get_post_meta( $list->ID, 'horseclub_username', true );
    $udate   = get_post_meta( $list->ID, 'horseclub_udate', true );


    if( $uname ) {
        echo '<li style="padding: 8px;background-color:#f8f8f8;">'.esc_html( $uname ).'<span style="margin-left: 30px;">'.esc_html( $udate ).'</span><span style="float:right;"><button class="view-booking" data-target="modal-'.esc_attr( $list->ID ).'" >'.esc_html__( 'View', 'horseclub' ).'</button></span>'.horseclub_booking_admin_modal( $list->ID ).'</li>';
    }
        
    }
    echo '</ul></div>';

    ?>
    <script>
        ( function( $ ) {

            $( '.view-booking' ).on( 'click', function() {

                var modal = $(this).attr( 'data-target' );

                $('.' + modal ).show();

            });

            $( '.close-btn' ).on( 'click', function() {

                var modal = $(this).parent();

                $( modal ).hide();

            });

        } )( jQuery );
    </script>
    <?php
}
    
// Booking view modal
function horseclub_booking_admin_modal( $id ) {

    $username   = get_post_meta( $id, 'horseclub_username', true );
    $useremail  = get_post_meta( $id, 'horseclub_useremail', true );
    $userphone  = get_post_meta( $id, 'horseclub_userphone', true );
    $udate      = get_post_meta( $id, 'horseclub_udate', true );
    $umessage   = get_post_meta( $id, 'horseclub_umessage', true );
    
?>
    <div class="booking-modal modal-<?php echo esc_attr( $id ); ?>" style="position:absolute;top:0;background-color:#0003;top:0;bottom:0;left:0;right:0;display:none;">
        <div class="close-btn"><?php esc_html_e( 'Close', 'horseclub' ) ?></div>
        <div style="background-color: #f9f9f9;padding: 10px;max-width: 300px;margin: 0 auto;margin-top: 10%;">
            <h3 class="text-center"><?php esc_html_e( 'Appointment Info', 'horseclub' ) ?></h3>
            <ul class="modal-list">
                <li><strong><?php esc_html_e( 'Name:', 'horseclub' ); ?></strong> <?php echo esc_html( $username ); ?> </li>            
                <li><strong><?php esc_html_e( 'Email:', 'horseclub' ); ?> </strong><?php echo esc_html( $useremail ); ?> </li>            
                <li><strong><?php esc_html_e( 'Phone:', 'horseclub' ); ?></strong> <?php echo esc_html( $userphone ); ?> </li>           
                <li><strong><?php esc_html_e( 'Date:', 'horseclub' ); ?></strong> <?php echo esc_html( $udate ); ?> </li>   
                <p><?php echo esc_textarea( $umessage ) ?></p>
            </ul>
            <form action="#" method="post">
                <input type="hidden" name="bookingid" value="<?php echo absint( $id ) ?>" >
                <button name="deletebooking" class="deletebooking" type="submit"><?php esc_html_e( 'Delete', 'horseclub' ) ?></button>                
            </form>
        </div>
    </div>
<?php
}

// Booking Form Data 
function horseclub_booking_form_data() {

    $error = new WP_Error();

    if( isset( $_POST['booking_submit'] )  ) {

        // 
        if( ! empty( $_POST['uname'] ) ) {
            $username = $_POST['uname'];
        } else {
            $error->add( 'field', __( 'Name field can\'t be empty.', 'horseclub' ) );
        }
        // 
        if( ! empty( $_POST['uemail'] ) ) {
            $useremail = $_POST['uemail'];
        } else {
            $error->add( 'field', __( 'Email field can\'t be empty.', 'horseclub' ) );
        }
        // 
        if( ! empty( $_POST['uphone'] ) ) {
            $userphone = $_POST['uphone'];
        } else {
            $error->add( 'field', __( 'Phone number field can\'t be empty.', 'horseclub' ) );
        }
        // 
        if( ! empty( $_POST['udate'] ) ) {
            $udate = $_POST['udate'];
        } else {
            $error->add( 'field', __( 'Date field can\'t be empty.', 'horseclub' ) );
        }

        // 
        if( ! empty( $_POST['umessage'] ) ) {
            $umessage = $_POST['umessage'];
        } else {
            $error->add( 'field', __( 'Message field can\'t be empty.', 'horseclub' ) );
        }

        if( 1 > count( $error->get_error_messages() ) ) {

            $args = array(
                'post_type'     => 'consultancy',
                'post_title'    => sanitize_text_field( $username ),
                'post_status'   => 'publish',
            );

            $insert_ID = wp_insert_post( $args );

            if( $insert_ID ) {

            update_post_meta( $insert_ID, 'horseclub_username', sanitize_text_field( $username ) );
            update_post_meta( $insert_ID, 'horseclub_useremail', sanitize_text_field( $useremail ) );
            update_post_meta( $insert_ID, 'horseclub_userphone', sanitize_text_field( $userphone ) );
            update_post_meta( $insert_ID, 'horseclub_udate', sanitize_text_field( $udate ) );
            update_post_meta( $insert_ID, 'horseclub_umessage',  sanitize_textarea_field( $umessage ) );

            return 'Your submission successfully done.';

            }

        } else {
            $messages = $error->get_error_messages();
            return $messages[0];
        }

    }

}
// Delete Booking 
function horseclub_delete_booking() {

    if ( isset( $_POST['deletebooking'] ) && isset( $_POST['bookingid'] ) ) {
        $delete = wp_delete_post( absint( $_POST['bookingid'] ) );

        if( $delete ) {
            echo '<h4 style="text-align:center;">'.esc_html__( 'Successfully Deleted', 'horseclub' ).'</h4>';
        }

    }
    
}

