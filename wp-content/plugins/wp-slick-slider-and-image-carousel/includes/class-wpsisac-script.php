<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package WP Slick Slider and Image Carousel
 * @since 1.0.0
 */

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Wpsisac_Script {

	function __construct() {

		// Action to add style && script in backend
		add_action( 'admin_enqueue_scripts', array($this, 'wpsisac_admin_script') );

		// Action to add style at front side
		add_action( 'wp_enqueue_scripts', array( $this, 'wpsisac_front_style' ) );

		// Action to add script at front side
		add_action( 'wp_enqueue_scripts', array( $this, 'wpsisac_front_script' ) );	

	}

	/**
	 * Enqueue admin script
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.1
	 */
	function wpsisac_admin_script( $hook ) {
		wp_register_script( 'wpsisac-admin-js', WPSISAC_URL.'assets/js/wpsisac-admin.js', array('jquery'), WPSISAC_VERSION, true );

		if( $hook == WPSISAC_POST_TYPE.'_page_wpsisacm-designs' ) {
			wp_enqueue_script( 'wpsisac-admin-js' );
		}
	}

	/**
	 * Function to add style at front side
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0.0
	 */
	function wpsisac_front_style() {

		// Registring and enqueing slick slider css
		if( !wp_style_is( 'wpos-slick-style', 'registered' ) ) {
			wp_register_style( 'wpos-slick-style', WPSISAC_URL.'assets/css/slick.css', array(), WPSISAC_VERSION );
		}
		wp_enqueue_style( 'wpos-slick-style' );

		// Registring and enqueing public css
		wp_register_style( 'wpsisac-public-style', WPSISAC_URL.'assets/css/slick-slider-style.css', array(), WPSISAC_VERSION );
		wp_enqueue_style( 'wpsisac-public-style' );
	}

	/**
	 * Function to add script at front side
	 * 
	 * @package WP Slick Slider and Image Carousel
	 * @since 1.0.0
	 */
	function wpsisac_front_script() {

		// Registring slick slider script
		if( !wp_script_is( 'wpos-slick-jquery', 'registered' ) ) {
			wp_register_script( 'wpos-slick-jquery', WPSISAC_URL.'assets/js/slick.min.js', array('jquery'), WPSISAC_VERSION, true );
		}

		// Registring and enqueing public script
		wp_register_script( 'wpsisac-public-script', WPSISAC_URL.'assets/js/wpsisac-public.js', array('jquery'), WPSISAC_VERSION, true );
		wp_localize_script( 'wpsisac-public-script', 'Wpsisac', array(
																	'is_mobile' => (wp_is_mobile()) ? 1 : 0,
																	'is_rtl' 	=> (is_rtl()) 		? 1 : 0,
																	));
	}

}

$wpsisac_script = new Wpsisac_Script();