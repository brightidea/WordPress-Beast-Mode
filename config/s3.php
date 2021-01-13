<?php
// Filter S3 Uploads params.
add_filter( 's3_uploads_s3_client_params', function ( $params ) {
	$params['endpoint'] = 'https://sfo2.digitaloceanspaces.com';
	$params['use_path_style_endpoint'] = true;
	$params['debug'] = false; // Set to true if uploads are failing.
	return $params;
} );