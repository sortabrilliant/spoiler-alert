<?php
/**
 * Plugin Name: Spoiler Alert
 * Plugin URI: https://sortabrilliant.com/spoileralert/
 * Description: With Spoiler Alert you can stop ruining things for people on the internet.
 * Author: sorta brilliant
 * Author URI: https://sortabrilliant.com
 * Version: 1.0.3
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Spoiler_Alert
 */

defined( 'ABSPATH' ) || exit;

define( 'SPOILER_ALERT_VERSION', '1.0.3' );
define( 'SPOILER_ALERT_PLUGIN_DIR', dirname( __FILE__ ) );
define( 'SPOILER_ALERT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 */
function spoiler_alert_register_block() {
	$default_asset_file = array(
		'dependencies' => array(),
		'version'      => SPOILER_ALERT_VERSION,
	);

	// Editor Script.
	$asset_filepath = SPOILER_ALERT_PLUGIN_DIR . '/build/spoiler-alert.asset.php';
	$asset_file     = file_exists( $asset_filepath ) ? include $asset_filepath : $default_asset_file;

	wp_enqueue_script(
		'spoiler-alert-editor',
		SPOILER_ALERT_PLUGIN_URL . 'build/spoiler-alert.js',
		$asset_file['dependencies'],
		$asset_file['version'],
		true // Enqueue script in the footer.
	);

	// Editor Styles.
	$asset_filepath = SPOILER_ALERT_PLUGIN_DIR . '/build/spoiler-alert-editor.asset.php';
	$asset_file     = file_exists( $asset_filepath ) ? include $asset_filepath : $default_asset_file;

	wp_enqueue_style(
		'spoiler-alert-editor',
		SPOILER_ALERT_PLUGIN_URL . 'build/spoiler-alert-editor.css',
		array(),
		$asset_file['version']
	);

	// Frontend Styles.
	$asset_filepath = SPOILER_ALERT_PLUGIN_DIR . '/build/spoiler-alert-style.asset.php';
	$asset_file     = file_exists( $asset_filepath ) ? include $asset_filepath : $default_asset_file;

	wp_enqueue_style(
		'spoiler-alert-style',
		SPOILER_ALERT_PLUGIN_URL . 'build/spoiler-alert-style.css',
		array(),
		$asset_file['version']
	);
}

add_action( 'init', 'spoiler_alert_register_block' );

/**
 * Enqueues the frontend script.
 */
function spoiler_alert_enqueue_scripts() {
	$asset_filepath = SPOILER_ALERT_PLUGIN_DIR . '/build/spoiler-alert-front.asset.php';
	$asset_file     = file_exists( $asset_filepath ) ? include $asset_filepath : array(
		'dependencies' => array(),
		'version'      => SPOILER_ALERT_VERSION,
	);

	wp_enqueue_script(
		'spoiler-alert-front',
		SPOILER_ALERT_PLUGIN_URL . 'build/spoiler-alert-front.js',
		$asset_file['dependencies'],
		$asset_file['version'],
		true
	);
}

add_action( 'wp_enqueue_scripts', 'spoiler_alert_enqueue_scripts' );
