<?php

namespace App;

class Loader {
	public string $plugin_name;
	public string $plugin_version;
	public string $plugin_title;

	public string $plugin_path;

	public function __construct() {
		require_once __DIR__ . '/../consts/plugin.php';

		//Define plugin information
		$this->plugin_name    = PLUGIN_NAME;
		$this->plugin_version = PLUGIN_VERSION;
		$this->plugin_title   = PLUGIN_TITLE;
		$this->plugin_path    = WP_PLUGIN_URL . '/' . $this->plugin_name;

		//Register custom actions
		add_filter( $this->plugin_name . '_version', [ $this, 'plugin_version' ] );
		add_filter( $this->plugin_name . '_name', [ $this, 'plugin_name' ] );
		add_action( 'admin_menu', [ $this, 'register_admin_page' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'load_admin_styles' ], 99 );
		add_action( 'admin_enqueue_scripts', [ $this, 'load_admin_scripts' ], 99 );

		if ( ! post_type_exists( 'prenotazioni' ) ) {
			new PostType();
		}
	}

	public function load_admin_styles( $hook_suffix ): void {
		if ( $hook_suffix === "toplevel_page_sbs-general" ) {
			wp_enqueue_style( $this->plugin_name . '-style', $this->plugin_path . '/assets/admin.css', null, $this->plugin_version );
		}
	}

	public function load_admin_scripts( $hook_suffix ): void {
		if ( $hook_suffix === "toplevel_page_sbs-general" ) {
			wp_enqueue_script( $this->plugin_name . '-script', $this->plugin_path . '/assets/sbs.js', array( 'jquery' ), $this->plugin_version, true );

			wp_localize_script( $this->plugin_name . '-script', 'ajax_object', array(
				'ajax_url' => admin_url( 'admin-ajax.php' )
			) );
		}
	}

	public function register_admin_page(): void {
		add_menu_page( $this->plugin_title, 'SBS', 'manage_options', 'sbs-general', [
			$this,
			'create_admin_page'
		], 'dashicons-book-alt', 60 );
	}

	public function plugin_version(): string {
		return $this->plugin_version;
	}

	public function plugin_name(): string {
		return $this->plugin_name;
	}

	public function create_admin_page(): void {
		$sbs_calendar = new Calendar();
		$loader       = $this;
		require_once __DIR__ . '/views/sbs-general.php';
	}

	public function sbs_options(): object {
		$option_value = get_option( 'sbs_item_name' );

		if ( $option_value === false ) {
			update_option( 'sbs_item_name', "Item Name" );
		}

		return (object) array( 'name' => $option_value );
	}
}