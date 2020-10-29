<?php
/**
 * Plugin Name: Force WP Template for The Events Calendar Plugin
 * Plugin URI: "https://github.com/Danny-Guzman/events-calender-enforcer"
 * Description: Forces The Events Calendar Plugin to use the WordPress template hierarchy for events instead of its own templates.
 * Author: Danny Guzman
 * Version: 1.0.0
 * Author URI: "https://github.com/Danny-Guzman/"
 *
 * @package TribeEventsEnforcer
 */

define( 'TRIBE_EVENTS_ENFORCER_URL', plugin_dir_url( __FILE__ ) );
define( 'TRIBE_EVENTS_ENFORCER_DIR', plugin_dir_path( __FILE__ ) );

add_filter( 'tribe_events_views_v2_use_wp_template_hierarchy', 'tribe_events_enforcer_force_template', 10, 4 );

function tribe_events_enforcer_force_template( $hijack, $template, $context, $query ) {
	return true;
  }