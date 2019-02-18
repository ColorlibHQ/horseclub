<?php 
/**
 * @Packge 	   : Horseclub
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */
 
// Base URI
if( ! defined( 'HORSECLUB_DIR_URI' ) ) {
	define( 'HORSECLUB_DIR_URI', get_template_directory_uri().'/' );
}

// assets URI
if( ! defined( 'HORSECLUB_DIR_ASSETS_URI' ) ) {
	define( 'HORSECLUB_DIR_ASSETS_URI', HORSECLUB_DIR_URI.'assets/' );
}

// Css File URI
if( ! defined( 'HORSECLUB_DIR_CSS_URI' ) ) {
	define( 'HORSECLUB_DIR_CSS_URI', HORSECLUB_DIR_ASSETS_URI .'css/' );
}

// Js File URI
if( ! defined( 'HORSECLUB_DIR_JS_URI' ) ) {
	define( 'HORSECLUB_DIR_JS_URI', HORSECLUB_DIR_ASSETS_URI .'js/' );
}

// Base Directory
if( ! defined( 'HORSECLUB_DIR_PATH' ) ) {
	define( 'HORSECLUB_DIR_PATH', get_parent_theme_file_path().'/' );
}

//Inc Folder Directory
if( ! defined( 'HORSECLUB_DIR_PATH_INC' ) ) {
	define( 'HORSECLUB_DIR_PATH_INC', HORSECLUB_DIR_PATH.'inc/' );
}

//Horseclub libraries Folder Directory
if( ! defined( 'HORSECLUB_DIR_PATH_LIBS' ) ) {
	define( 'HORSECLUB_DIR_PATH_LIBS', HORSECLUB_DIR_PATH_INC.'libraries/' );
}

//Classes Folder Directory
if( ! defined( 'HORSECLUB_DIR_PATH_CLASSES' ) ) {
	define( 'HORSECLUB_DIR_PATH_CLASSES', HORSECLUB_DIR_PATH_INC.'classes/' );
}

//Hooks Folder Directory
if( ! defined( 'HORSECLUB_DIR_PATH_HOOKS' ) ) {
	define( 'HORSECLUB_DIR_PATH_HOOKS', HORSECLUB_DIR_PATH_INC.'hooks/' );
}

//Widgets Folder Directory
if( ! defined( 'HORSECLUB_DIR_PATH_WIDGET' ) ) {
	define( 'HORSECLUB_DIR_PATH_WIDGET', HORSECLUB_DIR_PATH_INC.'widgets/' );
}

//Companion Folder Directory
if( ! defined( 'HORSECLUB_DIR_PATH_COMPANION' ) ) {
	define( 'HORSECLUB_DIR_PATH_COMPANION', HORSECLUB_DIR_PATH_INC .'horseclub-companion/' );
}


/**
 * Include File
 *
 */

require_once( HORSECLUB_DIR_PATH_INC . 'breadcrumbs.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'widgets-reg.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'horseclub-functions.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'commoncss.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'support-functions.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( HORSECLUB_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( HORSECLUB_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( HORSECLUB_DIR_PATH_HOOKS . 'hooks.php' );
require_once( HORSECLUB_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( HORSECLUB_DIR_PATH_COMPANION . 'horseclub-companion.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( HORSECLUB_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Horseclub object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$obj = new Horseclub();
