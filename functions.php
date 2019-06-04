<?php
add_action( 'init', 'codex_bestemming_init' );
/**
 * Register a bestemming post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_bestemming_init() {
	$labels = array(
		'name'               => _x( 'Bestemmingen', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Bestemming', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Bestemming', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Bestemming', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Nieuwe bestemming', 'bestemming', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Bestemming toevoegen', 'your-plugin-textdomain' ),
		'new_item'           => __( 'Nieuwe bestemmingk', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Bestemming wijzigen', 'your-plugin-textdomain' ),
		'view_item'          => __( 'Bestemming bekijken', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Alle bestemmingen', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Bestemming zoeken', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent bestemmingen:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'Geen bestemmingen gevonden.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'Geen bestemmingen gevonden in de prullenbak.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'bestemming' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'bestemming', $args );
}


// Register Custom Post Type blog
function create_blog_cpt() {

	$labels = array(
		'name' => _x( 'blogs', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'blog', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'blogs', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'blog', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'blog Archief', 'textdomain' ),
		'attributes' => __( 'blog Attributen', 'textdomain' ),
		'parent_item_colon' => __( 'Hoofd blog:', 'textdomain' ),
		'all_items' => __( 'Alle blogs', 'textdomain' ),
		'add_new_item' => __( 'blog opstellen', 'textdomain' ),
		'add_new' => __( 'Opstellen', 'textdomain' ),
		'new_item' => __( 'blog opstellen', 'textdomain' ),
		'edit_item' => __( 'Bewerken blog', 'textdomain' ),
		'update_item' => __( 'Bijwerken blog', 'textdomain' ),
		'view_item' => __( 'blog bekijken', 'textdomain' ),
		'view_items' => __( 'blogs bekijken', 'textdomain' ),
		'search_items' => __( 'Zoeken blog', 'textdomain' ),
		'not_found' => __( 'Geen blogs gevonden.', 'textdomain' ),
		'not_found_in_trash' => __( 'Geen blogs gevonden in de prullenbak.', 'textdomain' ),
		'featured_image' => __( 'Uitgelichte afbeelding', 'textdomain' ),
		'set_featured_image' => __( 'Uitgelichte afbeelding instellen', 'textdomain' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'textdomain' ),
		'use_featured_image' => __( 'Uitgelichte afbeelding instellen', 'textdomain' ),
		'insert_into_item' => __( 'Invoegen in blog', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Geüpload naar dit blog', 'textdomain' ),
		'items_list' => __( 'blogs Lijst', 'textdomain' ),
		'items_list_navigation' => __( 'blogs Lijst navigatie', 'textdomain' ),
		'filter_items_list' => __( 'Filter blogs Lijst', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'blog', 'textdomain' ),
		'description' => __( 'blogs van Edwin Drenth.', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'blog', $args );

}
add_action( 'init', 'create_blog_cpt', 0 );

// Register Custom Post Type bron
function create_bron_cpt() {

	$labels = array(
		'name' => _x( 'bronnen', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'bron', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'bronnen', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'bron', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'bron Archief', 'textdomain' ),
		'attributes' => __( 'bron Attributen', 'textdomain' ),
		'parent_item_colon' => __( 'Hoofd bron:', 'textdomain' ),
		'all_items' => __( 'Alle bronnen', 'textdomain' ),
		'add_new_item' => __( 'bron opstellen', 'textdomain' ),
		'add_new' => __( 'Opstellen', 'textdomain' ),
		'new_item' => __( 'bron opstellen', 'textdomain' ),
		'edit_item' => __( 'Bewerken bron', 'textdomain' ),
		'update_item' => __( 'Bijwerken bron', 'textdomain' ),
		'view_item' => __( 'bron bekijken', 'textdomain' ),
		'view_items' => __( 'bronnen bekijken', 'textdomain' ),
		'search_items' => __( 'Zoeken bron', 'textdomain' ),
		'not_found' => __( 'Geen bronnen gevonden.', 'textdomain' ),
		'not_found_in_trash' => __( 'Geen bronnen gevonden in de prullenbak.', 'textdomain' ),
		'featured_image' => __( 'Uitgelichte afbeelding', 'textdomain' ),
		'set_featured_image' => __( 'Uitgelichte afbeelding instellen', 'textdomain' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'textdomain' ),
		'use_featured_image' => __( 'Uitgelichte afbeelding instellen', 'textdomain' ),
		'insert_into_item' => __( 'Invoegen in bron', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Geüpload naar dit bron', 'textdomain' ),
		'items_list' => __( 'bronnen Lijst', 'textdomain' ),
		'items_list_navigation' => __( 'bronnen Lijst navigatie', 'textdomain' ),
		'filter_items_list' => __( 'Filter bronnen Lijst', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'bron', 'textdomain' ),
		'description' => __( 'bronnen van Edwin Drenth.', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'bron', $args );

}
add_action( 'init', 'create_bron_cpt', 0 );


?>