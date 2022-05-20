<?php
add_action('init', 'register_post_types');
function register_post_types()
{
   register_post_type('Header slider', [
      'label'  => null,
      'labels' => [
         'name'               => 'Header slider', // основное название для типа записи
         'singular_name'      => 'Slider-item', // название для одной записи этого типа
         'add_new'            => 'Add slider-item', // для добавления новой записи
         'add_new_item'       => 'Add slider-item', // заголовка у вновь создаваемой записи в админ-панели.
         'edit_item'          => 'Edit slider-item', // для редактирования типа записи
         'new_item'           => 'New slider-item', // текст новой записи
         'view_item'          => 'See slider-item', // для просмотра записи этого типа.
         'search_items'       => 'Search slider-item', // для поиска по этим типам записи
         'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
         'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
         'parent_item_colon'  => '', // для родителей (у древовидных типов)
         'menu_name'          => 'Home slider', // название меню
      ],
      'description'         => 'Home slider',
      'public'              => true,
      // 'publicly_queryable'  => null, // зависит от public
      // 'exclude_from_search' => null, // зависит от public
      // 'show_ui'             => null, // зависит от public
      // 'show_in_nav_menus'   => null, // зависит от public
      'show_in_menu'        => true, // показывать ли в меню адмнки
      // 'show_in_admin_bar'   => null, // зависит от show_in_menu
      'show_in_rest'        => true, // добавить в REST API. C WP 4.7
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => null,
      'menu_icon'           => 'dashicons-images-alt',
      //'capability_type'   => 'post',
      //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
      //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
      'hierarchical'        => false,
      'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => [],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
   ]);

   register_post_type('project-item', [
      'label'  => null,
      'labels' => [
         'name'               => 'Project-item', // основное название для типа записи
         'singular_name'      => 'Project-item', // название для одной записи этого типа
         'add_new'            => 'Add project-item', // для добавления новой записи
         'add_new_item'       => 'Add project-item', // заголовка у вновь создаваемой записи в админ-панели.
         'edit_item'          => 'Edit project-item', // для редактирования типа записи
         'new_item'           => 'New project-item', // текст новой записи
         'view_item'          => 'See project-item', // для просмотра записи этого типа.
         'search_items'       => 'Search project-item', // для поиска по этим типам записи
         'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
         'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
         'parent_item_colon'  => '', // для родителей (у древовидных типов)
         'menu_name'          => 'Projects', // название меню
      ],
      'description'         => 'Projects',
      'public'              => true,
      // 'publicly_queryable'  => null, // зависит от public
      // 'exclude_from_search' => null, // зависит от public
      // 'show_ui'             => null, // зависит от public
      // 'show_in_nav_menus'   => null, // зависит от public
      'show_in_menu'        => true, // показывать ли в меню адмнки
      // 'show_in_admin_bar'   => null, // зависит от show_in_menu
      'show_in_rest'        => true, // добавить в REST API. C WP 4.7
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => null,
      'menu_icon'           => 'dashicons-images-alt2',
      //'capability_type'   => 'post',
      //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
      //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
      'hierarchical'        => false,
      'supports'            => ['title', 'editor', 'thumbnail', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => [],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
   ]);
}
