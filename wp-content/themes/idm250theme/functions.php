<?php 

if (version_compare('7.4', phpversion(), '>')) {
    die('You must be using PHP 7.4 or greater');
}

// Check WP version

if (version_compare($GLOBALS['wp_version'], '5.4.2', '<')) {
    die('WP theme only works in Wordpress 5.4.2 or later. Please upgrade your WP site');
}

function create_posttype() {
 
    register_post_type( 'inks',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Digital Inks' ),
                'singular_name' => __( 'Digital Ink' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'inks'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function include_styles()
{
    // Example of including an external link
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Barrio&family=Days+One&display=swap');
    wp_enqueue_style('hFont', 'https://fonts.googleapis.com/css2?family=Barrio&display=swap');
    // Example of including a style local to your theme root
    wp_enqueue_style(
        'idm250-css',
        get_template_directory_uri() . '/styles/main.css'
    );
}
// When WP performs this action, call our function
add_action('wp_enqueue_scripts', 'include_styles');

//function include_js_files()
/*{
  wp_enqueue_script(
     'idm250-js',
     get_template_directory_uri() . '/scripts/main.js',
      [],
       false,
      true
    );
}*/
// When WP performs this action, call our function
//add_action('wp_enqueue_scripts', 'include_js_files');

function register_theme_navigation()
{
    register_nav_menus([
        'primary_menu' => 'Primary Menu',
        
    ]);

}

add_action('after_setup_theme', 'register_theme_navigation');

function add_post_thumbnails_support() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'add_post_thumbnails_support');


function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
//add_filter('pre_get_posts','SearchFilter');
?>