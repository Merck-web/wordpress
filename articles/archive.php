<?php get_header() ?>
<div>
	<div class="container">
		<div class="row">
			<div class="col col-9">
				<h1><?php single_term_title() ?></h1>
				<div class="row mt-3">
					<?php while( have_posts() ){
						the_post();
						get_template_part('template-parts/blog/flow/content', get_post_format());
					} ?>
				</div>
			</div>
			<?php get_sidebar('blog'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>