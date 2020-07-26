<?php

/**
 * Plugin Name: Books Post Type
 * Description: A Custom Post Type for Books
 * Version: 0.0.1
 * Author: Stan Potums
 */

if (!defined('WPINC')) {
    die;
}

define('BOOKSPATH', plugin_dir_path(__FILE__));

require_once(BOOKSPATH . '/post-types/register.php');
add_action('init', 'books_register_type');

require_once(BOOKSPATH . '/taxonomies/register.php');
add_action( 'init', 'books_register_author_taxonomy' );