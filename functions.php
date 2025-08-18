<?php

    //Cargar Scripts y estilos

function esferica_scripts_styles(){

    
    // Paths
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // Versionado por filemtime cuando el archivo existe (evita cache en desarrollo)
    $aos_css_file    = $theme_path . '/public/build/js/aos-master/dist/aos.css';
    $swiper_css_file = $theme_path . '/public/build/js/swiper/swiper-bundle.css';
    $app_css_file    = $theme_path . '/public/build/css/app.css';
    $style_css_file  = get_stylesheet_directory() . '/style.css';

    $swiper_js_file  = $theme_path . '/public/build/js/swiper/swiper-bundle.js';
    $aos_js_file     = $theme_path . '/public/build/js/aos-master/dist/aos.js';
    $main_js_file    = $theme_path . '/public/build/js/bundle.min.js';

    $aos_css_ver    = file_exists($aos_css_file) ? filemtime($aos_css_file) : '1.0';
    $swiper_css_ver = file_exists($swiper_css_file) ? filemtime($swiper_css_file) : '1.0';
    $app_css_ver    = file_exists($app_css_file) ? filemtime($app_css_file) : '1.0';
    $style_css_ver  = file_exists($style_css_file) ? filemtime($style_css_file) : '1.0';

    $swiper_js_ver  = file_exists($swiper_js_file) ? filemtime($swiper_js_file) : '1.0';
    $aos_js_ver     = file_exists($aos_js_file) ? filemtime($aos_js_file) : '1.0';
    $main_js_ver    = file_exists($main_js_file) ? filemtime($main_js_file) : '1.0';

    // Estilos
    wp_enqueue_style('aos', $theme_uri . '/public/build/js/aos-master/dist/aos.css' , array(), $aos_css_ver, 'all');
    wp_enqueue_style('swiper', $theme_uri . '/public/build/js/swiper/swiper-bundle.css' , array(), $swiper_css_ver, 'all');
    wp_enqueue_style('font-awesome', $theme_uri . '/public/assets/fontawesome-free-7.0.0-web/css/all.css' , array(), '1.0', 'all');
    wp_enqueue_style('esferica-styles', $theme_uri . '/public/build/css/app.css' , array(), $app_css_ver, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), $style_css_ver, 'all');

    // Scripts
    // Cargar versiones 'dist' de las librerías (no el código fuente con import/export)
    wp_enqueue_script('swiper', $theme_uri . '/public/build/js/swiper/swiper-bundle.js', array(), $swiper_js_ver, true);
    wp_enqueue_script('aos', $theme_uri . '/public/build/js/aos-master/dist/aos.js', array(), $aos_js_ver, true);

    // main depende de swiper y aos para asegurar orden de carga
    wp_enqueue_script('main', $theme_uri . '/public/build/js/bundle.min.js', array('swiper','aos'), $main_js_ver, true);
}

add_action('wp_enqueue_scripts','esferica_scripts_styles');

function add_featured_images(){
    add_theme_support( 'post-thumbnails' );
}
add_action('init', 'add_featured_images' );

    //Registro de post types proyectos
function esferica_proyectos_post_type() {
	$labels = array(
		'name'                  => _x( 'proyectos', 'Post Type General Name', 'esferica' ),
		'singular_name'         => _x( 'proyecto', 'Post Type Singular Name', 'esferica' ),
		'menu_name'             => __( 'proyectos', 'esferica' ),
		'name_admin_bar'        => __( 'proyecto', 'esferica' ),
		'archives'              => __( 'Archivo', 'esferica' ),
		'attributes'            => __( 'Atributos', 'esferica' ),
		'parent_item_colon'     => __( 'proyecto Padre', 'esferica' ),
		'all_items'             => __( 'Todas Las proyectos', 'esferica' ),
		'add_new_item'          => __( 'Agregar proyecto', 'esferica' ),
		'add_new'               => __( 'Agregar proyecto', 'esferica' ),
		'new_item'              => __( 'Nueva proyecto', 'esferica' ),
		'edit_item'             => __( 'Editar proyecto', 'esferica' ),
		'update_item'           => __( 'Actualizar proyecto', 'esferica' ),
		'view_item'             => __( 'Ver proyecto', 'esferica' ),
		'view_items'            => __( 'Ver proyectos', 'esferica' ),
		'search_items'          => __( 'Buscar proyecto', 'esferica' ),
		'not_found'             => __( 'No Encontrado', 'esferica' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'esferica' ),
		'featured_image'        => __( 'Imagen Destacada', 'esferica' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'esferica' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'esferica' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'esferica' ),
		'insert_into_item'      => __( 'Insertar en proyecto', 'esferica' ),
		'uploaded_to_this_item' => __( 'Agregado en proyecto', 'esferica' ),
		'items_list'            => __( 'Lista de proyectos', 'esferica' ),
		'items_list_navigation' => __( 'Navegación de proyectos', 'esferica' ),
		'filter_items_list'     => __( 'Filtrar proyectos', 'esferica' ),
	);
	$args = array(
		'label'                 => __( 'proyectos', 'esferica' ),
		'description'           => __( 'proyectos para el Sitio Web', 'esferica' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'proyectos', $args );
}
add_action( 'init', 'esferica_proyectos_post_type', 0 );


    //Registro de post types recursos
function esferica_recursos_post_type() {
	$labels = array(
		'name'                  => _x( 'Recursos', 'Post Type General Name', 'esferica' ),
		'singular_name'         => _x( 'recurso', 'Post Type Singular Name', 'esferica' ),
		'menu_name'             => __( 'recursos', 'esferica' ),
		'name_admin_bar'        => __( 'recurso', 'esferica' ),
		'archives'              => __( 'Archivo', 'esferica' ),
		'attributes'            => __( 'Atributos', 'esferica' ),
		'parent_item_colon'     => __( 'recurso Padre', 'esferica' ),
		'all_items'             => __( 'Todas Las recursos', 'esferica' ),
		'add_new_item'          => __( 'Agregar recurso', 'esferica' ),
		'add_new'               => __( 'Agregar recurso', 'esferica' ),
		'new_item'              => __( 'Nueva recurso', 'esferica' ),
		'edit_item'             => __( 'Editar recurso', 'esferica' ),
		'update_item'           => __( 'Actualizar recurso', 'esferica' ),
		'view_item'             => __( 'Ver recurso', 'esferica' ),
		'view_items'            => __( 'Ver recursos', 'esferica' ),
		'search_items'          => __( 'Buscar recurso', 'esferica' ),
		'not_found'             => __( 'No Encontrado', 'esferica' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'esferica' ),
		'featured_image'        => __( 'Imagen Destacada', 'esferica' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'esferica' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'esferica' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'esferica' ),
		'insert_into_item'      => __( 'Insertar en recurso', 'esferica' ),
		'uploaded_to_this_item' => __( 'Agregado en recurso', 'esferica' ),
		'items_list'            => __( 'Lista de recursos', 'esferica' ),
		'items_list_navigation' => __( 'Navegación de proyectos', 'esferica' ),
		'filter_items_list'     => __( 'Filtrar proyectos', 'esferica' ),
	);
	$args = array(
		'label'                 => __( 'recursos', 'esferica' ),
		'description'           => __( 'recursos para el Sitio Web', 'esferica' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-download',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'recursos', $args );
}
add_action( 'init', 'esferica_recursos_post_type', 0 );