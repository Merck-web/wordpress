<?php

add_action('init', function () {
    register_post_type('books', [
        'labels' => [
            'name' => 'Книги',
            'singular_name' => 'Книга',
            'add_new' => 'Добавить новую',
            'add_new_item' => 'Добавить новую книгу',
            'edit_item' => 'Редактировать книгу',
            'new_item' => 'Новая книга',
            'view_item' => 'Посмотреть книгу',
            'search_items' => 'Найти книгу',
            'not_found' => 'Книг не найдено',
            'not_found_in_trash' => 'В корзине книг не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Книги'
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => [
            'with_front' => false
        ]
    ]);

    register_taxonomy('books-authors', ['books'], [
        'labels' => [
            'name' => 'Авторы'
        ],
        'public' => true,
        'rewrite' => [
            'with_front' => false
        ]
    ]);

    register_taxonomy('publisher', ['books'], [
        'labels' => [
            'name' => 'Издательства'
        ],
        'public' => true,
        'rewrite' => [
            'with_front' => false,
            'slug' => 'books-publisher'
        ]
    ]);
});

add_filter('intermediate_image_sizes', function ($sizes) {
    if (isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id'] === 'books')){
        $sizes = ['homepage-thumb']; // фильтр грузит онли оригинал и наш размер 300 на 250 в базу, таки хи там миниум 4 штуки грузятся
    }
    return $sizes;
});