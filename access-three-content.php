<?php
/**
 * Plugin Name: Access Three Premium Resources
 * Description: Access Three Premium Resources plugin for Elementor with 20+ responsive and modern preloader designs.
 * Plugin URI:  https://bwdplugins.com/plugins/access-three-premium-resources
 * Version:     1.0
 * Author:      Best WP Developer
 * Author URI:  https://bestwpdeveloper.com/
 * Text Domain: access-three-premium-resources
 * Elementor tested up to: 3.0.0
 * Elementor Pro tested up to: 3.7.3
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
require_once ( plugin_dir_path(__FILE__) ) . '/includes/athreepr-plugin-activition.php';
final class athreepr_swiper_preloader{

	const VERSION = '1.0';

	const MINIMUM_ELEMENTOR_VERSION = '3.0.0';

	const MINIMUM_PHP_VERSION = '7.0';

	public function __construct() {
		// Load translation
		add_action( 'athreepr_init', array( $this, 'athreepr_loaded_textdomain' ) );
		// athreepr_init Plugin
		add_action( 'plugins_loaded', array( $this, 'athreepr_init' ) );
	}

	public function athreepr_loaded_textdomain() {
		load_plugin_textdomain( 'access-three-premium-resources' );
	}

	public function athreepr_init() {
		// Check if Elementor installed and activated
		if ( ! did_action( 'elementor/loaded' ) ) {
			add_action( 'admin_notices', 'athreepr_addon_failed_load');
			return;
		}

		// Check for required Elementor version
		if ( ! version_compare( ELEMENTOR_VERSION, self::MINIMUM_ELEMENTOR_VERSION, '>=' ) ) {
			add_action( 'admin_notices', array( $this, 'athreepr_admin_notice_minimum_elementor_version' ) );
			return;
		}

		// Check for required PHP version
		if ( version_compare( PHP_VERSION, self::MINIMUM_PHP_VERSION, '<' ) ) {
			add_action( 'admin_notices', array( $this, 'athreepr_admin_notice_minimum_php_version' ) );
			return;
		}

		// Once we get here, We have passed all validation checks so we can safely include our plugin
		require_once( 'athreepr-main-boots.php' );
	}

	public function athreepr_admin_notice_minimum_elementor_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'access-three-premium-resources' ),
			'<strong>' . esc_html__( 'Access Three Premium Resources', 'access-three-premium-resources' ) . '</strong>',
			'<strong>' . esc_html__( 'Elementor', 'access-three-premium-resources' ) . '</strong>',
			self::MINIMUM_ELEMENTOR_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'access-three-premium-resources') . '</p></div>', $message );
	}

	public function athreepr_admin_notice_minimum_php_version() {
		if ( isset( $_GET['activate'] ) ) {
			unset( $_GET['activate'] );
		}

		$message = sprintf(
			esc_html__( '"%1$s" requires "%2$s" version %3$s or greater.', 'access-three-premium-resources' ),
			'<strong>' . esc_html__( 'Access Three Premium Resources', 'access-three-premium-resources' ) . '</strong>',
			'<strong>' . esc_html__( 'PHP', 'access-three-premium-resources' ) . '</strong>',
			self::MINIMUM_PHP_VERSION
		);

		printf( '<div class="notice notice-warning is-dismissible"><p>' . esc_html__('%1$s', 'access-three-premium-resources') . '</p></div>', $message );
	}
}
function sk_my_plugin() {
	return \Elementor\Plugin::instance();
}
// Instantiate preloader.
new athreepr_swiper_preloader();
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );