<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       github.com/abusub
 * @since      1.0.0
 *
 * @package    Ssbd_plugin
 * @subpackage Ssbd_plugin/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php
add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_menu_page('My Plugin Dashboard', 'My Plugin', 'read', 'my-unique-identifier', 'my_plugin_function');
}

function my_plugin_function(){
	
}

