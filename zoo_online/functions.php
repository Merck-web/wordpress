<?php
//css
include_once('assets/css/main.php');
//js
include_once('assets/js/main.php');
//filter
include_once('assets/php/filter/filter.php');
//taxanomy
include_once('assets/php/taxanomy/index.php');
include_once('assets/php/taxanomy/how.php');


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_action('after_setup_theme', function () { //хук после того как тема собраласб
//    add_theme_support('post-thumbnails'); // помощь для добавления изображения постам

    register_nav_menu('header', 'Меню в шапке');
    //Регаем менюху, у внешнего вида появляется вкладка меню, там надо создать верхнее или нижнее, и у нас свяжется роутинг и менюха и мы сможем детектить активную страницу
//    register_nav_menu('footer', 'Меню в подвале');

    add_theme_support('post-formats', ['aside', 'video']); // добовляем формат постов
    add_theme_support('title-tag');


    add_image_size('homepage-thumb', 300, 250, true);

});
