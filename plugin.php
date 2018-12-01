<?php
/**
 * Plugin Name: Spoiler Alert
 * Plugin URI: https://sortabrilliant.com/spoileralert/
 * Description: With Spoiler Alert you can stop ruining things for people on the internet.
 * Author: sorta brilliant
 * Author URI: https://sortabrilliant.com
 * Version: 1.0.0
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package SB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';

/**
 * GitHub Plugin Updater.
 */
function sbb_spoiler_alert_github_plugin_updater_test_init() {
	include_once 'updater.php';

	if ( is_admin() ) {
		$config = array(
			'slug'               => plugin_basename( __FILE__ ),
			'proper_folder_name' => 'sbb-spoiler-alert',
			'api_url'            => 'https://api.github.com/repos/sortabrilliant/spoiler-alert',
			'raw_url'            => 'https://raw.github.com/sortabrilliant/spoiler-alert/master',
			'github_url'         => 'https://github.com/sortabrilliant/spoiler-alert',
			'zip_url'            => 'https://github.com/sortabrilliant/spoiler-alert/archive/master.zip',
			'requires'           => '4.9.8',
			'tested'             => '4.9.8',
			'readme'             => 'README.md',
		);

		new SBB_SpoilerAlert_GitHub_Updater( $config );
	}
}
add_action( 'init', 'sbb_spoiler_alert_github_plugin_updater_test_init' );
