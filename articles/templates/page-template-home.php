<?php
/*
	Template Name: Для главной
*/
?>
<?php get_header() ?>
<?php the_post(); ?>

    <div>
        <div class="container">

            <div class="blog">

                <h1>Отзывы</h1>

                <div class="row mb-5">

                    <?php
                    $articles = get_posts([
                        'numberposts' => 3,
                        'post_type' => 'reviews'
                    ]);
                    foreach ($articles as $article):
                        ?>

                        <div class="col col-4">
                            <h5><?php echo get_the_title($article) ?></h5>
                            <h5><?php echo get_the_content("", "", $article) ?></h5>
                            <h5><?php echo $article->post_excerpt ?></h5>
                            <div class="img-wrapper"><?php echo get_the_post_thumbnail($article, 'post-thumbnail', ['class' => 'img-responsive']); ?></div>
                        </div>

                    <?php endforeach; ?>
                </div>
                <h1>Посты через функцию</h1>

                <div class="row mt-5">
                    <?php
                    foreach (wptest_get_new_posts(2) as $art): ?>

                        <div class="col col-4">
                            <h5><?= $art['title'] ?></h5>
                            <h5><?= $art['content'] ?></h5>
                            <a href="<?= $art['link'] ?>">Читать далее</a>
                        </div>

                    <?php endforeach; ?>
                </div>

                <div class="mt-5 mb-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <?php for ($i = 0; $i < count($articles); $i++): ?>
                                <button type="button"
                                        data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="<?php echo $i; ?>"
                                        class="<?php if ($i == 0) echo ' active'; ?>"
                                        aria-current="true"
                                        aria-label="Slide <?php echo $i + 1; ?>">

                                </button>
                            <?php endfor; ?>
                        </div>
                        <div class="carousel-inner">
                            <?php
                            $i = 0;
                            foreach ($articles as $article):
                                ?>
                                <div class="carousel-item <?php if ($i == 0) echo ' active'; ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($article) ?>"/>
                                    <h5><?php echo $article->post_title ?></h5>
                                </div>
                                <?php
                                $i++;
                            endforeach;
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <div class="mt-5">
                    <div id="vk_post_-186103254_81053"></div>
                </div>
            </div>


        </div>
    </div>
<?php get_footer() ?>