<?php
$args = array(
'name' => 'Home top sidebar',
'id' => 'top-nav',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',
);

register_sidebar($args);

$argsFBSidebar = array(
'name' => 'fb sidebar',
'id' => 'fb-sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',);

register_sidebar($argsFBSidebar);

$argsTwitterSidebar = array(
'name' => 'Twitter sidebar',
'id' => 'twitter-sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',);

register_sidebar($argsTwitterSidebar);

add_theme_support('post-thumbnails');
set_post_thumbnail_size(250, 250, false );
add_image_size( 'miniature-article', 250, 250, false );

if( !defined(THEME_IMG_PATH)) {
  define ( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img');
}
