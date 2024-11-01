<?php
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
 * Shopnetic oEmbed
 * Register oEmbed provider.
 *
 * @since 1.0
 */
function shopnetic_oembed_provider() {
    wp_oembed_add_provider( '#https?://(www.)?shopnetic.com/story/.*#i', 'https://shopnetic.com/api/oembed', true );
}
add_action( 'init', 'shopnetic_oembed_provider' );
