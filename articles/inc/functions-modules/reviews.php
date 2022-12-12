<?php

add_action('init', function () {
    register_post_type('reviews', [
        'labels' => [
            'name' => 'Отзывы',
            'singular_name' => 'Отзыв',
            'add_new' => 'Добавить новый',
        ],
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'excerpt', 'thumbnail']
    ]);

});
