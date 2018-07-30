<?php
	function register_local_sites_post() {
		$labels = array(
			'name'                  => _x( 'Unidades', 'Post Type General Name', 'mapa-educacao' ),
			'singular_name'         => _x( 'Unidade', 'Post Type Singular Name', 'mapa-educacao' ),
			'menu_name'             => __( 'Unidades', 'mapa-educacao' ),
			'name_admin_bar'        => __( 'Unidades', 'mapa-educacao' ),
			'archives'              => __( 'Lista de', 'mapa-educacao' ),
			'attributes'            => __( 'Atributos de', 'mapa-educacao' ),
			'parent_item_colon'     => __( 'Unidade pai:', 'mapa-educacao' ),
			'all_items'             => __( 'Todas unidades', 'mapa-educacao' ),
			'add_new_item'          => __( 'Criar nova unidade', 'mapa-educacao' ),
			'add_new'               => __( 'Criar nova', 'mapa-educacao' ),
			'new_item'              => __( 'Nova unidade', 'mapa-educacao' ),
			'edit_item'             => __( 'Editar unidade', 'mapa-educacao' ),
			'update_item'           => __( 'Atualizar unidade', 'mapa-educacao' ),
			'view_item'             => __( 'Ver unidade', 'mapa-educacao' ),
			'view_items'            => __( 'Ver unidades', 'mapa-educacao' ),
			'search_items'          => __( 'Buscar por', 'mapa-educacao' ),
			'not_found'             => __( 'Nenhuma unidade encontrada', 'mapa-educacao' ),
			'not_found_in_trash'    => __( 'Nenhuma unidade encontrada no lixo', 'mapa-educacao' ),
			'featured_image'        => __( 'Capa', 'mapa-educacao' ),
			'set_featured_image'    => __( 'Enviar capa', 'mapa-educacao' ),
			'remove_featured_image' => __( 'Remover capa', 'mapa-educacao' ),
			'use_featured_image'    => __( 'Usar como capa', 'mapa-educacao' ),
			'insert_into_item'      => __( 'Inserir na unidade', 'mapa-educacao' ),
			'uploaded_to_this_item' => __( 'Subir para esta unidade', 'mapa-educacao' ),
			'items_list'            => __( 'Lista de unidades', 'mapa-educacao' ),
			'items_list_navigation' => __( 'Navegar por unidades', 'mapa-educacao' ),
			'filter_items_list'     => __( 'Filtrar por unidades', 'mapa-educacao' ),
		);
		$args = array(
			'label'                 => __( 'Unidades', 'mapa-educacao' ),
			'description'           => __( 'Unidades do portal Mapa Educação', 'mapa-educacao' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
			'taxonomies'            => array( '' ),
			'hierarchical'          => true,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-location',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => 'unidades',
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'local-sites', $args );

	}
	add_action( 'init', 'register_local_sites_post', 0 );

function register_states_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Estados', 'Taxonomy General Name', 'mapa-educacao' ),
		'singular_name'              => _x( 'Estado', 'Taxonomy Singular Name', 'mapa-educacao' ),
		'menu_name'                  => __( 'Estados', 'mapa-educacao' ),
		'all_items'                  => __( 'Todos os estados', 'mapa-educacao' ),
		'parent_item'                => __( 'Estado pai', 'mapa-educacao' ),
		'parent_item_colon'          => __( 'Estado pai:', 'mapa-educacao' ),
		'new_item_name'              => __( 'Novo estado', 'mapa-educacao' ),
		'add_new_item'               => __( 'Adicionar novo estado', 'mapa-educacao' ),
		'edit_item'                  => __( 'Editar estado', 'mapa-educacao' ),
		'update_item'                => __( 'Atualizar estado', 'mapa-educacao' ),
		'view_item'                  => __( 'Ver estado', 'mapa-educacao' ),
		'separate_items_with_commas' => __( 'Separar estados com vírgula', 'mapa-educacao' ),
		'add_or_remove_items'        => __( 'Adicionar ou remover estados', 'mapa-educacao' ),
		'choose_from_most_used'      => __( 'Escolha entre os mais usados', 'mapa-educacao' ),
		'popular_items'              => __( 'Estados mais populares', 'mapa-educacao' ),
		'search_items'               => __( 'Buscar por estados', 'mapa-educacao' ),
		'not_found'                  => __( 'Estado não encontrado', 'mapa-educacao' ),
		'no_terms'                   => __( 'Sem estados', 'mapa-educacao' ),
		'items_list'                 => __( 'Lista de estados', 'mapa-educacao' ),
		'items_list_navigation'      => __( 'Lista de estados', 'mapa-educacao' ),
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
	register_taxonomy( 'states', array( 'local-sites' ), $args );

}
add_action( 'init', 'register_states_taxonomy', 0 );
