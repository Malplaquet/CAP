<?php
if ( function_exists('register_sidebar') ) register_sidebar();

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250, true);
add_image_size( 'miniature-article', 250, 250, true );

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

if( !defined(THEME_IMG_PATH)) {
  define ( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img');
}
