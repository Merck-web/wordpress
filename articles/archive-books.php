<?php get_header() ?>
    <div>
        <div class="container">
            <div class="row">
                <div class="col col-12">
                    <div class="row mt-3">
                        <?php while( have_posts() ) :
                            the_post();
                            ?>
                            <article class="col col-6 mt-3 mb-3">
                                <h2 class="h3"><?php the_title() ?></h2>
                                <div>Цена: <?php echo get_field('price') ?></div>
                                <a href="<?php the_permalink() ?>" class="post-card-link">
                                    Читать далее
                                </a>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php echo get_num_queries(); ?>
<?php get_footer() ?>