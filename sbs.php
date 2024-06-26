<?php
/*
 * Plugin Name: Simple Booking System
 * Description: A simple booking system plugin
 * Version:     1.0.1
 * Author:      bl4ckm00n
 * Text Domain: sbs
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/includes/ajax.php';
$plugin_dir = plugin_dir_path( __FILE__ );

use App\Plugin;

Plugin::run( entry_point: __FILE__ );

