<?php


//var_dump();
add_filter('nav_menu_css_class', 'wp_kama_nav_menu_css_class_filter', 10, 4);
function wp_kama_nav_menu_css_class_filter($classes, $menu_item, $args, $depth)
{
    if ($args->theme_location === 'header') {
        $classes = ['nav-item'];    // очищаем от мусорных классов и накидываем свой, но только для хэдэра

    }

    return $classes;
}

add_filter('nav_menu_item_id', 'wp_kama_nav_menu_item_id_filter', 10, 4);
function wp_kama_nav_menu_item_id_filter($classes, $menu_item, $args, $depth)
{
    if ($args->theme_location === 'header') {
        return '';    //типа тоже почистили от id

    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'wp_kama_nav_menu_link_attributes_filter', 10, 4);
function wp_kama_nav_menu_link_attributes_filter($attrs, $menu_item, $args, $depth)
{
    //убираем лишние стили
    if ($args->theme_location === 'header' || $args->theme_location === 'footer') {

        if (!isset($attrs['class'])) $attrs['class'] = '';
        $attrs['class'] .= ' nav-link';

        //если хэдэр и активная страница красим в красный
        if ($attrs['aria-current'] === 'page') $attrs['class'] .= ' text-danger';


        $attrs['class'] = trim($attrs['class']);
    }

    return $attrs;
}


add_filter('the_category', 'wp_kama_the_category_filter', 10, 3);
function wp_kama_the_category_filter($thelist, $separator, $parents): array|string
{
    if ($separator === 'without_regular') {
        $parts = explode('without_regular', $thelist); //split
        $thelist = '<ul class="list-group"><li class="list-group-item">';
        $thelist .= implode('</li><li class="list-group-item">', $parts); //join
        $thelist .= '</li></ul>';
    }

//        $thelist = str_replace('<ul class="post-categories">', '<ul class="list-group">', $thelist); // значение/замена/остальная строка
//        $thelist = str_replace('<li>', '<li class="list-group-item">', $thelist); // значение/замена/остальная строка
//        $thelist = str_replace('without_regular', '', $thelist);

    return $thelist;
}

//add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
//function my_post_image_html( $html, $post_id, $post_image_id ): string
//{
//    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
//    return $html;
//}


add_filter('document_title_parts', function ($title) {
    $title['site'] = '';
    return $title;
});

function wptest_post_categories(): void
{
    wptest_post_terms('category');
}

function wptest_post_tags(): void
{
    wptest_post_terms('post_tag');
}

function wptest_post_terms($taxonomy, $id = 0): void
{
    the_terms(
        $id,
        $taxonomy,
        '<ul class="list-group"><li class="list-group-item">',
        '</li><li class="list-group-item">',
        '</li>'
    );
}


