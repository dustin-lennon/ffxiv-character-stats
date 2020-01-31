<?php
/**
 * Plugin Name:     Final Fantasy XIV Character Statistics
 * Plugin URI:      https://ffxiv.stelth2000inc.com
 * Description:     Pull Final Fantasy XIV character data using XIVAPI.
 * Version:         1.0
 * Requires PHP:    7.3
 * Author:          Dustin Lennon (Demonic Pagan on Sargatanas, Aether Data Center)
 * Author URI:      https://ffxiv.stelth2000inc.com
 * License:         GPL v2 or later
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Copyright 2020 Dustin Lennon (email: dustin.lennon@stelth2000inc.com)
 * Final Fantasy XIV Character Statistics is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Final Fantasy XIV Character Statistics is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public
 * License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * (Final Fantasy XIV Character Statistics). If not, see
 * (http://www.gnu.org/licenses/gpl-2.0.txt).
 */

// Make sure plugin can only be installed via admin interface
if (defined('WP_INSTALLING') && WP_INSTALLING)  {
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
