<?php
/*
Theme Name: WordPress Spring 2017 Section 01 Demo
Author: Ayumi Kojima
Author URI: http://ayumik.com/wordpress/
Description: This is the demo theme for the Web170 class for the Spring 2017 Quarter. 
Version: 42.0
*/

// Register Sidebars
register_sidebars(5, array('before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>'));
//
register_sidebar(array('name' =>  __('Fred', 'fred'), 'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget' => '</div>' ));

// Register Navigation Menus
register_nav_menus(array('main-menu' => __( 'Main Menu')));
//

//Add theme support for thumbnails for my posts
//add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
set_post_thumbnail_size('icon', 300, 300, true);

// Excerpt for Pages
add_post_type_support('page', 'excerpt');
//

//Title tag
function get_my_title_tag() {
	
	global $post; 
	
	if (is_front_page() || is_home()) { // front or blog page
	
		bloginfo('description'); // tagline
        
		
	} elseif (is_page() || is_single()) { // page or posting 
	
		echo get_the_title($post->ID); // page or posting title
		
	} else { // 404, search, etc.
		
		bloginfo('description'); // tagline
	}
	
	if ($post->post_parent) {
		
		echo ' | ';
		echo get_the_title($post->post_parent);
	
	}
	
	echo ' | ';
	bloginfo('name');
	echo ' | ';
	echo 'Seattle, WA.';
	
}

?>
