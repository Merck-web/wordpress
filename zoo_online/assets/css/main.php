<?php


define('DIR_CSS', get_template_directory_uri() . '/assets/css/');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main', DIR_CSS . 'main.css', array(), time());
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('js-datepicker', 'https://unpkg.com/js-datepicker/dist/datepicker.min.css');


});
