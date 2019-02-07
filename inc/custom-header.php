<?php
if(!function_exists('mdwt_custom_header')):
    function mdwt_custom_header(){
        // Activar cabecera configurable
        // https://developer.wordpress.org/themes/functionality/custom-headers/
        add_theme_support( 'custom-header',apply_filters('mdwt_custom_header_args', array(
            'default-image'=>get_template_directory_uri().'/img/header-image.jpg',
            'default-text-color'=>'FFF',
            'width'=>1200,
            'height'=>720,
            'flex-width'=>true,
            'flex-height'=>true,
            'video'=>true,
            'wp-head-callback'=>'mdwt_wp_header_style'
        )) );
    }
endif;

add_action('after_setup_theme', 'mdwt_custom_header');

if (!function_exists('mdwt_wp_header_style')):
    function mdwt_wp_header_style(){
        $header_text_color=get_header_textcolor();
    }
?>
<style>
    .WP-Header-branding * {
        color: #<?php echo esc_attr($header_text_color);?>;
    }
</style>
<?php
endif;