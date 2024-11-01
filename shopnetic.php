<?php
/*
Plugin Name: Shopnetic
Plugin URI:  https://wordpress.org/plugins/shopnetic/
Description: Embed Shopnetic Widget into your WordPress site.
Version: 1.0.0
Author: love2shop inc.
Author URI:  https://shopnetic.com/
Text Domain: shopnetic
*/

/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Include plugin files
 */
include_once ( plugin_dir_path( __FILE__ ) . 'includes/i18n.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/oembed.php' );
include_once ( plugin_dir_path( __FILE__ ) . 'includes/shortcode.php' );

add_action('wp_head', 'shopnetic_js');

function shopnetic_js()
{
    echo '<script async src="https://shopnetic.com/js/embed/loader.js"></script>';
}
