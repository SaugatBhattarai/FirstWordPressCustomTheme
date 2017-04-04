<?php
/*
* ===================================================================
*  INCLUDE SCRIPTS
* ===================================================================
*
*/
function practice_script_enqueue() {
    //css
    wp_enqueue_style('bootstrapstyle',get_template_directory_uri(). '/css/bootstrap.min.css',array(),'3.3.7','all');
    wp_enqueue_style('customstyle',get_template_directory_uri(). '/css/practice.css',array(),'1.0.0','all');
    wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
    //javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array(),'3.3.7',true);
    wp_enqueue_script('customjs',get_template_directory_uri().'/js/practice.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','practice_script_enqueue');

/*
* ===================================================================
*  ACTIVATE MENUS
* ===================================================================
*
*/
function practice_theme_setup() {
    add_theme_support('menus');
    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secondary','Footer Navigation');
}
add_action('init','practice_theme_setup');

/*
 * ===================================================================
 *  THEME SUPPORT FUNCTIONS
 * ===================================================================
 *
 */
$args = array(
    'default-color'          => 'FFFFFF',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
    'default-image' => get_template_directory_uri(). '/images/background.jpg'
);
add_theme_support( 'custom-background', $args );

$defaults = array(
    'default-image'          => get_template_directory_uri() . '/images/imageheader.jpg',
    'width'                  => '',
    'height'                 => '',
    'flex-height'            => true,
    'flex-width'             => true,
    'uploads'                => true,
    'random-default'         => true,
    'header-text'            => true,
    'default-text-color'     => '',
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-header', $defaults );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image','video' ) );

/*
* ===================================================================
*  Sidebar functions
* ===================================================================
*
*/
function practice_widget_setup() {
    register_sidebar(
        array(
            'name'          => 'ABOUT US',
            'id'            => 'sidebar-1',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li></ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'RECENT POSTS',
            'id'            => 'sidebar-2',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li></ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'CONTACT US',
            'id'            => 'sidebar-3',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li></ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init','practice_widget_setup');

?>