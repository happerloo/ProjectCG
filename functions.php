<?php
add_action( 'init', 'create_project_cpt', 0 );

// Register Custom Post Type bron
function create_project_cpt() {

	$labels = array(
		'name' => _x( 'projecten', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'project', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'projecten', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'project', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'project Archief', 'textdomain' ),
		'attributes' => __( 'project Attributen', 'textdomain' ),
		'parent_item_colon' => __( 'Hoofd project:', 'textdomain' ),
		'all_items' => __( 'Alle projecten', 'textdomain' ),
		'add_new_item' => __( 'project opstellen', 'textdomain' ),
		'add_new' => __( 'Opstellen', 'textdomain' ),
		'new_item' => __( 'project opstellen', 'textdomain' ),
		'edit_item' => __( 'Bewerken project', 'textdomain' ),
		'update_item' => __( 'Bijwerken project', 'textdomain' ),
		'view_item' => __( 'project bekijken', 'textdomain' ),
		'view_items' => __( 'projecten bekijken', 'textdomain' ),
		'search_items' => __( 'Zoeken project', 'textdomain' ),
		'not_found' => __( 'Geen projecten gevonden.', 'textdomain' ),
		'not_found_in_trash' => __( 'Geen projecten gevonden in de prullenbak.', 'textdomain' ),
		'featured_image' => __( 'Uitgelichte afbeelding', 'textdomain' ),
		'set_featured_image' => __( 'Uitgelichte afbeelding instellen', 'textdomain' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'textdomain' ),
		'use_featured_image' => __( 'Uitgelichte afbeelding instellen', 'textdomain' ),
		'insert_into_item' => __( 'Invoegen in projecten', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Geüpload naar dit projecten', 'textdomain' ),
		'items_list' => __( 'projecten Lijst', 'textdomain' ),
		'items_list_navigation' => __( 'projecten Lijst navigatie', 'textdomain' ),
		'filter_items_list' => __( 'Filter projecten Lijst', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'project', 'textdomain' ),
		'description' => __( 'projecten', 'textdomain' ),
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
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );

?>

