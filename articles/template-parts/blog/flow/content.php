<article class="col col-6 mt-3 mb-3">
	<h2 class="h3"><?php the_title() ?></h2>
    <div class="img-wrapper">
        <?php if (has_post_thumbnail()) {
//            the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']);
            the_post_thumbnail('homepage-thumb');
        } ?>
    </div>
	<a href="<?php the_permalink() ?>" class="post-card-link">
		Читать далее
	</a>
</article>