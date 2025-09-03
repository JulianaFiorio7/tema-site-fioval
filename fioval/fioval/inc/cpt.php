<?php

/** CPT Produtos  */
function produtos() {
	$labels = array(
		'name'                  => _x( 'Produtos', 'Produtos' ),
		'singular_name'         => _x( 'Produto', 'Produto' ),
		'menu_name'             => __( 'Produtos' ),
		'name_admin_bar'        => __( 'Produtos' ),
		'archives'              => __( 'Arquivos do Item' ),
		'attributes'            => __( 'Atributos do Item' ),
		'parent_item_colon'     => __( 'Item pai:' ),
		'all_items'             => __( 'Todos Items' ),
		'add_new_item'          => __( 'Adicionar Novo Item' ),
		'add_new'               => __( 'Adicionar Novo' ),
		'new_item'              => __( 'Novo Item' ),
		'edit_item'             => __( 'Editar Item' ),
		'update_item'           => __( 'Atualizar Item' ),
		'view_item'             => __( 'Ver Item' ),
		'view_items'            => __( 'Ver Items' ),
		'search_items'          => __( 'Buscar Item' ),
		'not_found'             => __( 'Não Encontrado' ),
		'not_found_in_trash'    => __( 'Não Encontrado na lixeira' ),
		'featured_image'        => __( 'Imagem destacada' ),
		'set_featured_image'    => __( 'Definir imagem destacada' ),
		'remove_featured_image' => __( 'Remover imagem destacada' ),
		'use_featured_image'    => __( 'Usar como imagem destacada' ),
		'insert_into_item'      => __( 'Inserir no Item' ),
		'uploaded_to_this_item' => __( 'Enviado para este item' ),
		'items_list'            => __( 'Lista de itens' ),
		'items_list_navigation' => __( 'Navegação de lista dos itens' ),
		'filter_items_list'     => __( 'Filtrar lista de itens' ),
	);
	$args = array(
		'label'                 => __( 'Produtos' ),
		'description'           => __( 'Produtos' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'page-attributes' ),
		'taxonomies'            => array( 'produtos' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'       => true,
	);
	register_post_type( 'produto', $args );

}
add_action( 'init', 'produtos', 0 );

// Taxonomia de Produtos
function produtos_cat() {

	$labels = array(
		'name'                       => _x( 'Categorias de Produtos', 'Categorias de Produtos' ),
		'singular_name'              => _x( 'Categoria de Produto', 'Categoria de Produto' ),
		'menu_name'                  => __( 'Categorias de Produtos' ),
		'all_items'                  => __( 'Todos os itens' ),
		'parent_item'                => __( 'Item Pai' ),
		'parent_item_colon'          => __( 'Item Pai:' ),
		'new_item_name'              => __( 'Nome do Novo Item' ),
		'add_new_item'               => __( 'Adicionar novo Item' ),
		'edit_item'                  => __( 'Editar item' ),
		'update_item'                => __( 'Atualizar item' ),
		'view_item'                  => __( 'Ver item' ),
		'separate_items_with_commas' => __( 'Separar os itens por vírgulas' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover itens' ),
		'choose_from_most_used'      => __( 'Escolher entre os mais usados' ),
		'popular_items'              => __( 'Itens populares' ),
		'search_items'               => __( 'Procurar itens' ),
		'not_found'                  => __( 'Não encontrado' ),
		'no_terms'                   => __( 'Não há itens' ),
		'items_list'                 => __( 'Lista dos Itens' ),
		'items_list_navigation'      => __( 'Navegação de lista dos Itens' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'produtos', array( 'produto' ), $args );
}
add_action( 'init', 'produtos_cat', 0 ); 
