<?php
function create_meta_boxes( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'local-unity',
		'title' => esc_html__( 'Dados', 'mapa-educacao' ),
		'post_types' => array( 'local-sites' ),
		'context' => 'after_title',
		'priority' => 'default',
		'autosave' => false,
		'fields' => array(
			array(
				'id' => $prefix . 'local_lider',
				'type' => 'text',
				'name' => esc_html__( 'Líder local', 'mapa-educacao' ),
			),
			array(
				'id' => $prefix . 'local_lider_picture',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Foto do líder local', 'mapa-educacao' ),
			),
			array(
				'id' => $prefix . 'local_contact',
				'type' => 'text',
				'name' => esc_html__( 'Link para contato', 'mapa-educacao' ),
			),
			array(
				'id' => $prefix . 'local_facebook',
				'type' => 'url',
				'name' => esc_html__( 'Link para página do Facebook', 'mapa-educacao' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'create_meta_boxes' );
