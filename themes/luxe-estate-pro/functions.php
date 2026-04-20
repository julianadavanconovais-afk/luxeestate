<?php
/**
 * Luxe Estate Pro — Theme Functions
 *
 * Block-focused FSE theme for luxury real estate.
 * Registers block patterns, pattern categories, custom post types,
 * and enqueues theme assets.
 */

declare(strict_types=1);

if ( ! defined( 'ABSPATH' ) ) exit;

/* ── Constants ─────────────────────────────────────────────────── */
define( 'LUXE_VERSION',   wp_get_theme()->get( 'Version' ) );
define( 'LUXE_PATH',      get_template_directory() );
define( 'LUXE_URL',       get_template_directory_uri() );
define( 'LUXE_TEXT',      'luxe-estate-pro' );

/* ── Theme Setup ────────────────────────────────────────────────── */
add_action( 'after_setup_theme', function (): void {
	load_theme_textdomain( LUXE_TEXT, LUXE_PATH . '/languages' );

	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );

	add_editor_style( 'assets/css/editor.css' );

	register_nav_menus( [
		'primary'  => __( 'Primary Navigation', LUXE_TEXT ),
		'footer'   => __( 'Footer Links',        LUXE_TEXT ),
		'social'   => __( 'Social Links',        LUXE_TEXT ),
	] );
} );

/* ── Enqueue Assets ─────────────────────────────────────────────── */
add_action( 'wp_enqueue_scripts', function (): void {
	wp_enqueue_style(
		'luxe-estate-pro',
		LUXE_URL . '/style.css',
		[],
		LUXE_VERSION
	);
} );

/* ── Block Pattern Categories ───────────────────────────────────── */
add_action( 'init', function (): void {
	register_block_pattern_category( 'luxe-hero', [
		'label'       => __( 'Luxe — Hero Sections',     LUXE_TEXT ),
		'description' => __( 'Full-width hero banners for landing pages.', LUXE_TEXT ),
	] );
	register_block_pattern_category( 'luxe-properties', [
		'label'       => __( 'Luxe — Property Listings', LUXE_TEXT ),
		'description' => __( 'Property cards, grids, and list layouts.', LUXE_TEXT ),
	] );
	register_block_pattern_category( 'luxe-agents', [
		'label'       => __( 'Luxe — Agents & Team',     LUXE_TEXT ),
		'description' => __( 'Agent profiles and team grids.', LUXE_TEXT ),
	] );
	register_block_pattern_category( 'luxe-testimonials', [
		'label'       => __( 'Luxe — Testimonials',      LUXE_TEXT ),
		'description' => __( 'Client reviews and social proof.', LUXE_TEXT ),
	] );
	register_block_pattern_category( 'luxe-cta', [
		'label'       => __( 'Luxe — Call to Action',    LUXE_TEXT ),
		'description' => __( 'Conversion sections and CTAs.', LUXE_TEXT ),
	] );
	register_block_pattern_category( 'luxe-neighborhoods', [
		'label'       => __( 'Luxe — Neighborhoods',     LUXE_TEXT ),
		'description' => __( 'Area and neighborhood showcase sections.', LUXE_TEXT ),
	] );
	register_block_pattern_category( 'luxe-stats', [
		'label'       => __( 'Luxe — Stats & Numbers',   LUXE_TEXT ),
		'description' => __( 'Statistic counters and achievement sections.', LUXE_TEXT ),
	] );
} );

/* ── Custom Post Types ──────────────────────────────────────────── */
add_action( 'init', function (): void {
	/* Property */
	register_post_type( 'property', [
		'labels' => [
			'name'               => __( 'Properties',       LUXE_TEXT ),
			'singular_name'      => __( 'Property',         LUXE_TEXT ),
			'add_new'            => __( 'Add Property',      LUXE_TEXT ),
			'add_new_item'       => __( 'Add New Property',  LUXE_TEXT ),
			'edit_item'          => __( 'Edit Property',     LUXE_TEXT ),
			'view_item'          => __( 'View Property',     LUXE_TEXT ),
			'search_items'       => __( 'Search Properties', LUXE_TEXT ),
			'not_found'          => __( 'No properties found.', LUXE_TEXT ),
			'all_items'          => __( 'All Properties',    LUXE_TEXT ),
		],
		'public'             => true,
		'has_archive'        => true,
		'show_in_rest'       => true,
		'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ],
		'rewrite'            => [ 'slug' => 'properties' ],
		'menu_icon'          => 'dashicons-building',
		'template'           => [],
		'template_lock'      => false,
	] );

	/* Agent */
	register_post_type( 'agent', [
		'labels' => [
			'name'          => __( 'Agents',       LUXE_TEXT ),
			'singular_name' => __( 'Agent',        LUXE_TEXT ),
			'add_new_item'  => __( 'Add New Agent', LUXE_TEXT ),
			'edit_item'     => __( 'Edit Agent',    LUXE_TEXT ),
			'view_item'     => __( 'View Agent',    LUXE_TEXT ),
			'all_items'     => __( 'All Agents',    LUXE_TEXT ),
		],
		'public'        => true,
		'has_archive'   => true,
		'show_in_rest'  => true,
		'supports'      => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
		'rewrite'       => [ 'slug' => 'agents' ],
		'menu_icon'     => 'dashicons-id',
	] );

	/* Neighborhood */
	register_post_type( 'neighborhood', [
		'labels' => [
			'name'          => __( 'Neighborhoods',       LUXE_TEXT ),
			'singular_name' => __( 'Neighborhood',        LUXE_TEXT ),
			'add_new_item'  => __( 'Add New Neighborhood', LUXE_TEXT ),
			'edit_item'     => __( 'Edit Neighborhood',    LUXE_TEXT ),
			'all_items'     => __( 'All Neighborhoods',    LUXE_TEXT ),
		],
		'public'       => true,
		'has_archive'  => true,
		'show_in_rest' => true,
		'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ],
		'rewrite'      => [ 'slug' => 'neighborhoods' ],
		'menu_icon'    => 'dashicons-location',
	] );

	/* Taxonomies */
	register_taxonomy( 'property_type', 'property', [
		'labels'       => [ 'name' => __( 'Property Types', LUXE_TEXT ), 'singular_name' => __( 'Property Type', LUXE_TEXT ) ],
		'public'       => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		'rewrite'      => [ 'slug' => 'property-type' ],
	] );

	register_taxonomy( 'property_status', 'property', [
		'labels'       => [ 'name' => __( 'Statuses', LUXE_TEXT ), 'singular_name' => __( 'Status', LUXE_TEXT ) ],
		'public'       => true,
		'hierarchical' => false,
		'show_in_rest' => true,
		'rewrite'      => [ 'slug' => 'property-status' ],
	] );

	register_taxonomy( 'property_location', 'property', [
		'labels'       => [ 'name' => __( 'Locations', LUXE_TEXT ), 'singular_name' => __( 'Location', LUXE_TEXT ) ],
		'public'       => true,
		'hierarchical' => true,
		'show_in_rest' => true,
		'rewrite'      => [ 'slug' => 'location' ],
	] );
} );

/* ── Block Supports ─────────────────────────────────────────────── */
add_filter( 'block_type_metadata_settings', function ( array $settings, array $metadata ): array {
	if ( in_array( $metadata['name'], [ 'core/cover', 'core/group' ], true ) ) {
		$settings['supports']['shadow'] = true;
	}
	return $settings;
}, 10, 2 );

/* ── Allow SVG Uploads ──────────────────────────────────────────── */
add_filter( 'upload_mimes', function ( array $mimes ): array {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
} );

/* ── Excerpt Length ─────────────────────────────────────────────── */
add_filter( 'excerpt_length', fn() => 25 );
add_filter( 'excerpt_more', fn() => '&hellip;' );
