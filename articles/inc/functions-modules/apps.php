<?php

add_action('init', function(){
	register_post_type('apps', [
		'labels' => [
			'name'               => 'Заявки',
			'singular_name'      => 'Заявка'
		],
		'public' => false,
		'show_ui' => true,
		'supports' => ['title']
	]);
});

if(wp_doing_ajax()){
	add_action('wp_ajax_homeapp', 'wptest_ajax_homeapp');
	add_action('wp_ajax_nopriv_homeapp', 'wptest_ajax_homeapp');
}

function wptest_ajax_homeapp(){
	$response = ['res' => false, 'error' => ''];

	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	
	if($name === '' || $phone === ''){
		$response['error'] = 'Заполните все поля!';
	}
	else if(mb_strlen($name, 'UTF8') < 2){
		$response['error'] = 'Имя не короче 2 символов!';
	}
	else if(mb_strlen($phone, 'UTF8') < 7){
		$response['error'] = 'Телефон не короче 7 символов!';
	}
	else{
		$post_data = array(
			'post_title' => wp_strip_all_tags("$name - $phone"),
			'post_type'  => 'apps'
		);
		
		$post_id = wp_insert_post($post_data, true);

		if(is_wp_error($post_id)){
			$response['error'] = $post_id->get_error_message();
		}
		else {
			$response['res'] = true;
		}
	}

	echo json_encode($response);
	wp_die();
}