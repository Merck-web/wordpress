<?php
	get_header();
	$booksACF = get_fields();
?>
<div>
	<div class="container">
		<div class="row">
			<div class="col col-9">
				<?php the_post() ?>
				<h1><?php the_title() ?></h1>
				<div><?php the_content() ?></div>
			</div>
			<aside class="col col-3">
				<div>Автор: <?php the_terms(get_the_ID(), 'books-authors', '', ', ', ''); ?></div>
				<div>Издательство: <?php the_terms(get_the_ID(), 'publisher');?></div>
				<div>Страниц: <?php echo $booksACF['pages'] ?></div>
				<div>Цена: <?php echo $booksACF['price'] ?> руб.</div>
                <div>
                    Нравится <?php if( function_exists('lotos_likes') ) lotos_likes(); ?>
                </div>
			</aside>
		</div>
	</div>
</div>
<?php get_footer() ?>