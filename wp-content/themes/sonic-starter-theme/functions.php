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


        $block_data = get_file_data($block_file, array(
            'title'           => 'Title',
            'description'     => 'Description',
            'category'        => 'Category',
            'icon'            => 'Icon',
            'keywords'        => 'Keywords',
            'enqueue_style'   => 'enqueue_style',
            'enqueue_script'  => 'enqueue_script',
        ));

        $slug = basename($block_file, '.php');

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

function sonic_enqueue_styles() {
    // Frontend styles
    wp_enqueue_style(
        'sonic-styles',
        get_template_directory_uri() . '/scss/styles.css',
        array(),
        filemtime(get_template_directory() . '/scss/styles.css'),
        'all'
    );

    // Frontend scripts
    wp_enqueue_script(
        'sonic-scripts',
        get_template_directory_uri() . '/dist/scripts.js',
        array(),
        filemtime(get_template_directory() . '/dist/scripts.js'), // Dynamic Version
        true
    );
}
add_action('wp_enqueue_scripts', 'sonic_enqueue_styles');

//Styles in gutemberg backend
function sonic_editor_styles() {
    add_editor_style('scss/styles.css');
}
add_action('after_setup_theme', 'sonic_editor_styles');

include(get_template_directory() . '/custom-post/custom-blog-post.php');
include(get_template_directory() . '/admin-menu/admin-menu.php');