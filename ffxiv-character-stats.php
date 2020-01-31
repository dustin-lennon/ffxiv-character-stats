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

 register_activation_hook(  __FILE__, '');
 register_deactivation_hook( __FILE__, '');
 register_uninstall_hook( __FILE__, '');

 // When plugin is activated, add the necessary database tables to store data
 function ffxiv_create_database_tables() {
     // TODO: Add code to create database tables
 }