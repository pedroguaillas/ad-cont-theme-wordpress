<?php

// Soporte de características
function mi_plantilla_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery']);
    add_theme_support('custom-logo', [
        'height'      => 50,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Menú de navegación
    register_nav_menus([
        'primary' => __('Menú Principal', 'mi-plantilla'),
        'footer'  => __('Menú Footer', 'mi-plantilla'),
    ]);
}
add_action('after_setup_theme', 'mi_plantilla_setup');

// Cargar CSS y JS
function mi_plantilla_scripts() {
    wp_enqueue_style(
        'mi-plantilla-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Inter:wght@300;400;500;600;700&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'mi-plantilla-style',
        get_template_directory_uri() . '/assets/css/main.css',
        ['mi-plantilla-google-fonts'],
        '1.0.0'
    );

    wp_enqueue_script(
        'mi-plantilla-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'mi_plantilla_scripts');
