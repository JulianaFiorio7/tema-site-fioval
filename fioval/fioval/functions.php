<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 *
 * Carrega os arquivos de configurações dentro da pasta /inc/
 */
require get_template_directory() . '/inc/cpt.php';

/**
 *
 * Carrega os scripts do WordPress com CSS e JS
 */
function load_scripts() {
	wp_enqueue_style( 'Bootstrap CSS', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.2', 'all');
	wp_enqueue_style( 'Bootstrap Reboot CSS', get_template_directory_uri() . '/css/bootstrap-reboot.min.css', array(), '5.2', 'all');
	wp_enqueue_style( 'owl-css', get_template_directory_uri(). '/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
	wp_enqueue_style( 'owl-default-css', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
	wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), '', 'all' );
	wp_enqueue_style( 'btn-hamburguer-css', get_template_directory_uri() . '/css/btn-hamburguer.css', array(), '1.0', 'all');
	wp_enqueue_style( 'whatsapp-footer-css', get_template_directory_uri() . '/css/whatsapp-footer.css', array(), '1.0', 'all');
	wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/css/animate.min.css', array(), '3.7.2', 'all' );
	wp_enqueue_style( 'template CSS', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');

	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array('jquery') , '3.6.0', true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') , '5.2', true );
	wp_enqueue_script( 'fancybox-js', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );
	wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.js', array('jquery') , '1.3.0', true );
	wp_enqueue_script( 'whatsapp-footer-js', get_template_directory_uri() . '/js/whatsapp-footer.js', array('jquery') , '1.0', true );
	wp_enqueue_script( 'custom JS', get_template_directory_uri() . '/js/custom.js', array('jquery') , '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );


/**
 *
 * Registra os menus do WordPress, adiciona suporte a tamanhos de imagens personalizados
 */
function adtalento_config() { 
	register_nav_menus( // Menus
		array(
			'main_menu' => 'Menu Principal',
		)
	);

	/**
	 *
	 * Adiciona suporte a logo customizada, via painel Personalizar
	 */
	add_theme_support( 'custom-logo' );

	/**
	 *
	 * Altera a marcação padrão do WordPress para marcação HTML5 válida
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	/**
	 *
	 * Adiciona suporte aos formatos de post do WordPress
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	));

	/**
	 *
	 * Adiciona suporte para os posts thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 *
	 * Adiciona as tags dentro do head automaticamente
	 */
	add_theme_support( 'title-tag' );

}
add_action( 'after_setup_theme', 'adtalento_config', 0 );


/**
 *
 * Limita o número de palavras no excerpt
 */
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).' [...]';
	} else {
		$excerpt = implode(" ",$excerpt);
	}	
  	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  	return $excerpt;
}


