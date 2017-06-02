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
?>
