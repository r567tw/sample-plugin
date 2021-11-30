<?php

/**
 * Plugin Name:     Sample Plugin
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     hello world
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     sample-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Sample_Plugin
 */

// Your code starts here.
function display_hello_world_page()
{
	echo '<h1>Hello World!</h1>';
}


function hello_world_admin_menu()
{
	add_menu_page(
		'Hello World', // page title
		'Hello World', // menu title
		'manage_options', // capability
		'hello-world', // menu slug
		'display_hello_world_page' // callback function
	);
}
add_action('admin_menu', 'hello_world_admin_menu');


function udn_login_shortcode() {
	// 如果使用者已經登入的話...
	require_once("frontend-form.php");
}

add_shortcode('udn-login-form','udn_login_shortcode');
