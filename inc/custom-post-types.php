<?php
// Register Recipe Custom Post-Type

add_action('init', 'custom_post_type_register');
 
function custom_post_type_register() {
 
  $labels = array(
    'name' => _x('Properties', 'retail partners'),
    'singular_name' => _x('Property', 'property'),
    'add_new' => _x('Add New', 'property'),
    'add_new_item' => __('Add New Property'),
    'edit_item' => __('Edit Property'),
    'new_item' => __('New property'),
    'view_item' => __('View Property'),
    'search_items' => __('Search Properties'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
 
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor'),
	
  ); 
 
  register_post_type( 'properties' , $args );
 
  $labels = array(
    'name' => _x('Press', 'post type general name'),
    'singular_name' => _x('Press', 'post type singular name'),
    'add_new' => _x('Add New', 'press'),
    'add_new_item' => __('Add New Press'),
    'edit_item' => __('Edit Press'),
    'new_item' => __('New Press'),
    'view_item' => __('View Press'),
    'search_items' => __('Search Press'),
    'not_found' =>  __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
  );
 
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'menu_icon' => get_stylesheet_directory_uri() . '/img/recipe-icon.png',
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail','comments'),
    'taxonomies' => array(
      'post_tag',
      'category'
    )
    ); 
 
  // register_post_type( 'heirloom_recipes' , $args );

	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Projects',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Project',
		'edit_item' => 'Edit Project',
		'new_item' => 'New Project',
		'view_item' => 'View Project',
		'search_items' => 'Search Project',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Project',
		'parent_item_colon' => ''
	);

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail','comments')
    );
 
  register_post_type( 'wds_project' , $args );

   $labels = array(
    'name' => 'Custom Photo Gallery',
    'singular_name' => 'Photo Page Item',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New',
    'edit_item' => 'Edit Photo Page',
    'new_item' => 'New Photo Page',
    'view_item' => 'View Photo Page Item',
    'search_items' => 'Search Photos',
    'not_found' =>  'Nothing found',
    'not_found_in_trash' => 'Nothing found',
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','thumbnail','comments', 'page-attributes')
    );
 
  register_post_type( 'custom_photos' , $args );

  $labels = array(
    'name' => 'Press',
    'singular_name' => 'Press',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Press',
    'edit_item' => 'Edit Press',
    'new_item' => 'New Press',
    'view_item' => 'View Press',
    'search_items' => 'Search Press',
    'not_found' =>  'Nothing found',
    'not_found_in_trash' => 'Nothing found',
    'parent_item_colon' => ''
  );

  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'capability_type' => 'post',
    'exclude_from_search' => false,
    'supports' => array('title','author','editor','excerpt','thumbnail','comments', 'page-attributes')
   
   );
 
  register_post_type( 'press' , $args );
}



?>