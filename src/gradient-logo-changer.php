<?php
/**
 * Plugin Name: Gradient Logo Changer
 * Author: Gradient Team
 * Author URI: https://gradient.ba
 */

$pluginDir = plugin_dir_path( __FILE__ );

require_once("$pluginDir" . 'wp-admin-settings.php');
require_once("$pluginDir" . 'wp-frontend.php');

add_action('admin_init', 'set_domains_settings_inputs');
add_filter('wp_get_attachment_image_src', 'modify_logo_image', 10, 3);