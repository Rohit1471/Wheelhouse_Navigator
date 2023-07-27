<?php


function enqueue_all_files() {

    // JQuery CDN
    wp_enqueue_script( 'jquery-cdn', "https://code.jquery.com/jquery-3.7.0.js", array(), '1.0', false );
    
    // Fontawesome JS
    wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/4576560a6b.js', array(), '5.15.3', false );
    
    // Fontawesome_CSS
    wp_enqueue_style( 'Fontawesome_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css', array(), '1.0', false);
    
    // Slick CSS
    wp_enqueue_style( 'Slick_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array(), '1.0', false);
    
    // Slick Theme CSS
    wp_enqueue_style( 'Slick_Theme_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css', array(), '1.0', false);

    // Slick JS
    wp_enqueue_script( 'Slick_JS', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js', array(), '1.0', false );
    
    // My JS
    wp_enqueue_script( 'my_script', get_template_directory_uri(). ( '/assets/js/wn_script.js' ), array(), '1.0', false );

    // My Font CSS
    wp_enqueue_style( 'my_font_style', get_template_directory_uri() . '/assets/fonts/stylesheet.css', array(), '1.0', false);
    
    // My CSS
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/style.css', array(), '1.0', false);

    // My Compass CSS
    wp_enqueue_style( 'my_compass_style', get_template_directory_uri(). ( '/assets/css/compass.css' ), array(), '1.0', false );
    
    // My Sextant CSS
    wp_enqueue_style( 'my_sextant_style', get_template_directory_uri(). ( '/assets/css/sextant.css' ), array(), '1.0', false );
    
    // My Sonar CSS
    wp_enqueue_style( 'my_sonar_style', get_template_directory_uri(). ( '/assets/css/sonar.css' ), array(), '1.0', false );
    
}   // Intializing the function
    add_action( 'wp_enqueue_scripts', 'enqueue_all_files' );



    // ACF function to add header and footer under a different option

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));    
}

// Function to identify a SVG as file type
function acf_svg_file_type($file_types) {
    $file_types['svg'] = 'image/svg+xml';
    return $file_types;
}
add_filter('upload_mimes', 'acf_svg_file_type');


// Registring for menu : This function hepls in showing menu option under appearance tab => appearance>menu
function mytheme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => ' Header_Menu',
        'secondary-menu' => 'Primary Header Right',
        'footer-menu' => 'Footer Menu'
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Okay, so now we have seen a basic example using ACF and Font Awesome. 
// Let’s use ACF Pro to create a social media icon builder for our site’s footer. 
// We will create a “Theme General Settings” page for that purpose. 
// These settings should apply globally to all pages, so we will want to manage them in a single place.

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
      'page_title' => 'Theme General Settings',
      'menu_title' => 'Theme Settings',
      'menu_slug' => 'theme-general-settings',
      'capability' => 'edit_posts',
      'redirect' => false
    ]);
  }


//   Adding theme support for adding page template under the page attribute option in wordpress dashboard
    add_theme_support( 'page-templates' );


// To add category option for pages
    function enable_categories_for_pages() {
        register_taxonomy_for_object_type('category', 'page');
    }
    add_action('init', 'enable_categories_for_pages');
    


    function mytheme_setup() {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'mytheme_setup');

?>
