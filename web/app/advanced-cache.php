<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = '/Users/kodefant/kode/wp_kodefant/web/app/cache/wp-rocket/';
$rocket_config_path = '/Users/kodefant/kode/wp_kodefant/web/app/wp-rocket-config/';

if ( file_exists( '/Users/kodefant/kode/wp_kodefant/web/app/plugins/wp-rocket/inc/vendors/classes/class-rocket-mobile-detect.php' ) && ! class_exists( 'Rocket_Mobile_Detect' ) ) {
	include_once '/Users/kodefant/kode/wp_kodefant/web/app/plugins/wp-rocket/inc/vendors/classes/class-rocket-mobile-detect.php';
}
if ( file_exists( '/Users/kodefant/kode/wp_kodefant/web/app/plugins/wp-rocket/inc/front/process.php' ) ) {
	include '/Users/kodefant/kode/wp_kodefant/web/app/plugins/wp-rocket/inc/front/process.php';
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}