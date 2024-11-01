<?php
/**
 * Plugin Name: WP Redirect 404s To Homepage
 * Plugin URI: https://eastsidecode.com
 * Description: Redirects 404s to homepage
 * Version: 1.1
 * Author: EastSide Code
 * Author URI: http://eastsidecode.com
 * License: GPL12
 */


if ( ! defined( 'ABSPATH' ) ) exit;



add_action('template_redirect', 'escode_redirect_404_to_home');

function escode_redirect_404_to_home() {

	if (is_404()) {

		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".get_bloginfo('url'));

		exit();

	} // end if is a 404

}