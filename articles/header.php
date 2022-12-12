<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="container wp_container">
        <div class="row align-items-center">
            <div class="col col-4">
                <div class="h2"><?php bloginfo('name') ?></div>
                <div><?php bloginfo('description') ?></div>
            </div>
            <div class="col col-8">
                <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'nav justify-content-end',
                    'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                ]) ?>
            </div>
        </div>
        <hr>
    </div>
</header>