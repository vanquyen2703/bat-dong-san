<?php
namespace Flux;

class Customizer {
	public function __construct() {
		add_action( 'customize_register', [ $this, 'register' ] );

	}
	public function register( $wp_customize ) {
		$wp_customize->add_section( 'contact_info', [ 
			'title' => esc_html__( 'Info Website', 'bat-dong-san' ),
		] );

		// Field for phone number
		$wp_customize->add_setting( 'footer_phone_number', [ 
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '0912 345 678',
		] );
		$wp_customize->add_control( 'footer_phone_number', [ 
			'label'   => esc_html__( 'Số điện thoại 1', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		$wp_customize->add_setting( 'footer_phone_number_2', [ 
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '0912 345 678',
		] );
		$wp_customize->add_control( 'footer_phone_number_2', [ 
			'label'   => esc_html__( 'Số điện thoại 2', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		// Field for hotline
		$wp_customize->add_setting( 'footer_hotline', [ 
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '18001234',
		] );
		$wp_customize->add_control( 'footer_hotline', [ 
			'label'   => esc_html__( 'Hotline', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		$wp_customize->add_setting( 'footer_hotline_2', [ 
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '18001234',
		] );
		$wp_customize->add_control( 'footer_hotline_2', [ 
			'label'   => esc_html__( 'Hotline 2', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		// Field for email
		$wp_customize->add_setting( 'footer_email', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => 'example@example.com',
		] );
		$wp_customize->add_control( 'footer_email', [ 
			'label'   => esc_html__( 'Email', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'email',
		] );

		// Button header
		$wp_customize->add_setting( 'button_header', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => 'Đăng kí bán',
		] );
		$wp_customize->add_control( 'footer_email', [ 
			'label'   => esc_html__( 'Button header', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		// Link button header
		$wp_customize->add_setting( 'link_button_header', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => '/lien-he',
		] );
		$wp_customize->add_control( 'link_button_header', [ 
			'label'   => esc_html__( 'Link button header', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		$wp_customize->add_setting( 'contact_info_heading', [ 
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => '',
		] );
		$wp_customize->add_control( new \WP_Customize_Control(
			$wp_customize,
			'contact_info_heading',
			[ 
				'section'     => 'contact_info',
				'settings'    => 'contact_info_heading',
				'type'        => 'hidden',
				'description' => '<h2 style="text-transform:uppercase;">' . esc_html__( 'Social', 'bat-dong-san' ) . '</h2>',
			]
		) );

		// Link social
		$wp_customize->add_setting( 'facebook', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => '#',
		] );
		$wp_customize->add_control( 'facebook', [ 
			'label'   => esc_html__( 'Link facebook', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		// Link social
		$wp_customize->add_setting( 'intagram', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => '#',
		] );
		$wp_customize->add_control( 'intagram', [ 
			'label'   => esc_html__( 'Link intagram', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		// Link social
		$wp_customize->add_setting( 'youtube', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => '#',
		] );
		$wp_customize->add_control( 'youtube', [ 
			'label'   => esc_html__( 'Link youtube', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );

		// Link social
		$wp_customize->add_setting( 'twitter', [ 
			'sanitize_callback' => 'sanitize_email',
			'default'           => '#',
		] );
		$wp_customize->add_control( 'twitter', [ 
			'label'   => esc_html__( 'Link twitter', 'bat-dong-san' ),
			'section' => 'contact_info',
			'type'    => 'text',
		] );
	}
}