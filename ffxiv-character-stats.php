<?php
/**
 * Plugin Name:     Final Fantasy XIV Character Statistics
 * Plugin URI:      https://ffxiv.stelth2000inc.com
 * Description:     Pull Final Fantasy XIV character data using XIVAPI.
 * Author:          Dustin Lennon (Demonic Pagan on Sargatanas, Aether Data Center)
 * Version:         1.0
 * Author URI:      https://ffxiv.stelth2000inc.com
 * Network:         false
 */

// Make sure plugin can only be installed via admin interface
if (defined('WP_INSTALLING') && WP_INSTALLING) {
    return;
}

if (!defined('ABSPATH')) {
    return;
}

define('FFXIV_PLUGIN_VERSION', '1.0');
define('FFXIV_PLUGIN_BASENAME', function_exists('plugin_basename') ? plugin_basename(__FILE__) :
    basename(dirname(__FILE__)) . '/' . basename(__FILE__));

global $wp_plugin_paths;
foreach ($wp_plugin_paths as $dir => $realdir) {
    if (strpos(__FILE__, $realdir) === 0) {
        define('FFXIV_PLUGIN_FCPATH', $dir . '/' . basename(__FILE__));
        define('FFXIV_PLUGIN_PATH', trailingslashit($dir));
        break;
    }
}

if (!defined('FFXIV_PLUGIN_FCPATH')) {
    define('FFXIV_PLUGIN_FCPATH', __FILE__);
    define('FFXIV_PLUGIN_PATH', trailingslashit(dirname(FFXIV_PLUGIN_FCPATH)));
}

if (get_option('ffxivPluginActivated') != 1) {
    add_action('activated_plugin', 'ffxivPlugin_save_activation_error');

    function ffxivPlugin_save_activation_error() {
        update_option('ffxivPlugin_act_error', ob_get_contents());
    }
}