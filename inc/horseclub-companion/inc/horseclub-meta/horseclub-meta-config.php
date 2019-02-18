<?php 
if( !defined( 'WPINC' ) ){
    die;
}
/**
 * @Packge     : Horseclub Companion
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
    

    // Horseclub meta scripts enqueue
    add_action( 'admin_enqueue_scripts', 'horseclub_meta_scripts' );
    function horseclub_meta_scripts() {
        wp_enqueue_style( 'horseclub-meta-style', HORSECLUB_COMPANION_DIR_URL . 'inc/horseclub-meta/assets/css/horseclub-meta.css' );
        wp_enqueue_script( 'horseclub-meta-script', HORSECLUB_COMPANION_DIR_URL . 'inc/horseclub-meta/assets/js/horseclub-meta.js', array('jquery'), '1.0', true );
    }

    // Page Header select option meta
    add_action("add_meta_boxes", "horseclub_add_custom_meta_box");
    function horseclub_add_custom_meta_box() {
        // page header background meta box
        add_meta_box("pageheader-meta-box", esc_html__( "Builder Page Header Settings", 'horseclub' ), "horseclub_bpheader_meta_box_markup", "page", "side", "high", null);
    }

    // Page Header settings meta field markup
    function horseclub_bpheader_meta_box_markup( $object ) {

    wp_nonce_field( basename( __FILE__ ), "horseclub-bpheader-meta-nonce" );

    ?>
        <div class="header-opt header-show-opt">
            <p class="post-attributes-label-wrapper">
                <label for="pageheader-dropdown" class="post-attributes-label"><?php esc_html_e( 'Select Page Header', 'horseclub' ); ?></label>
            </p>
            <?php 
            $val = get_post_meta( $object->ID ,'_horseclub_builderpage_header_show', true );
            ?>
            <select name="bpheadershow" class="horseclub-admin-selectbox" id="page_header_selectbox">
                <option value="show" <?php echo esc_attr( $val == 'show' ? 'selected' : '' ); ?>><?php esc_html_e( 'Show', 'horseclub' ); ?></option>
                <option value="hide" <?php echo esc_attr( $val == 'hide' ? 'selected' : '' ); ?> ><?php esc_html_e( 'Hide', 'horseclub' ); ?></option>
            </select>

        </div>
        <div class="header-opt header-img">
            <p class="post-attributes-label-wrapper">
                <label for="pageheader-dropdown" class="post-attributes-label"><?php esc_html_e( 'Set Page Header Background', 'horseclub' ); ?></label>
            </p>
            <?php 
            $val = get_post_meta( $object->ID ,'_horseclub_builderpage_headerimg', true );
            ?>
            <select name="bpheaderimg" class="horseclub-admin-selectbox" id="page_header_bg_selectbox">
                <option value="customize" <?php echo esc_attr( $val == 'customize' ? 'selected' : '' ); ?>><?php esc_html_e( 'From Customize', 'horseclub' ); ?></option>
                <option value="featured" <?php echo esc_attr( $val == 'featured' ? 'selected' : '' ); ?> ><?php esc_html_e( 'Featured Image', 'horseclub' ); ?></option>
            </select>

        </div>
    <?php  
    }

    // Page header background settings save
    function horseclub_save_builder_page_header_settings_meta( $post_id, $post, $update ) {
        if ( ! isset( $_POST["horseclub-bpheader-meta-nonce"] ) || ! wp_verify_nonce( $_POST["horseclub-bpheader-meta-nonce"], basename( __FILE__ ) ) )
            return $post_id;

        if( ! current_user_can( "edit_post", $post_id ) )
            return $post_id;

        if( defined( "DOING_AUTOSAVE" ) && DOING_AUTOSAVE )
            return $post_id;

        $slug = "page";
        if( $slug != $post->post_type )
            return $post_id;

        $meta_headershow = "show";

        if( isset( $_POST["bpheadershow"] ) ) {
            $meta_headershow = $_POST["bpheadershow"];
        }
        update_post_meta( absint( $post_id ), "_horseclub_builderpage_header_show", sanitize_text_field( $meta_headershow ) );

        $meta_headerimg = "";

        if( isset( $_POST["bpheaderimg"] ) ) {
            $meta_headerimg = $_POST["bpheaderimg"];
        }
        update_post_meta( absint( $post_id ), "_horseclub_builderpage_headerimg", sanitize_text_field( $meta_headerimg ) );

    }

    add_action( "save_post", "horseclub_save_builder_page_header_settings_meta", 10, 3 );
?>