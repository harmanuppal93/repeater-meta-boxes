add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array (
		'title' => esc_html__( 'Partnership', 'text-domain' ),
		'id' => 'partnership',
		'post_types' => array(
			0 => 'partnerships',
		),
		'context' => 'normal',
		'priority' => 'high',
		'fields' => array(
			array (
				'id' => $prefix . 'company_name',
				'type' => 'text',
				'name' => esc_html__( 'Company name', 'text-domain' ),
			),
			array (
				'id' => $prefix . 'text_5ibf4sh89va',
				'type' => 'text',
				'name' => esc_html__( 'Company url', 'text-domain' ),
			),
			array (
				'id' => $prefix . 'single_image_45ka9abkv3d',
				'type' => 'single_image',
				'name' => esc_html__( 'Company logo', 'text-domain' ),
			),
			array (
				'id' => $prefix . 'text_9lg1u6g89zw',
				'type' => 'text',
				'name' => esc_html__( 'Company type', 'text-domain' ),
			),
			array (
				'id' => $prefix . 'wysiwyg_tsgmwb7kxf',
				'name' => esc_html__( 'Company description', 'text-domain' ),
				'type' => 'wysiwyg',
			),
		),
	);

	return $meta_boxes;
}
