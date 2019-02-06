<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('|',true,'right'); ?></title>
    <?php wp_head();?>
</head>
<body>
    <header class="Header">
        <div class="Logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" >Logo</a>
        </div>
        <?php 
            if(has_nav_menu('main_menu')):
                wp_nav_menu(array(
                    'theme_location'=>'main_menu',
                    'container'=>'nav',
                    'container_class'=>'Menu'
                ));
            else:
        ?>
        <nav class="Menu">
            <ul>
                <?php wp_list_pages('title_li'); ?>
            </ul>
        </nav>      
        <?php
            endif;
        ?>
        <?php    get_sidebar();?>
    </header>
    <main class="Main">