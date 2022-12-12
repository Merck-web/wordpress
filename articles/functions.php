<?php

//КОНСАНТЫ ПУТЕЙ ДО НУЖНЫХ ДЕРИКТОРИЙ


include_once('inc/functions-modules/books.php');
include_once('inc/functions-modules/reviews.php');
include_once('inc/functions-modules/blog.php');

include_once('inc/components/form.php');


include_once('inc/widjets.php');
include_once('inc/connect.php');
include_once('inc/filters.php');




add_shortcode('wptest_short', function ($attrs) {
    var_dump($attrs);
    return '-';
});
