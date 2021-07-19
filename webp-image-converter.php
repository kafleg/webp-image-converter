<?php
/*
 * Plugin Name:       JPEG to WebP Image Converter 
 * Description:       Covert all your site JPEG image to WebP image format.
 * Version:           1.0.0
 * Requires at least: 5.8-RC4
 * Requires PHP:      7.2
 * Author:            KafleG
 * Author URI:        https://kafleg.com.np
 * Text Domain:       webp-image-converter
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Filter to convert your JPEG images to WebP format images.
 */
add_filter( 'image_editor_output_format', function( $formats ) {
        $formats['image/jpeg'] = 'image/webp';
        return $formats;
} );