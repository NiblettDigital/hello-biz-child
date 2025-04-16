<?php
/**
 * Theme functions and definitions.
 *
 * @package HelloBizChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_BIZ_CHILD_VERSION', '1.0.0' );

/**
 * Load child theme scripts & styles.
 */
function hello_biz_child_scripts_styles() {
    wp_enqueue_style(
        'hello-biz-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-biz-style'
        ],
        HELLO_BIZ_CHILD_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'hello_biz_child_scripts_styles', 20 );

/**
 * Include Custom Site Options
 */
if( defined('APP_PATH') && is_dir(APP_PATH) )
    if(file_exists(APP_PATH.'/data/config/theme'))
        include APP_PATH.'/data/config/theme';
