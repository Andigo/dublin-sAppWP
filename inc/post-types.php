<?php
/**
*Регистриуем свои post type
*/

add_action('init', 'dublin_custom_apps');
function dublin_custom_apps(){
	register_post_type('apps', array(
		'labels'             => array(
			'name'               => 'Приложения', // Основное название типа записи
			'singular_name'      => 'Приложение', 
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое приложение',
			'edit_item'          => 'Редактировать приложение',
			'new_item'           => 'Новое Приложение',
			'view_item'          => 'Посмотреть приложение',
			'search_items'       => 'Найти приложение',
			'not_found'          =>  'Приложений не найдено',
			'not_found_in_trash' => 'В корзине приложений не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Приложения'

		  ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'apps' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'menu_icon'          => 'dashicons-tablet',
		'supports'           => array('title','thumbnail')
	) );
}

function getApps(){
	$args = array(
		'numberposts' => 4,
		'category'    => 0,
		'orderby'     => 'date',
		'order'       => 'ASC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => 'apps',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
 );

	return get_posts($args);
}
/**
*Регистриуем новый post type возможности
*/

add_action('init', 'dublin_custom_abil');
function dublin_custom_abil(){
	register_post_type('abil', array(
		'labels'             => array(
			'name'               => 'Возможности', // Основное название типа записи
			'singular_name'      => 'Возможность', 
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новую возможность',
			'edit_item'          => 'Редактировать возможность',
			'new_item'           => 'Новая возможность',
			'view_item'          => 'Посмотреть возможность',
			'search_items'       => 'Найти возможность',
			'not_found'          =>  'Возможностей не найдено',
			'not_found_in_trash' => 'В корзине возможностей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Возможности'

		  ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'abil' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'menu_icon'          => 'dashicons-admin-generic',
		'supports'           => array('title','editor', 'excerpt', 'thumbnail')
	) );
}

function getAbils(){
	$args = array(
		'numberposts' => 3,
		'category'    => 0,
		'orderby'     => 'date',
		'order'       => 'ASC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => 'abil',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
 );

	return get_posts($args);
}

add_action('init', 'dublin_custom_banner');
function dublin_custom_banner(){
	register_post_type('banner', array(
		'labels'             => array(
			'name'               => 'Баннеры', // Основное название типа записи
			'singular_name'      => 'Баннер', 
			'add_new'            => 'Добавить новый баннер',
			'add_new_item'       => 'Добавить новый баннер',
			'edit_item'          => 'Редактировать баннер',
			'new_item'           => 'Новый баннер',
			'view_item'          => 'Посмотреть баннер',
			'search_items'       => 'Найти баннер',
			'not_found'          =>  'Баннеров не найдено',
			'not_found_in_trash' => 'В корзине баннеров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Баннеры'

		  ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'banner' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 25,
		'menu_icon'          => '
dashicons-format-gallery',
		'supports'           => 
		array('title', 'thumbnail')
	) );
}

function getBanner(){
	$args = array(
		'numberposts' => 7,
		'category'    => 0,
		'orderby'     => 'date',
		'order'       => 'ASC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  =>'',
		'post_type'   => 'banner',
		'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
 );

	return get_posts($args);
}