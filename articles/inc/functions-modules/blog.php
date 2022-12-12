<?php

function wptest_get_new_posts($n = 3){
	$articles = get_posts(['numberposts' => $n]); 
	$res = [];

	foreach($articles as $article){
		$res[] = [
			'id' => $article->ID,
			'title' => get_the_title($article),
			'content' => get_the_content('', '', $article),
			'link' => get_permalink($article)
		];
	}

	return $res;
}

add_filter('intermediate_image_sizes', function($sizes){
	if(isset($_REQUEST['post_id']) && get_post_type($_REQUEST['post_id']) === 'post'){
		$sizes = array_filter($sizes, function($size){
			return $size !== 'wptest-books-flow';
		});
	}
	
	return $sizes;
});