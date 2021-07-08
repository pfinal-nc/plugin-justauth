<?php
/*
Plugin Name: JustAuth
Plugin URI: https://justauth.wiki
Description:
Version:0.1
Author: JustAuth-南丞
Author URI:
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {License URI}.
*/

if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'PLUGIN_NAME_VERSION', '0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_plugin_name() {
    require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-justauth-activator.php';
    Plugin_JustAuth_Activator::activate();
}

///**
// * The code that runs during plugin deactivation.
// * This action is documented in includes/class-plugin-name-deactivator.php
// */
//function deactivate_plugin_name() {
//    require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';
//    Plugin_Name_Deactivator::deactivate();
//}

register_activation_hook( __FILE__, 'activate_plugin_name' );
//register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );
