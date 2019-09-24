<?php
/**
 * Plugin Name:     WordPress Unit Test Demo
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     unit-tested-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Unit_Tested_Plugin
 */

namespace UnitTestDemo;

/**
 * Get a plugin option from the WordPress database.
 *
 * @param string $name
 *
 * @return mixed
 */
function demo_get_option($name)
{
	return get_option('demo_' . $name);
}
