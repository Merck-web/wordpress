<?php
define('WPTEST_DIR_CSS', get_template_directory_uri() . '/assets/css/');
define('WPTEST_DIR_JS', get_template_directory_uri() . '/assets/js/');
define('WPTEST_DIR_iMG', get_template_directory_uri() . '/assets/images/');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', WPTEST_DIR_CSS . 'bootstrap.min.css');
    wp_enqueue_style('main', WPTEST_DIR_CSS . 'main.css');
    wp_enqueue_script('main', WPTEST_DIR_JS . 'main.js');
});

add_action('after_setup_theme', function () { //хук после того как тема собраласб
    add_theme_support('post-thumbnails'); // помощь для добавления изображения постам

    register_nav_menu('header', 'Меню в шапке');
    //Регаем менюху, у внешнего вида появляется вкладка меню, там надо создать верхнее или нижнее, и у нас свяжется роутинг и менюха и мы сможем детектить активную страницу
    register_nav_menu('footer', 'Меню в подвале');

    add_theme_support('post-formats', ['aside', 'video']); // добовляем формат постов
    add_theme_support('title-tag');


    add_image_size('homepage-thumb', 300, 250, true);

});

