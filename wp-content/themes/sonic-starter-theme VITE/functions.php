<?php
add_action( 'after_setup_theme', function() {
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'editor-styles' );
});


// ACF Gutenberg Blocks
add_action('acf/init', 'register_all_acf_blocks');

function register_all_acf_blocks() {
    $blocks_dir = get_template_directory() . '/blocks/';

    foreach (glob($blocks_dir . '*.php') as $block_file) {

        // Lee el encabezado del archivo
        $block_data = get_file_data($block_file, array(
            'title'           => 'Title',
            'description'     => 'Description',
            'category'        => 'Category',
            'icon'            => 'Icon',
            'keywords'        => 'Keywords',
            'enqueue_style'   => 'enqueue_style',
            'enqueue_script'  => 'enqueue_script',
        ));

        // Normaliza el slug del bloque
        $slug = basename($block_file, '.php');

        // Keywords separados por comas
        $keywords = array_map('trim', explode(',', $block_data['keywords']));

        acf_register_block_type(array(
            'name'              => $slug,
            'title'             => $block_data['title'],
            'description'       => $block_data['description'],
            'render_template'   => $block_file,
            'category'          => $block_data['category'],
            'icon'              => $block_data['icon'],
            'keywords'          => $keywords,
            'enqueue_style'     => ($block_data['enqueue_style'] === 'true')
                ? get_template_directory_uri() . '/blocks/' . $slug . '.css'
                : '',
            'enqueue_script'    => ($block_data['enqueue_script'] === 'true')
                ? get_template_directory_uri() . '/blocks/' . $slug . '.js'
                : '',
            'mode'              => 'edit'
        ));
    }
}


define( 'SONIC_THEME_DEV_MODE', true );

function sonic_enqueue_assets() {
    if ( defined( 'SONIC_THEME_DEV_MODE' ) && SONIC_THEME_DEV_MODE ) {
        $vite_server = 'https://localhost:5173';

        add_action( 'wp_head', function() use ( $vite_server ) {
            echo '<script type="module" src="' . $vite_server . '/@vite/client"></script>' . "\n";
        });

        wp_enqueue_style(
            'sonic-styles',
            get_template_directory_uri() . '/dist/styles.css',
            [],
            filemtime( get_template_directory() . '/dist/styles.css' )
        );

    } else {
        wp_enqueue_style(
            'sonic-styles',
            get_template_directory_uri() . '/dist/styles.css',
            [],
            filemtime( get_template_directory() . '/dist/styles.css' )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'sonic_enqueue_assets' );

