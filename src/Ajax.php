<?php
namespace Flux;

class Ajax {
	public function __construct() {
		add_action( 'wp_ajax_display_district', [ $this, 'display_district' ] );
		add_action( 'wp_ajax_nopriv_display_district', [ $this, 'display_district' ] );

		add_action( 'wp_ajax_display_district_rent', [ $this, 'display_district_rent' ] );
		add_action( 'wp_ajax_nopriv_display_district_rent', [ $this, 'display_district_rent' ] );

		add_action( 'wp_ajax_filter_sidebar', [ $this, 'filter_sidebar' ] );
		add_action( 'wp_ajax_nopriv_filter_sidebar', [ $this, 'filter_sidebar' ] );
	}

	public function display_district() {
		ob_start();
		echo '<option value="all">Chọn Quận/Huyện</option>';
		if ( empty( $_POST['city'] ) ) {
			wp_send_json_error();
		}
		$city_id   = $_POST['city'];
		$districts = get_terms( [ 
			'taxonomy'   => 'dia-diem',
			'hide_empty' => false,
			'parent'     => $city_id,
		] );
		foreach ( $districts as $district ) {
			?>
			<option value="<?= $district->slug ?>"><?= $district->name ?></option>
			<?php
		}
		$result = ob_get_clean();
		wp_send_json_success( $result );
		die();
	}

	public function display_district_rent() {
		ob_start();
		echo '<option value="all">Chọn Quận/Huyện</option>';
		if ( empty( $_POST['city_rent'] ) ) {
			wp_send_json_error();
		}
		$city_id        = $_POST['city_rent'];
		$districts_rent = get_terms( [ 
			'taxonomy'   => 'dia-diem-rent',
			'hide_empty' => false,
			'parent'     => $city_id,
		] );
		foreach ( $districts_rent as $district_rent ) {
			?>
			<option value="<?= $district_rent->slug ?>"><?= $district_rent->name ?></option>
			<?php
		}
		$result = ob_get_clean();
		wp_send_json_success( $result );
		die();
	}

	public function filter_sidebar() {
		ob_start();
		$terms  = $_POST['name'];
		$args[] = array( 'relation' => 'AND' );
		foreach ( $terms as $key => $value ) {
			$args[] = [ 
				'taxonomy' => $key,
				'field'    => 'slug',
				'terms'    => $value,
			];
		}
		$data      = [ 
			'post_type' => 'nha-dat-mua-ban',
			'tax_query' => $args,
		];
		$the_query = new \WP_Query( $data );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				get_template_part( 'template-parts/content', 'bds' );
			}
		}
		wp_reset_postdata();
		$result = ob_get_clean();
		wp_send_json_success( $result );
		die();
	}
}