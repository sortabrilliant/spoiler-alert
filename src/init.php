<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 * @since 1.0.0
 */
function sbb_spoiler_alert_block_assets() {
	// Styles.
	wp_enqueue_style(
		'sbb-spoiler-alert-style-css',
		plugins_url( 'dist/blocks.style.build.css', dirname( __FILE__ ) ),
		array(),
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' )
	);

	if ( ! is_admin() ) {
		// Scripts.
		wp_enqueue_script(
			'sbb-spoiler-alert-theme-js',
			plugins_url( '/src/sbb-spoiler-alert-theme.js', dirname( __FILE__ ) ),
			array( 'jquery' ),
			filemtime( plugin_dir_path( __DIR__ ) . 'src/sbb-spoiler-alert-theme.js' ),
			true
		);
	}
}

add_action( 'enqueue_block_assets', 'sbb_spoiler_alert_block_assets' );

/**
 * Enqueue Gutenberg block assets for backend editor.
 *
 * @since 1.0.0
 */
function sbb_spoiler_alert_editor_assets() {
	wp_enqueue_script(
		'sbb_spoiler_alert-block-js',
		plugins_url( '/dist/blocks.build.js', dirname( __FILE__ ) ),
		array( 'wp-i18n', 'wp-element', 'wp-editor', 'wp-edit-post' ),
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ),
		true // load in the footer
	);

	wp_enqueue_style(
		'sbb_spoiler_alert-block-editor-css',
		plugins_url( 'dist/blocks.editor.build.css', dirname( __FILE__ ) ),
		array( 'wp-edit-blocks' ),
		filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.editor.build.css' )
	);
}
add_action( 'enqueue_block_editor_assets', 'sbb_spoiler_alert_editor_assets' );
