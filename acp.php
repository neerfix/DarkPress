<?php
/**
 * @package DarkPress
 * @version 0.3
 */
/*
Plugin Name: Dark Press
Plugin URI: https://wordpress.org/plugins/dark-press?banner_url=https://developer.wordpress.org/files/2015/05/hello-dolly.png
Description: Transform your Panel Admin in Dark Mode.
Author: Nicolas Notararigo
Version: 0.3 [BETA]
Author URI: https://www.nicolasnotararigo.com/
*/

//add_action( 'admin_bar_menu', 'toolbar_link_to_mypage', 11 );
//
//function toolbar_link_to_mypage( $wp_admin_bar ) {
//    $args = array(
//        'id'    => 'my_page',
//        'title' => 'ON',
//        'href'  => '/',
//        'meta'  => array( 'class' => 'SwitchDM SwitchOn',
//                          'onclick'  => 'ef',
//                          'title' => 'Switch to Off DarkMode'
//        )
//    );
//    $wp_admin_bar->add_node( $args );
//}

function DarkMode() {
//    wp_enqueue_script( 'custom_js', plugins_url( 'js/custom.js', __FILE__ ), array(), $my_js_ver );
    $src = plugins_url( './style.css',    __FILE__ );
    wp_enqueue_style( 'DarkMode', $src, '', '0.3' );
}

add_action('admin_enqueue_scripts', 'DarkMode');