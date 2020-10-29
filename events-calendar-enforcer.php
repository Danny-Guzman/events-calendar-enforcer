<?php
/**
 * Plugin Name: Force WP Template for The Events Calendar Plugin
 * Plugin URI: "https://github.com/Danny-Guzman/events-calendar-enforcer"
 * Description: Forces The Events Calendar Plugin to use the WordPress template hierarchy for events instead of its own templates.
 * Author: Danny Guzman
 * Version: 1.0.0
 * Author URI: "https://github.com/Danny-Guzman/"
 *
 * @package TribeEventsEnforcer
 */

define( 'TRIBE_EVENTS_ENFORCER_URL', plugin_dir_url( __FILE__ ) );
define( 'TRIBE_EVENTS_ENFORCER_DIR', plugin_dir_path( __FILE__ ) );

add_action( 'admin_init', 'tribe_events_enforcer_admin_init' );
add_filter( 'tribe_events_views_v2_use_wp_template_hierarchy', 'tribe_events_enforcer_force_template', 10, 4 );

/**
 * Admin Init
 *
 * Triggered before any other hook when a user accesses the admin area.
 * Note, this does not just run on user-facing admin screens.
 * It runs on admin-ajax.php and admin-post.php as well.
 *
 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/admin_init
 * @return void
 */
function tribe_events_enforcer_admin_init() {
	require_once TRIBE_EVENTS_ENFORCER_DIR . 'core/class-tribe-events-enforcer-plugin-update.php';
}

/**
 * With this filter, we can tell The Events Calendar to use the WordPress template hierarchy for events instead of its own templates.
 *
 * @link https://theeventscalendar.com/knowledgebase/k/using-the-template-management-filters/
 *
 * @param  boolean $hijack Whether to transitions the calendar from plugin templates to theme templates.
 * @param  mixed   $template The template located by WordPress.
 * @param  mixed   $context The immutable, global object instance that serves as the Tribe template context.
 * @param  mixed   $query The global $wp_query.
 * @return boolean
 */
function tribe_events_enforcer_force_template( $hijack, $template, $context, $query ) {
	return true;
}
