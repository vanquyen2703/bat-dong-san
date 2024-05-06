<?php
namespace BDS;

class Settings {
	const OPTION_NAME = 'website_settings';

	public function __construct() {
		add_filter( 'mb_settings_pages', [ $this, 'register_settings_page' ] );
		add_filter( 'rwmb_meta_boxes', [ $this, 'register_fields' ] );
	}

	public static function get( string $name, array $args = [] ) {
		$args['object_type'] = 'setting';

		return rwmb_meta( $name, $args, self::OPTION_NAME );
	}

	public function register_settings_page( array $settings_pages ): array {
		$settings_pages[] = [ 
			'id'          => 'website-settings',
			'option_name' => self::OPTION_NAME,
			'menu_title'  => __( 'Website Settings', 'bat-dong-san' ),
			'parent'      => 'themes.php',
			'capability'  => 'edit_theme_options',
			'style'       => 'no-boxes',
			'columns'     => 1,
			'tabs'        => [ 
				'contact' => [ 
					'label' => __( 'Contact', 'bat-dong-san' ),
					'icon'  => 'dashicons-phone',
				],
				'social'  => [ 
					'label' => __( 'Social', 'bat-dong-san' ),
					'icon'  => 'dashicons-facebook-alt',
				],
			],
		];

		return $settings_pages;
	}

	public function register_fields( array $meta_boxes ): array {
		$meta_boxes[] = $this->contact();
		$meta_boxes[] = $this->social();

		return $meta_boxes;
	}

	private function contact(): array {
		return [ 
			'title'          => __( 'Contact', 'bat-dong-san' ),
			'id'             => 'settings-contact',
			'settings_pages' => 'website-settings',
			'tab'            => 'contact',
			'fields'         => [ 
				[ 
					'id'   => 'phone',
					'name' => __( 'Phone', 'bat-dong-san' ),
				],
				[ 
					'id'   => 'email',
					'name' => __( 'Email', 'bat-dong-san' ),
				],
				[ 
					'id'   => 'address',
					'name' => __( 'Address', 'bat-dong-san' ),
				],
			],
		];
	}

	private function social(): array {
		return [ 
			'title'          => __( 'Social', 'bat-dong-san' ),
			'id'             => 'settings-social',
			'settings_pages' => 'website-settings',
			'tab'            => 'social',
			'fields'         => [ 
				[ 
					'id'   => 'facebook',
					'name' => __( 'Facebook', 'bat-dong-san' ),
				],
				[ 
					'id'   => 'twitter',
					'name' => __( 'Twitter', 'bat-dong-san' ),
				],
				[ 
					'id'   => 'youtube',
					'name' => __( 'Youtube', 'bat-dong-san' ),
				],
				[ 
					'id'   => 'instagram',
					'name' => __( 'Instagram', 'bat-dong-san' ),
				],
				[ 
					'id'   => 'tiktok',
					'name' => __( 'Tiktok', 'bat-dong-san' ),
				],
			],
		];
	}
}
