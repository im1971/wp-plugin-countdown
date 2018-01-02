<?php
/**
 * Plugin Name: Coming Soon
 * Description: Use this plugin for set coming soon.
 * Plugin URI:
 * Author: Mohammad Imran
 * Author URI:
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: hek_coming_soon
 */

if ( !defined('ABSPATH') ) die( 'Sorry! This is not your place!' );


//----------------------------------------------------------------------
// Core constant defination
//----------------------------------------------------------------------
if (!defined('HEK_PLUGIN_VERSION')) define( 'HEK_PLUGIN_VERSION', '1.0.0' );
if (!defined('HEK_PLUGIN_BASENAME')) define( 'HEK_PLUGIN_BASENAME', plugin_basename(__FILE__) );
if (!defined('HEK_MINIMUM_WP_VERSION')) define( 'HEK_MINIMUM_WP_VERSION', '3.5' );
if (!defined('HEK_PLUGIN_DIR')) define( 'HEK_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if (!defined('HEK_PLUGIN_URI')) define( 'HEK_PLUGIN_URI', plugins_url('', __FILE__) );
if (!defined('HEK_PLUGIN_TEXTDOMAIN')) define( 'HEK_PLUGIN_TEXTDOMAIN', 'hek_coming_soon' );


//----------------------------------------------------------------------
// Including Files
//----------------------------------------------------------------------


//add option page
require_once HEK_PLUGIN_DIR . '/inc/submenu.php';
require_once HEK_PLUGIN_DIR . '/inc/shortcode.php';
//require_once HEK_PLUGIN_DIR . '/inc/markup.php';

//register front end script & style
function hek_enqueue_styles(){

//register style sheet
    wp_register_style('bootstrap',HEK_PLUGIN_URI .'/css/bootstrap.min.css',true,HEK_PLUGIN_VERSION);
    wp_enqueue_style ('bootstrap');

//register script
    wp_register_script('js-bootstrap',HEK_PLUGIN_URI .'/js/bootstrap.min.js',array('jquery'),HEK_PLUGIN_VERSION,true);
    wp_enqueue_script ('js-bootstrap');

}

add_action('wp_enqueue_scripts','hek_enqueue_styles');


//register admin panel style
function hek_admin_enque_script(){
    //bootstrap for admin panel
    wp_register_style('bootstrap-admin',HEK_PLUGIN_URI .'/css/bootstrap.min.css',true,HEK_PLUGIN_VERSION);
    wp_enqueue_style ('bootstrap-admin');

    //css for admin panel
    wp_register_style("hek-admin-style", HEK_PLUGIN_URI . "/admin/css/admin.css",true,HEK_PLUGIN_VERSION);
    wp_enqueue_style("hek-admin-style");

    //js file for admin

    wp_register_script('admin-comingsoon',HEK_PLUGIN_URI .'/js/comingsoon.js',array('jquery'),HEK_PLUGIN_VERSION,true);
    wp_enqueue_script ('admin-comingsoon');

    //enqueue media

    wp_enqueue_media();

    //for date picker
    wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');

    //for color picker

    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'my-script-handle', plugins_url('my-script.js', __FILE__ ), array( 'wp-color-picker' ), false, true );

}

add_action("admin_enqueue_scripts", "hek_admin_enque_script");