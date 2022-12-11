<?php

function add_stylesheet(): void {
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri()
    );

    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'
    );
}

register_nav_menus(array(
    'top-menu'  => 'Верхнее меню',
));

function add_sidebar() {

    if (function_exists('register_sidebar'))
        register_sidebar(array(
            'id' => 'right_sidebar',
            'name' => 'Боковая колонка',
            'description' => 'Right sidebar with widget',
            'before_widget' => '<div class="card my-4 widget">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h5 class="card-header">',
            'after_title'   => '</h5><div class="card-body">',
        ));
}

add_action( 'widgets_init', 'add_sidebar' );

add_action('wp_enqueue_scripts', 'add_stylesheet');

add_theme_support('post-thumbnails');
