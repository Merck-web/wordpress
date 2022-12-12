<?php

add_action('widgets_init', function () {
    register_sidebar([
        'name' => 'Боковая колонка для постов',
        'id' => 'sidebar-post-single',
        'description' => 'посты справа',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<div class="widgettitle">',
        'after_title' => "</div>\n",
    ]);

    register_sidebar([
        'name' => 'Левая колонка для постов',
        'id' => 'sidebar-footer-left',
        'description' => 'Выводится только слева',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<div class="widgettitle">',
        'after_title' => "</div>\n",
    ]);

    register_sidebar([
        'name' => 'Правая колонка для постов',
        'id' => 'sidebar-footer-right',
        'description' => 'Выводится только слева',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<div class="widgettitle">',
        'after_title' => "</div>\n",
    ]);

    register_sidebar([
        'name' => 'Центральная колонка для постов',
        'id' => 'sidebar-footer-center',
        'description' => 'Выводится только по центру',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<div class="widgettitle">',
        'after_title' => "</div>\n",
    ]);

    register_sidebar([
        'name' => 'Сайдбар для блогов',
        'id' => 'sidebar-blog',
        'description' => 'Вывовидтся где пожилаешь',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>\n",
        'before_title' => '<div class="widgettitle">',
        'after_title' => "</div>\n",
    ]);
});