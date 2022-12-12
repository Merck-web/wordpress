<?php get_header() ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col col-9">
                    <?php the_post() ?>
                    <div class="img-wrapper">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } ?>
                    </div>
                    <?php get_template_part('template-parts/blog/single/content', get_post_format()) ?>
                </div>
                <aside class="col col-3">
                    <div>Автор: <?php the_author() ?></div>
                    <div><?php the_date('j F Y') ?></div>
                    <div class="mt-3">
                        <div class="h4">Категории</div>
                        <?php wptest_post_categories(); ?>
                    </div>
                    <div class="mt-3">
                        <?php if (has_tag()) echo '<div class="h4">Метки</div>' ?>
                        <div>
                            <?php wptest_post_tags(); ?>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
<?php get_footer() ?>