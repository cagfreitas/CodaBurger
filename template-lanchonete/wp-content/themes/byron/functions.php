<?php

/*
*    Arquivo para inserir as configurações do Wordpress
*    Existem diversas configurações que o Wordpress disponibiliza para criação de temas
*    e elas devem ser escritas nesse arquivo
*/

if ( class_exists( 'Redux' ) ) {
    require_once 'inc/theme-customizer-redux.php';
    require_once 'inc/theme-customizer-redux-sections.php';
}

global $redux_fields; 

function lanchonete_produtos() {
	$labels = array(
		'name'               => __( 'Produtos' ),
		'singular_name'      => __( 'Produto'),
		'menu_name'          => __( 'Produtos'),
		'name_admin_bar'     => __( 'Produtos'),
		'add_new'            => __( 'Adicionar'),
		'add_new_item'       => __( 'Adicionar Produto'),
		'new_item'           => __( 'Novos Produtos'),
		'edit_item'          => __( 'Editar Produtos'),
		'view_item'          => __( 'Ver Produtos'),
		'all_items'          => __( 'Todos os Produtos'),
		'search_items'       => __( 'Pesquisar Produtos'),
		'parent_item_colon'  => __( 'Parent Produtos:'),
		'not_found'          => __( 'Nenhum lanche encontrado.'),
		'not_found_in_trash' => __( 'Nenhum lanche encontrado na lixeira.')
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'produtos' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'produtos', $args );
}

add_action( 'init', 'lanchonete_produtos' );

function byron_styles() {

    // Inserir: outros arquivos css se necesśario

    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2' );
    wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap', array(), '1.0.0' );
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0');
    wp_register_style('materializeicon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '');
    wp_register_style('materializecss', get_template_directory_uri() . "/assets/css/materialize.min.css", array(), '');
    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '');


    wp_enqueue_style('style');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('googlefonts');
    wp_enqueue_style('materializeicon');
    wp_enqueue_style('materializecss');
    wp_enqueue_style('slick');

    // Inserir: outros arquivos javascript se necesśario

    wp_register_script('script', get_template_directory_uri() . "/assets/js/script.js", array('jquery'), false, true);
    wp_register_script('materializejs', get_template_directory_uri() . "/assets/js/materialize.min.js", array(), false, true);
    wp_register_script( 'slick_js', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true );


    wp_enqueue_script('jquery');
    wp_enqueue_script('materializejs');
    wp_enqueue_script('script');
    wp_enqueue_script('slick_js');
}
add_action( 'wp_enqueue_scripts', 'byron_styles' );


function byron_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Menu Principal' )
        )
    );
    // Inserir: outros menus se necessário
}
add_action( 'init', 'byron_menus' );


function byron_theme_setup(){
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'byron_theme_setup');

function byron_remove_default_post_type() {
    remove_menu_page('edit.php');
}
add_action( 'admin_menu', 'byron_remove_default_post_type' );

?>