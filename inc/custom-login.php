<?php
// https://codex.wordpress.org/Customizing_the_Login_Form

if(!function_exists('mdwt_login_scripts')):
    function mdwt_login_scripts(){
        wp_register_style('google-fonts','https://fonts.googleapis.com/css?family=Roboto:400,700',array(),'1.0.0','all');
        wp_register_style('custom-properties', get_stylesheet_directory_uri().'/css/custom_properties.css',array(),'1.0.0','all');
        wp_register_style('login-page-style',get_template_directory_uri().'/css/login_page.css',array('google-fonts','custom-properties'),'1.0.0','all');

        wp_enqueue_style('google-fonts');
        wp_enqueue_style('custom-properties');
        wp_enqueue_style('login-page-style');

        wp_register_script( 'login-page-script',get_template_directory_uri().'/js/login_page.js', array('jquery'),'1.0.0',true );

        wp_enqueue_script('jquery');
        wp_enqueue_script('login-page-script');
    }
endif;

add_action('login_enqueue_scripts','mdwt_login_scripts');

if(!function_exists('mdwt_login_logo_url')):
    function mdwt_login_logo_url(){
        return home_url();
    }
endif;

add_filter( 'login_headerurl', 'mdwt_login_logo_url' );

if(!function_exists('mdwt_login_logo_url_title')):
    function mdwt_login_logo_url_title(){
        return get_bloginfo( 'title' ).' | '.get_bloginfo('description');
    }
endif;

add_filter( 'login_headertitle', 'mdwt_login_logo_url_title' );