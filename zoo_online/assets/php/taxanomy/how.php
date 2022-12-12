<?php
add_action('init', function () {
    register_post_type('slider_how', [
        'labels' => [
            'name' => 'Слайдер How',
            'singular_name' => 'Слайдер how',
            'add_new' => 'Добавить новый слайд'
        ],
        'public' => false,
        'show_ui' => true,
    ]);
});