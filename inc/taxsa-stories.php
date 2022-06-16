<?php
if (! defined('ABSPATH') ) {
	exit;
}

add_action( 'init', 'rufri_stories_taxonomies' );
// функция, создающая новый тип постa "stories" и таксономии для него "sortings" и "features" 
function rufri_stories_taxonomies(){
  /////////////////////////////// - Таксы для Истории - ///////////////////
  // Добавляем древовидную таксономию 'sorting' (как категории) - для историй (тип записи 'stories')
  register_taxonomy('sorting', array('stories'), array(
  'hierarchical' => true,
  'labels' => array(
  'name' => 'Рубрики историй',
  'singular_name' => 'Рубрика Истории',
  'search_items' => 'Искать рубрику Историй',
  'all_items' => 'Все рубрики историй',
  'parent_item' => 'Родительская рубрика Историй',
  'parent_item_colon' => 'Родительская рубрика Историй:',
  'edit_item' => 'Ред. рубрику Историй',
  'update_item' => 'Обновить рубрику Историй',
  'add_new_item' => 'Добавить рубрику Историй',
  'new_item_name' => 'Новая рубрика Историй',
  'menu_name' => 'Рубрики историй',
  ),
  'show_ui' => true,
  'query_var' => true,
  //'rewrite' => array('slug' => 'sorting' ), // свой слаг в URL
  ));


  // Добавляем НЕ древовидную таксономию 'feature' (как метки) - для историй (тип записи 'stories')
  register_taxonomy('feature', array('stories'),array(
  'hierarchical' => false,
  'labels' => array(
  'name' => 'Метки историй',
  'singular_name' => 'Метка истории',
  'search_items' => 'Искать метку истории',
  'popular_items' => 'Популярныее метки историй',
  'all_items' => 'Все метки историй',
  'parent_item' => null,
  'parent_item_colon' => null,
  'edit_item' => 'Ред. метку истории',
  'update_item' => 'Обновить метку истории',
  'add_new_item' => 'Добавить метка истории',
  'new_item_name' => 'Новая метка истории',
  'separate_items_with_commas' => 'Разделяйте метки запятыми',
  'add_or_remove_items' => 'Добавить метку истории',
  'choose_from_most_used' => 'Редактировать метку истории',
  'menu_name' => 'Метки историй',
  ),
  'show_ui' => true,
  'query_var' => true,
  //'rewrite' => array( 'slug' => 'feature' ), // свой слаг в URL
  ));

	/////////////////////////////// - Тип записи История - ///////////////////
    // тип записи - История - stories
  register_post_type( 'stories', [
    'label'               => 'Истории',
    'labels'              => array(
      'name'          => 'История',
      'singular_name' => 'Истории',
      'menu_name'     => 'Истории',
      'all_items'     => 'Все истории',
      'add_new'       => 'Добавить историю',
      'add_new_item'  => 'Добавить новую историю',
      'edit'          => 'Редактировать',
      'edit_item'     => 'Редактировать историю',
      'new_item'      => 'Новая история',
    ),
    'description'         => '',
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_rest'        => true,
    'rest_base'           => '',
    'show_in_menu'        => true,
    'exclude_from_search' => false,
    'capability_type'     => 'post',
    'map_meta_cap'        => true,
    'hierarchical'        => false,
    'menu_position'      => 6,
    'menu_icon'           => 'dashicons-nametag',
    'rewrite'             => true,
    'has_archive'         => 'stories',
    'query_var'           => true,
    'supports'            => array( 'title','thumbnail' ),
    'taxonomies'          => array( 'feature','sorting' ),
  ] );

}


