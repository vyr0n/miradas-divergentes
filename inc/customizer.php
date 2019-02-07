<?php

if(!function_exists('mdwt_customize_register')):
    function mdwt_customize_register($wp_customize){
        $wp_customize->get_setting('blogname')->transport='postMessage';
        $wp_customize->get_setting('blogdescription')->transport ='postMessage';

        if(isset($wp_customize->selective_refresh)){
            $wp_customize->selective_refresh->add_partial('blogname',array(
                'selector'=>'.WP-Header-title',
                'render_callback'=>'mdwt_customize_blogname'
            ));
            $wp_customize->selective_refresh->add_partial('blogdescription',array(
                'selector'=>'.WP-Header-description',
                'render_callback'=>'mdwt_customize_blogdescription'
            ));
        }
    }

endif;

if(!function_exists('mdwt_customize_blogname')):
    function mdwt_customize_blogname(){
        bloginfo( 'name' );
    }
endif;

if(!function_exists('mdwt_customize_blogdescription')):
    function mdwt_customize_blogdescription(){
        bloginfo( 'description' );
    }
endif;