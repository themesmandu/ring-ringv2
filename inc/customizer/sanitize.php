<?php
/**
 * Sanitize functions.
 *
 * @package ring-ring
 */

// file input sanitization function.
function ring_ring_sanitize_file( $file, $setting ) {

	// allowed file types.
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
	);

	// check file type from file name.
	$file_ext = wp_check_filetype( $file, $mimes );

	// if file has a valid mime type return it, otherwise return default.
	return ( $file_ext['ext'] ? $file : $setting->default );
}
