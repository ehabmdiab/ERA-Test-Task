<?php
/**
 * Plugin Name: Custom Gutenberg Block
 * Description: A custom Gutenberg block with a button that toggles a menu.
 * Version: 1.0
 * Author: Your Name
 */

// Enqueue the JavaScript file for the custom block.
function enqueue_custom_block_script() {
    wp_enqueue_script(
        'ToggleMenu-js',
        plugin_dir_url( __FILE__ ) . 'js/ToggleMenu.js', // Replace with the actual path to your custom-block.js file
        array( 'wp-blocks', 'wp-dom', 'wp-components', 'wp-editor' ),
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_custom_block_script' );
