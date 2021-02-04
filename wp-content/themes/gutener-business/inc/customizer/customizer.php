<?php

function gutener_business_kirki_fields(){

	/**
	* If kirki is not installed do not run the kirki fields
	*/

	if ( !class_exists( 'Kirki' ) ) {
		return;
	}

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Primary Color', 'gutener-business' ),
		'type'         => 'color',
		'settings'     => 'site_primary_color',
		'section'      => 'colors',
		'default'      => '#f57251',
		'priority'     => '50',
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Button Background Color', 'gutener-business' ),
		'type'         => 'color',
		'settings'     => 'notification_bar_button_background_color',
		'section'      => 'notification_bar_options',
		'default'      => '#f57251',
		'active_callback' => array(
			array(
				'setting'  => 'disable_notification_bar',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Button Text Color', 'gutener-business' ),
		'type'         => 'color',
		'settings'     => 'notification_bar_button_text_color',
		'section'      => 'notification_bar_options',
		'default'      => '#ffffff',
		'active_callback' => array(
			array(
				'setting'  => 'disable_notification_bar',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
	
	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post Category Color', 'gutener-business' ),
		'type'         => 'color',
		'settings'     => 'blog_post_category_color',
		'section'      => 'blog_page_options',
		'default'      => '#f57251',
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Site Title', 'gutener-business' ),
		'type'         => 'typography',
		'settings'     => 'site_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Playfair Display',
			'font-size'      => '36px',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'      => array(
			array(
				'element' => '.site-header .site-branding .site-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Page & Single Post Title', 'gutener-business' ),
		'type'         => 'typography',
		'settings'     => 'page_title_font_control',
		'section'      => 'typography',
		'default'  => array(
			'font-family'    => 'Playfair Display',
			'font-size'      => '48px',
			'text-transform' => 'none',
		),
		'transport'   => 'auto',
		'output'   => array(
			array(
				'element' => 'body.single .page-title, body.page .page-title',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Disable Site Tagline Border', 'gutener-business' ),
		'type'         => 'checkbox',
		'settings'     => 'disable_site_tagline_border',
		'section'      => 'title_tagline',
		'priority'     => '30',
		'default'      => true,
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Height (in px)', 'gutener-business' ),
		'description' => esc_html__( 'These options will only apply to Desktop. Please click on below Desktop Icon to see changes.
		', 'gutener-business' ),
		'type'        => 'slider',
		'settings'    => 'header_image_height',
		'section'     => 'header_options',
		'transport'   => 'postMessage',
		'default'     => 120,
		'choices'     => array(
			'min'  => 0,
			'max'  => 1500,
			'step' => 5,
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Content Alignment', 'gutener-business' ),
		'type'        => 'select',
		'settings'    => 'main_slider_content_alignment',
		'section'     => 'main_slider_options',
		'default'     => 'left',
		'choices'  => array(
			'center' => esc_html__( 'Center', 'gutener-business' ),
			'left'   => esc_html__( 'Left', 'gutener-business' ),
			'right'  => esc_html__( 'Right', 'gutener-business' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Hide Button', 'gutener-business' ),
		'type'        => 'checkbox',
		'settings'    => 'hide_slider_button',
		'section'     => 'main_slider_options',
		'default'     => false,
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Button Type', 'gutener-business' ),
		'type'        => 'select',
		'settings'    => 'slider_button_type',
		'section'     => 'main_slider_options',
		'default'     => 'button-primary',
		'choices'  => array(
			'button-primary' => esc_html__( 'Primary Button', 'gutener-business' ),
			'button-outline' => esc_html__( 'Border Button', 'gutener-business' ),
			'button-text'    => esc_html__( 'Text Only Button', 'gutener-business' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'main_slider_controls',
				'operator' => '==',
				'value'    => 'slider',
			),
			array(
				'setting'  => 'hide_slider_button',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Columns', 'gutener-business' ),
		'type'        => 'select',
		'settings'    => 'highlight_posts_columns',
		'section'     => 'highlight_posts_options',
		'default'     => 'four_columns',
		'placeholder' => esc_attr__( 'Select category', 'gutener-business' ),
		'choices'  => array(
			'one_column'    => esc_html__( '1 Column', 'gutener-business' ),
			'two_columns'   => esc_html__( '2 Columns', 'gutener-business' ),
			'three_columns' => esc_html__( '3 Columns', 'gutener-business' ),
			'four_columns'  => esc_html__( '4 Columns', 'gutener-business' ),
		)
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Post View Number', 'gutener-business' ),
		'description'  => esc_html__( 'Number of posts to show.', 'gutener-business' ),
		'type'         => 'number',
		'settings'     => 'highlight_posts_posts_number',
		'section'      => 'highlight_posts_options',
		'default'      => 4,
		'choices' => array(
			'min' => '1',
			'max' => '48',
			'step' => '1',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Height (in px)', 'gutener-business' ),
		'description'  => esc_html__( 'These options will only apply to Desktop. Please click on below Desktop Icon to see changes.
		', 'gutener-business' ),
		'type'         => 'slider',
		'settings'     => 'highlight_posts_height',
		'section'      => 'highlight_posts_options',
		'transport'    => 'postMessage',
		'default'      => 250,
		'choices' => array(
			'min' => '100',
			'max' => '1200',
			'step' => '10',
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Disable Post Title Divider', 'gutener-business' ),
		'type'        => 'checkbox',
		'settings'    => 'disable_highlight_title_divider',
		'section'     => 'highlight_posts_options',
		'default'     => true,
		'active_callback' => array(
			array(
				'setting'  => 'disable_highlight_posts_title',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Archive Post Layouts', 'gutener-business' ),
		'description' => esc_html__( 'Grid / List / Single', 'gutener-business' ),
		'type'        => 'radio-image',
		'settings'    => 'archive_post_layout',
		'section'     => 'global_layout_options',
		'default'     => 'list',
		'choices'  => array(
			'grid'   => get_template_directory_uri() . '/assets/images/grid-layout.png',
			'list'   => get_template_directory_uri() . '/assets/images/list-layout.png',
			'single' => get_template_directory_uri() . '/assets/images/single-layout.png',
		)
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Hide Button', 'gutener-business' ),
		'type'        => 'checkbox',
		'settings'    => 'hide_post_button',
		'section'     => 'blog_page_options',
		'default'     => false,
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Button Type', 'gutener-business' ),
		'type'        => 'select',
		'settings'    => 'post_button_type',
		'section'     => 'blog_page_options',
		'default'     => 'button-outline',
		'choices'  => array(
			'button-primary' => esc_html__( 'Primary Button', 'gutener-business' ),
			'button-outline' => esc_html__( 'Border Button', 'gutener-business' ),
			'button-text'    => esc_html__( 'Text Only Button', 'gutener-business' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'hide_post_button',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Widget Columns', 'gutener-business' ),
		'type'        => 'select',
		'settings'    => 'top_footer_widget_columns',
		'section'     => 'footer_options',
		'default'     => 'three_columns',
		'choices'  => array(
			'four_columns'  => esc_html__( 'Four Columns', 'gutener-business' ),
			'three_columns' => esc_html__( 'Three Columns', 'gutener-business' ),
			'two_columns'   => esc_html__( 'Two Columns', 'gutener-business' ),
			'one_column'    => esc_html__( 'One Column', 'gutener-business' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_footer_widget',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Disable Footer Widget Title Border', 'gutener-business' ),
		'type'         => 'checkbox',
		'settings'     => 'disable_footer_widget_title_border',
		'section'      => 'footer_options',
		'default'      => true,
	) );

	Kirki::add_field( 'gutener', array(
		'label'        => esc_html__( 'Disable Footer Widget Item List Border ', 'gutener-business' ),
		'type'         => 'checkbox',
		'settings'     => 'disable_footer_widget_list_item_border',
		'section'      => 'footer_options',
		'default'      => true,
	) );

	Kirki::add_field( 'gutener', array(
		'label'       => esc_html__( 'Footer Layouts', 'gutener-business' ),
		'type'        => 'radio-image',
		'settings'    => 'footer_layout',
		'section'     => 'footer_options',
		'default'     => 'footer_two',
		'choices'  => array(
			'footer_one'   => get_template_directory_uri() . '/assets/images/footer-layout-1.png',
			'footer_two'   => get_template_directory_uri() . '/assets/images/footer-layout-2.png',
			'footer_three' => get_template_directory_uri() . '/assets/images/footer-layout-3.png',
		),
		'active_callback' => array(
			array(
				'setting'  => 'disable_bottom_footer',
				'operator' => '==',
				'value'    => false,
			),
		),
	) );
}
add_action( 'init', 'gutener_business_kirki_fields', 999, 1 );