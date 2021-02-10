<?php
	

function call_service($page_id, $page_res)
{
	
// URL
$endpoint = "http://localhost/reasondigital";

$body = [
    'action'  => $page_res,
    'pageId' => $page_id,
];
 
$body = wp_json_encode( $body );
 
$options = [
    'body'        => $body,
	'method' => 'POST',
    'headers'     => [
        'Content-Type' => 'application/json',
    ],
    'timeout'     => 5,
    'sslverify'   => false,
    'data_format' => 'body',
];
 
$response = wp_remote_post( $endpoint, $options );

// var_dump($response);

}

// new page
function action_new_page($new_status, $old_status, $post) {
  if('publish' === $new_status && 'publish' !== $old_status && $post->post_type === 'page') {
  //  call_service('created', $post->ID);
  }
}
add_action('transition_post_status', 'action_new_page', 10, 3);

// delete page
function action_delete_page( $post_id ) { 
	// call_service('deleted', $post_id);
}; 
add_action( 'delete_post', 'action_delete_page', 10, 1 ); 

// edit page
function action_edit_page( $post_id, $post) {
   $time = get_post_modified_time('G', false, $post_id);
         $time_diff = time() - $time;
		 
		 if ($time_diff / 3600 > 1)
		 {
	//		  call_service('modified', $post_id);
		 }
}
add_action( 'pre_post_update', 'action_edit_page', 10, 2 );