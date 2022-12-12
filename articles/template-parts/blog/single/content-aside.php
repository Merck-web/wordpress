<h1><?php the_title() ?></h1>
<div class="alert alert-success">
    <?php
    $book = get_field('books-object');
    ?>

    <a href="<?php echo get_permalink($book) ?>">
        <?php echo $book->post_title ?>
    </a>
</div>
<div><?php the_content() ?></div>