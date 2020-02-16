<?php

/**
 * Plugin Name: boilerplate
 * Description: wordpress plugin boilerplate
 * Version: 1.0.0
 * Author: 
 * Author URI: 
 * Text Domain: boilerplate
*/
/**
 * This is wordpress plugin boilerplate 
    Copyright (C) 2020  lokesh kumar

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
defined('ABSPATH') || die();

define('BL_PLUGIN_DOMAIN', 'boilerplate');
define('BL_PLUGIN_URL', plugin_dir_url(__FILE__));
define('BL_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('BL_PLUGIN_BASE', plugin_basename(__FILE__));

require BL_PLUGIN_PATH . 'include/constants.php';
require BL_PLUGIN_PATH . 'vendor/autoload.php';
