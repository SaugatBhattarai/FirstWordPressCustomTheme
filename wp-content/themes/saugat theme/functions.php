<?php
    /*
     * ===================================================================
     *  INCLUDE SCRIPTS
     * ===================================================================
     *
     */
	function saugat_script_enqueue() {
	    //css
        wp_enqueue_style('bootstrapstyle',get_template_directory_uri(). '/css/bootstrap.min.css',array(),'3.3.7','all');
        wp_enqueue_style('customstyle',get_template_directory_uri(). '/css/saugat.css',array(),'1.0.0','all');
        //javascript
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array(),'3.3.7',true);
		wp_enqueue_script('customjs',get_template_directory_uri().'/js/saugat.js',array(),'1.0.0',true);
	}
	add_action('wp_enqueue_scripts','saugat_script_enqueue');

    /*
    * ===================================================================
    *  ACTIVATE MENUS
    * ===================================================================
    *
    */
	function saugat_theme_setup() {
	    add_theme_support('menus');
	    register_nav_menu('primary','Primary Header Navigation');
        register_nav_menu('secondary','Footer Navigation');
    }
    add_action('init','saugat_theme_setup');

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
        'default-image'          => get_template_directory_uri() . '/images/header.jpg',
//        'width'                  => 1170,
//        'height'                 => 500,
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
function saugat_widget_setup() {
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar-1',
            'class'         => 'custom',
            'description'   => 'Standard Sidebar',
            'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li></ul>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action('widgets_init','saugat_widget_setup');

/*
* ===================================================================
*  HTML margin top 32 px removal
* ===================================================================
*
*/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');