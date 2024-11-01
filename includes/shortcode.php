<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.5
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Shopnetic shortcode
 * Register shortcode handler.
 *
 * usage: [shopnetic shopnetic-id="" youtube-id="" width="" height=""]
 *
 * @since 1.5
 */
function shopnetic_shortcode( $atts ) {
    // Set default attributes
    $atts = shortcode_atts(
        array(
            'shopnetic-id' => '',
            'youtube-id' => '',
            'width' => 640,
            'height' => 480,
        ), $atts
    );

    // Embed code
    $embed_code = '<iframe data-shopnetic-id="' . esc_attr( $atts['shopnetic-id'] ) . '" width="' . esc_attr( $atts['width'] ) . '" height="' . esc_attr( $atts['height'] ) . '" src="https://www.youtube.com/embed/' . esc_attr( $atts['youtube-id'] ) . '" frameborder="0" allowfullscreen style="margin-bottom: 0"></iframe><a href="https://shopnetic.com/story/' . esc_attr( $atts['shopnetic-id'] ) . '/" class="shopnetic-link">Watch & Shop</a>';

    // Return embed code
    return $embed_code;

}
add_shortcode( 'shopnetic', 'shopnetic_shortcode' );
