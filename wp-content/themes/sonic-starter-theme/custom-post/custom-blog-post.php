<?php
/*-----------------------------------------------------------------------------------*/
/* CUSTOM POST
/*-----------------------------------------------------------------------------------*/

function create_post_news() {
    register_post_type( 'news',
        array(
            'labels'       => array(
                'name'       => __( 'Custom Post News' ),
            ),
            'public'       => true,
            'hierarchical' => true,
            'has_archive'  => true,
            'supports'     => array(
                'title',
                'thumbnail',
                'editor'
            ),
            'show_in_menu' => 'menu-news',
            'show_in_rest' => true,
        )
    );
}
add_action( 'init', 'create_post_news' );