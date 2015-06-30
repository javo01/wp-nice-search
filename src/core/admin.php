<?php
/**
 * Create admin page and register script for plugin
 * @package wpns
 * @author Duy Nguyen
 */

class WPNS_Admin {

	/**
	 * Initiliaze
	 */
	function __construct() {
		add_action( 'wp_enqueue_scripts', array( &$this, 'wpns_plugin_script' ) );
	}

	/**
	 * function callback to enqueue scripts and style
	 */
	public function wpns_plugin_script() {
		wp_enqueue_style( 'wpns-style', WPNS_URL . 'assets/css/css/style.css' );
		wp_enqueue_style( 'wpns-fontawesome', WPNS_URL . 'assets/css/font-awesome.min.css' );
	}

} // end class WPNS_Admin

new WPNS_Admin;