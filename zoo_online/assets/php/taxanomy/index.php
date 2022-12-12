<?php
add_action('init', function () {
    register_post_type('slider_about_zoo', [
        'labels' => [
            'name' => 'Слайдер на странице about',
            'singular_name' => 'Слайдер about head',
            'add_new' => 'Добавить новый слайд'
        ],
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'excerpt', 'thumbnail']
    ]);
});