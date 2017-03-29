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
add_action('init','practice_theme_setup')
?>