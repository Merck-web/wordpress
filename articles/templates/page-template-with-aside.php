<?php
/*
	Template Name: С правой колонкой
*/
?>
<?php get_header() ?>
<div>
	<div class="container">
		<div class="row">
			<div class="col col-9">
				<?php the_post(); ?>
				<h1><?php the_title() ?></h1>
				<div><?php the_content() ?></div>
			</div>
			<?php if (is_active_sidebar('sidebar-blog')): ?>
				<div class="col col-3">
					<?php dynamic_sidebar('sidebar-blog') ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer() ?>