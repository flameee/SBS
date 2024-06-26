<?php

use App\Calendar;
use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function render_calendar(): void {
	global $sbs_calendar;
	$month = $_POST["month"] ?? date( 'n' );
	$year  = $_POST["year"] ?? date( 'Y' );

	if ( ! isset( $sbs_calendar ) ) {
		$sbs_calendar = new Calendar( $month, $year );
	}

	$response = $sbs_calendar->render_calendar_slots();

	echo $response;
	wp_die();
}

// Registrazione delle azioni AJAX
add_action( 'wp_ajax_render_calendar', 'render_calendar' );
add_action( 'wp_ajax_nopriv_render_calendar', 'render_calendar' );