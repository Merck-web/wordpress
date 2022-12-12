<?php

define('DIR_JS', get_template_directory_uri() . '/assets/js/');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('swiper.bundle', DIR_JS . 'swiper.bundle.js', array(), time());


    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    wp_enqueue_script('owl', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js');


    wp_enqueue_script('main', DIR_JS . 'main.js', array(), time());
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');


    wp_enqueue_script('mask', 'https://unpkg.com/imask', array(), time());
    wp_enqueue_script('js-datepicker', 'https://unpkg.com/js-datepicker', array(), time());

});
