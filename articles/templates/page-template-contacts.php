<?php
/*
	Template Name: Для контактов
*/
?>
<?php
get_header();
$pageACF = get_fields();
?>
    <div>
        <div class="container">
            <?php the_post(); ?>
            <div class="row">
                <div class="col col-4">
                    <h1><?php the_title() ?></h1>
                    <div><?php the_content() ?></div>
                    <!--				--><?php //var_dump($pageACF); echo get_field('latlat')?>
                    <p>latlat <?php echo get_field("latlat"); ?></p>
                    <p>lag <?php echo get_field('lag'); ?></p>
                    <p>zoom <?php echo get_field('zoom'); ?></p>
                </div>
                <div class="col col-8">
                    <script type="text/javascript" charset="utf-8" async
                            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad3c12ab499f21a87747e3c2e341f852f39a58bb749dd8379050c862aef6badc9&amp;lang=ru_RU&amp;scroll=true">

                    </script>
                </div>
                <div class="col col-12 mt-3">
<!--                    --><?php //echo do_shortcode('[ninja_form id=1]') ?>
                    <?php echo do_shortcode('[art_feedback]') ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer() ?>