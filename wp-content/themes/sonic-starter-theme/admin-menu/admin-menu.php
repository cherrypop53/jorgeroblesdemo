<?php
/*-----------------------------------------------------------------------------------*/
/* CUSTOM MENU FOR NEWS
/*-----------------------------------------------------------------------------------*/
function admin_menu_news() {
    add_menu_page(
        'Latest News',
        'Latest News',
        'read',
        'menu-news',
        '',
        'dashicons-admin-home',
        40
    );
}

add_action( 'admin_menu', 'admin_menu_news' );