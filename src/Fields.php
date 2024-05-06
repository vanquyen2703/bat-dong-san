<?php
namespace BDS;

class Fields
{
	public function __construct()
	{
		add_filter('rwmb_meta_boxes', [$this, 'register_fields']);
	}

	public function register_fields(array $meta_boxes): array
	{
		$meta_boxes[] = $this->home();

		return $meta_boxes;
	}

	private function home(): array
	{
		return [
			'title' => __('Homepage settings', 'bat-dong-san'),
			'id' => 'home',
			'post_types' => ['page'],
			'include' => [
				'ID' => get_option('page_on_front'),
			],
			'tabs' => [
				'banners' => __('Banners', 'bat-dong-san'),
				'features' => __('Features', 'bat-dong-san'),
				'intro' => __('Intro', 'bat-dong-san'),
				'partners' => __('Partners', 'bat-dong-san'),
				'news' => __('News', 'bat-dong-san'),
			],
			'tab_style' => 'left',
			'fields' => [
				[
					'id' => 'banners',
					'type' => 'group',
					'tab' => 'banners',
					'clone' => true,
					'sort' => true,
					'collapsible' => true,
					'group_title' => __('Banner {#}', 'bat-dong-san'),
					'fields' => [
						[
							'id' => 'image',
							'name' => __('Image', 'bat-dong-san'),
							'type' => 'single_image',
							'desc' => __('Recommended size: 1920x560', 'bat-dong-san'),
						],
						[
							'id' => 'link',
							'name' => __('Link', 'bat-dong-san'),
						],
					],
				],
			],
		];
	}
}
