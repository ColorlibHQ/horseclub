<?php
if( !defined( 'WPINC' ) ){
    die;
}

/*************************
    Define Constant
*************************/

// Define version constant
if( ! defined( 'HORSECLUB_COMPANION_VERSION' ) ) {
    define( 'HORSECLUB_COMPANION_VERSION', '1.0' );
}

// Define dir path constant
if( ! defined( 'HORSECLUB_COMPANION_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_DIR_PATH', HORSECLUB_DIR_PATH_COMPANION );
}

// Define inc dir path constant
if( ! defined( 'HORSECLUB_COMPANION_INC_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_INC_DIR_PATH', HORSECLUB_COMPANION_DIR_PATH . 'inc/' );
}

// Define sidebar widgets dir path constant
if( ! defined( 'HORSECLUB_COMPANION_SW_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_SW_DIR_PATH', HORSECLUB_COMPANION_INC_DIR_PATH . 'sidebar-widgets/' );
}

// Define elementor widgets dir path constant
if( ! defined( 'HORSECLUB_COMPANION_EW_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_EW_DIR_PATH', HORSECLUB_COMPANION_INC_DIR_PATH . 'elementor-widgets/' );
}

// Define demo data dir path constant
if( ! defined( 'HORSECLUB_COMPANION_DEMO_DIR_PATH' ) ) {
    define( 'HORSECLUB_COMPANION_DEMO_DIR_PATH', HORSECLUB_COMPANION_INC_DIR_PATH . 'demo-data/' );
}

// Define companion dir url constant
if( ! defined( 'HORSECLUB_COMPANION_DIR_URL' ) ) {
    define( 'HORSECLUB_COMPANION_DIR_URL', HORSECLUB_DIR_URI . 'inc/horseclub-companion/' );
}

// Define companion elementor dir url constant
if( ! defined( 'HORSECLUB_COMPANION_EL_URL' ) ) {
    define( 'HORSECLUB_COMPANION_EL_URL', HORSECLUB_DIR_URI . 'inc/horseclub-companion/inc/elementor-widgets/' );
}


require_once HORSECLUB_COMPANION_DIR_PATH . 'horseclub-init.php';

