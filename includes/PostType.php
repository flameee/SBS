<?php

namespace App;

class PostType {
	public function __construct() {
		add_action( 'init', [ $this, 'register' ] );
	}

	public function register(): void {
		$labels = array(
			'name'               => 'Prenotazioni',
			'singular_name'      => 'Prenotazione',
			'menu_name'          => 'Prenotazioni',
			'name_admin_bar'     => 'Prenotazione',
			'add_new'            => 'Aggiungi Prenotazione',
			'add_new_item'       => 'Aggiungi Nuova Prenotazione',
			'new_item'           => 'Nuova Prenotazione',
			'edit_item'          => 'Modifica Prenotazione',
			'view_item'          => 'Visualizza Prenotazione',
			'all_items'          => 'Tutte le Prenotazioni',
			'search_items'       => 'Cerca Prenotazione',
			'parent_item_colon'  => 'Prenotazione Padre:',
			'not_found'          => 'Nessuna Prenotazione Trovata.',
			'not_found_in_trash' => 'Nessuna Prenotazione trovata nel Cestino.',
		);

		$args = array(
			'labels'       => $labels,
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => array( 'slug' => 'prenotazioni' ),
			'supports'     => array( 'title', 'editor', 'custom-fields' ),
			'show_in_rest' => true,
		);

		register_post_type( 'prenotazioni', $args );
	}
}