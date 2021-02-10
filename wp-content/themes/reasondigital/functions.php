<?php
	
	function js_enqueue_scripts() {
		wp_enqueue_script ("my-ajax-handle", get_stylesheet_directory_uri() . "/assets/js/ajax.js", array('jquery')); 
		//the_ajax_script will use to print admin-ajaxurl in custom ajax.js
		wp_localize_script('my-ajax-handle', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
	} 
	add_action("wp_enqueue_scripts", "js_enqueue_scripts");
	
	function categ_filter() {
		
		header('Content-Type: application/json');
		
		$category = (isset($_POST["category"])) ? $_POST["category"] : 1;
		
		$wpb_all_query = new WP_Query(array('category__and' => $category,'post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
		
		if ( $wpb_all_query->have_posts() ) : 
		
			while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
			
			$c = get_the_category();
			$post_id = get_the_ID();
			$data_array[] = array(
				'title' => get_the_title(),
				'thumbnail' => get_the_post_thumbnail_url($post_id,'full'),
				'category' => get_the_category($post_id)[0]->name,
				'category_id' => get_the_category($post_id)[0]->term_id,
				'link' => get_permalink( $post_id )
			);
			
			endwhile;
		endif;
		
		// add these lines to your code.
		$result=array();
		$result["success"]=true;
		$result["results"]=$data_array;
		echo json_encode($result);
		die();
	}
	
	add_action('wp_ajax_nopriv_categ_filter', 'categ_filter');
	add_action('wp_ajax_categ_filter', 'categ_filter');
?>