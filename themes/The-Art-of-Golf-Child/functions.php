<?php
/**
 * The-Art-of-Golf-Child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The-Art-of-Golf-Child
 * @since The-Art-of-Golf-Child 1.0
 */

 function child_enqueue_scripts(){
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');
   
    if (is_user_logged_in()){
         wp_enqueue_style('app-style', get_stylesheet_directory_uri() . '/assets/css/app.css');
    }

 }
 add_action('wp_enqueue_scripts', 'child_enqueue_scripts');