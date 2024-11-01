<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              github.com/abusub
 * @since             1.0.0
 * @package           Ssbd_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       ssbd contact from
 * Plugin URI:        https://wordpress.org/plugins/ssbd-contact-from
 * Description:       This plugin use for contact between user and admin 
 * Version:           1.0.0
 * Author:            nawim
 * Author URI:        github.com/abusub
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ssbd_plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ssbd_plugin-activator.php
 */
function activate_ssbd_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ssbd_plugin-activator.php';
	Ssbd_plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ssbd_plugin-deactivator.php
 */
function deactivate_ssbd_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ssbd_plugin-deactivator.php';
	Ssbd_plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ssbd_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_ssbd_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ssbd_plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ssbd_plugin() {

	$plugin = new Ssbd_plugin_one();
	$plugin->run();
	$plugin->getTheContactFrom();

}
run_ssbd_plugin();
