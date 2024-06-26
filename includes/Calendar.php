<?php

namespace App;

use Random\RandomException;
use WP_Query;

class Calendar {

	public int $month;
	public int $year;

	public function __construct( int $month = null, int $year = null ) {
		$this->month = $month ?? (int) date( 'n' );
		$this->year  = $year ?? (int) date( 'Y' );
	}

	/**
	 * @throws RandomException
	 */
	public function render_calendar_slots(): string {
		$res                = '';
		$sbs_days           = $this->get_calendar_days();
		$sbs_previous_month = $sbs_days["previous"];
		$sbs_next_month     = $sbs_days["next"];
		$sbs_current_month  = $sbs_days["current"];
		$current_day        = date( 'd' );
		$current_month      = date( 'n' );

		foreach ( $sbs_previous_month as $item ) {
			$event_list = $this->render_event_list( $item["events"] );
			$res        .= '<div class="relative bg-gray-50 px-3 py-2 text-gray-500 transition-all duration-200 hover:bg-gray-100 hover:ring-2 hover:ring-inset hover:ring-gray-500">
                                <span>' . $item['day'] . '</span>
                                ' . $event_list . '
                            </div>';
		}
		foreach ( $sbs_current_month as $item ) {
			$event_list     = $this->render_event_list( $item["events"] );
			$is_current_day = ( (int) $item['day'] === (int) $current_day && $this->month === (int) $current_month ) ? 'flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white' : '';

			$res .= '<div class="relative bg-white px-3 py-2 transition-all duration-200 hover:bg-gray-100 hover:ring-2 hover:ring-inset hover:ring-indigo-600">
                                <span class="' . $is_current_day . '">' . $item['day'] . '</span>
                                ' . $event_list . '
                            </div>';
		}
		foreach ( $sbs_next_month as $item ) {
			$event_list = $this->render_event_list( $item["events"] );
			$res        .= '<div class="relative bg-gray-50 px-3 py-2 text-gray-500 transition-all duration-200 hover:bg-gray-100 hover:ring-2 hover:ring-inset hover:ring-gray-500">
                                <span>' . $item['day'] . '</span>
                                ' . $event_list . '
                            </div>';
		}

		return $res;
	}

	/**
	 */
	public function get_calendar_days(): array {
		$res                      = array();
		$numberOfDaysCurrentMonth = cal_days_in_month( CAL_GREGORIAN, $this->month, $this->year );
		$days                     = range( 1, $numberOfDaysCurrentMonth );
		foreach ( $days as $day ) {
			$e = $this->check_events_in_day( $day, $this->month, $this->year );

			$res[] = array( 'day' => $day, 'events' => $e );
		}

		$daysCurrentMonth = range( 1, $numberOfDaysCurrentMonth );

		$daysPrevMonth = $this->get_days_from_previous_month( $this->month, $this->year );

		$remainingDays       = 42 - ( count( $daysPrevMonth ) + $numberOfDaysCurrentMonth );
		$daysToTakeNextMonth = $remainingDays;

		$daysNextMonth = $this->get_days_from_next_month( $this->month, $this->year, $daysToTakeNextMonth );

		return array( 'previous' => $daysPrevMonth, 'current' => $res, 'next' => $daysNextMonth );
	}

	private function check_events_in_day( $day, $month, $year ): bool|array {
		$res = array();
		//TODO: add control on CPT prenotazioni
		$query = new WP_Query( array(
			'post_type'      => 'prenotazioni', // Il tuo Custom Post Type
			'date_query'     => array(
				array(
					'year'  => $year,
					'month' => $month,
					'day'   => $day,
				),
			),
			'posts_per_page' => - 1
		) );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$reservation_title = get_the_title();
				$slot_terms        = wp_get_post_terms( get_the_ID(), 'slot' );

				// Controlla se ci sono termini associati e ottieni il nome del termine
				$slot_term_name = '';
				if ( ! empty( $slot_terms ) ) {
					$slot_term_name = $slot_terms[0]->name; // Assumi che ci sia un solo termine
				}
				$res[] = array(
					'name'      => $reservation_title,
					'slot'      => get_field( 'slot_disponibili' ),
					'slot_term' => $slot_term_name
				);
			}
		}

		return $res;
	}

	/**
	 */
	private function get_days_from_previous_month( $month, $year ): array {
		$res                   = array();
		$prevMonth             = $this->get_previous_month( $month );
		$prevYear              = $this->get_previous_year( $month, $year );
		$numberOfDaysPrevMonth = cal_days_in_month( CAL_GREGORIAN, $prevMonth, $prevYear );

		$firstDayOfWeekCurrentMonth = $this->get_day_of_week( 1, $month, $year );

		$daysToTakePrevMonth = $firstDayOfWeekCurrentMonth - 1;

		$days = range( $numberOfDaysPrevMonth - $daysToTakePrevMonth + 1, $numberOfDaysPrevMonth );

		foreach ( $days as $day ) {
			$e = $this->check_events_in_day( $day, $prevMonth, $prevYear );

			$res[] = array( 'day' => $day, 'events' => $e );
		}

		return $res;
	}

	private function get_previous_month( int $month ): int {
		return $month === 1 ? 12 : $month - 1;
	}

	private function get_previous_year( int $month, int $year ): int {
		return $month === 1 ? $year - 1 : $year;
	}

	public function get_day_of_week( $day, $month, $year ): string {
		return date( 'N', strtotime( "$year-$month-$day" ) );
	}

	/**
	 */
	private function get_days_from_next_month( $month, $year, $days_to_take ): array {
		$res = array();

		$next_month = $this->get_next_month( $month );
		$next_year  = $this->get_next_year( $month, $year );

		$days = range( 1, $days_to_take );
		foreach ( $days as $day ) {
			$e = $this->check_events_in_day( $day, $next_month, $next_year );

			$res[] = array( 'day' => $day, 'events' => $e );
		}

		return $res;
	}

	private function get_next_month( $month ): int {
		return $month === 12 ? 1 : $month + 1;
	}

	private function get_next_year( $month, $year ): int {
		return $month === 12 ? $year + 1 : $year;
	}

	private function render_event_list( array $events ): string {
		$res = '';
		if ( $events ) {
			$res .= '<div class="mt-2 max-h-20 overflow-y-auto scrollable-slot">';
			foreach ( $events as $event ) {
				$res .= '
              <div class="group flex pr-3 cursor-pointer event-item" onclick="toggleSlideover(this)" data-selected-slot="' . $event["slot_term"] . '" data-title="' . $event['name'] . '">
                <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600" title="' . $event['name'] . '">' . $event['name'] . '</p>
              </div>';
			}
			$res .= '</div>';
		}

		return $res;
	}

	public function render_mini_calendar_slots(): void {
		$sbs_days           = $this->get_calendar_days();
		$sbs_previous_month = $sbs_days["previous"];
		$sbs_next_month     = $sbs_days["next"];
		$sbs_current_month  = $sbs_days["current"];
		foreach ( $sbs_previous_month as $item ) {
			echo '<button type="button"
                                    class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2021-12-27" class="ml-auto">' . $item . '</time>
                                <span class="sr-only">0 events</span>
                            </button>';
		}
		foreach ( $sbs_current_month as $item ) {
			echo '<button type="button"
                                    class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-01-01" class="ml-auto">' . $item . '</time>
                                <span class="sr-only">0 events</span>
                            </button>';
		}
		foreach ( $sbs_next_month as $item ) {
			echo '<button type="button"
                                    class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
                                <time datetime="2022-02-01" class="ml-auto">' . $item . '</time>
                                <span class="sr-only">0 events</span>
                            </button>';
		}
	}
}

