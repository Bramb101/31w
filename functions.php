<?php

/**
 * Underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Underscore
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

function under_setup()
{
    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action('after_setup_theme', 'under_setup');

/**
 * Enqueue scripts and styles.
 */
function under_scripts()
{
    wp_enqueue_style('under-style', get_stylesheet_uri(), array(), _S_VERSION);
}
add_action('wp_enqueue_scripts', 'under_scripts');
