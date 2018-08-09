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

add_theme_support('post-thumbnails');
set_post_thumbnail_size(350, 350, false );
add_image_size( 'miniature-article', 350, 350, false );

if( !defined(THEME_IMG_PATH)) {
  define ( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/img');
}

// Modifie le nombre de mots des excerpt en fonction du type de page
function wpm_custom_post_excerpt($length) {

	if(is_category()){ 	// Pour les pages de catégories
		return 50;

	}elseif(is_tag()){ 	// Pour les pages d'étiquettes
		return 75;

	}else{ 				// Pour les autres pages
		return 20;
	}
}
add_filter('excerpt_length', 'wpm_custom_post_excerpt');


// Modifie l'ellipsis de base du excerpt '[...]' en une chaîne de caractère personnalisée
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
