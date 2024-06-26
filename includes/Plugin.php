<?php

namespace App;

class Plugin {

	protected static ?self $instance = null;

	protected ?string $entry_point = null;

	public static function run( string $entry_point ): self {
		$plugin = self::get_instance();

		$plugin->entry_point = $entry_point;

		register_activation_hook( $entry_point, static function () {
			self::activate();
		} );

		register_deactivation_hook( $entry_point, static function () {
			self::deactivate();
		} );

		add_action( 'plugins_loaded', static function () {
			self::plugins_loaded();
		} );

		return $plugin;
	}

	public static function get_instance(): self {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	protected static function activate(): void {
		//new Database();
		new PostType();
		flush_rewrite_rules();
	}

	protected static function deactivate(): void {
		flush_rewrite_rules();
	}

	protected static function plugins_loaded(): void {
		new Loader();
	}
}