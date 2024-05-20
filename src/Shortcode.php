<?php
namespace Flux;

class Shortcode {
	public function __construct() {
		add_shortcode( 'form_search_ban', array( $this, 'render_form_ban' ) );
		add_shortcode( 'form_search_thue', array( $this, 'render_form_thue' ) );
		add_shortcode( 'form_search_du_an', array( $this, 'render_form_du_an' ) );
		add_shortcode( 'filter_products', array( $this, 'render_filter' ) );
		add_shortcode( 'taxonomies_and_terms_list', array( $this, 'taxonomies_and_terms_list_shortcode' ) );
		add_shortcode( 'taxonomies_and_terms_list_rent', array( $this, 'taxonomies_and_terms_list_rent_shortcode' ) );

	}

	public function render_form_ban() {
		?>
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form" role="search">
			<div class="text-search">
				<input type="hidden" name="post_type" value="nha-dat-mua-ban">
				<input type="text" name="s" placeholder="<?php esc_attr_e( 'Nhập từ khóa tìm kiếm...', 'bat-dong-san' ) ?>">
				<button type="submit" class="btn-search">Tìm kiếm</button>
			</div>
			<div class="box-select">
				<select name="loai_nha_dat" id="" class="tax-danh-muc">
					<?php
					echo '<option value="all">Chọn loại nhà đất</option>';
					$terms = get_terms( [ 
						'taxonomy'   => 'danh-muc-nha-dat',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $terms as $term ) {
						echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
					}
					?>
				</select>
				<select name="city" id="city" class="city">
					<?php
					echo '<option value="all">Chọn Quận</option>';
					$cities = get_terms( [ 
						'taxonomy'   => 'dia-diem',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $cities as $city ) {
						echo '<option data-ip="' . $city->term_id . '" value="' . $city->slug . '">' . $city->name . '</option>';
					}
					?>
				</select>
				<select name="districts" id="districts" class="districts">
					<option value="all">Chọn Phường</option>
				</select>
				<select name="dien_tich" id="" class="dien-tich">
					<?php
					echo '<option value="all">Chọn diện tích</option>';
					$dien_tich = get_terms( [ 
						'taxonomy'   => 'dien-tich',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $dien_tich as $dientich ) {
						echo '<option value="' . $dientich->slug . '">' . $dientich->name . '</option>';
					}
					?>
				</select>
				<select name="gia" id="" class="gia">
					<?php
					echo '<option value="all">Mức giá</option>';
					$prices = get_terms( [ 
						'taxonomy'   => 'gia',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $prices as $price ) {
						echo '<option value="' . $price->slug . '">' . $price->name . '</option>';
					}
					?>
				</select>
				<select name="huong" id="" class="huong">
					<?php
					echo '<option value="all">Hướng</option>';
					$prices = get_terms( [ 
						'taxonomy'   => 'huong',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $prices as $price ) {
						echo '<option value="' . $price->slug . '">' . $price->name . '</option>';
					}
					?>
				</select>
			</div>
		</form>
		<?php
	}

	public function render_form_thue() {
		?>
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form" role="search">
			<div class="text-search">
				<input type="hidden" name="post_type" value="nha-dat-cho-thue">
				<input type="text" name="s" placeholder="<?php esc_attr_e( 'Nhập từ khóa tìm kiếm...', 'bat-dong-san' ) ?>">
				<button type="submit" class="btn-search">Tìm kiếm</button>
			</div>
			<div class="box-select">
				<select name="loai_nha_dat" id="" class="tax-danh-muc">
					<?php
					echo '<option value="all">Chọn loại nhà đất</option>';
					$terms_rent = get_terms( [ 
						'taxonomy'   => 'danh-muc-cho-thue',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $terms_rent as $terms_rent ) {
						echo '<option value="' . $terms_rent->slug . '">' . $terms_rent->name . '</option>';
					}
					?>
				</select>
				<select name="city" id="city_rent" class="city">
					<?php
					echo '<option value="all">Chọn Quận</option>';
					$cities_rent = get_terms( [ 
						'taxonomy'   => 'dia-diem-rent',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $cities_rent as $city_rent ) {
						echo '<option data-ip="' . $city_rent->term_id . '" value="' . $city_rent->slug . '">' . $city_rent->name . '</option>';
					}
					?>
				</select>
				<select name="districts_rent" id="districts_rent" class="districts_rent">
					<option value="all">Chọn Phường</option>
				</select>

				<select name="gia" id="" class="gia">
					<?php
					echo '<option value="all">Mức giá</option>';
					$prices_rent = get_terms( [ 
						'taxonomy'   => 'gia-rent',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $prices_rent as $price_rent ) {
						echo '<option value="' . $price_rent->slug . '">' . $price_rent->name . '</option>';
					}
					?>
				</select>
				<select name="huong" id="" class="huong">
					<?php
					echo '<option value="all">Chọn hướng</option>';
					$huong_rent = get_terms( [ 
						'taxonomy'   => 'huong-rent',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $huong_rent as $huong_rent ) {
						echo '<option value="' . $huong_rent->slug . '">' . $huong_rent->name . '</option>';
					}
					?>
				</select>
				<select name="phong" id="" class="phong">
					<?php
					echo '<option value="all">Phòng ngủ</option>';
					$phong_ngu_rent = get_terms( [ 
						'taxonomy'   => 'phong-ngu-rent',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $phong_ngu_rent as $phong_ngu_rent ) {
						echo '<option value="' . $phong_ngu_rent->slug . '">' . $phong_ngu_rent->name . '</option>';
					}
					?>
				</select>
			</div>
		</form>
		<?php
	}

	public function render_form_du_an() {
		?>
		<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" class="search-form" role="search">
			<div class="text-search">
				<input type="hidden" name="post_type" value="du-an">
				<input type="text" name="s" placeholder="<?php esc_attr_e( 'Nhập từ khóa tìm kiếm...', 'bat-dong-san' ) ?>">
				<button type="submit" class="btn-search">Tìm kiếm</button>
			</div>
			<div class="box-select">
				<select name="loai_du_an" id="" class="tax-danh-muc">
					<?php
					echo '<option value="all">Chọn loại dự án</option>';
					$terms_rent = get_terms( [ 
						'taxonomy'   => 'danh-muc-du-an',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $terms_rent as $terms_rent ) {
						echo '<option value="' . $terms_rent->slug . '">' . $terms_rent->name . '</option>';
					}
					?>
				</select>
				<select name="quan" id="city_rent" class="quan">
					<?php
					echo '<option value="all">Chọn Quận</option>';
					$cities_rent = get_terms( [ 
						'taxonomy'   => 'dia-diem-rent',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $cities_rent as $city_rent ) {
						echo '<option data-ip="' . $city_rent->term_id . '" value="' . $city_rent->slug . '">' . $city_rent->name . '</option>';
					}
					?>
				</select>
				<select name="phuong" id="districts_rent" class="phuong">
					<option value="all">Chọn Phường</option>
				</select>

				<select name="muc_gia" id="" class="muc_gia">
					<?php
					echo '<option value="all">Mức giá</option>';
					$prices_rent = get_terms( [ 
						'taxonomy'   => 'muc-gia',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $prices_rent as $price_rent ) {
						echo '<option value="' . $price_rent->slug . '">' . $price_rent->name . '</option>';
					}
					?>
				</select>
				<select name="trang_thai" id="" class="trang_thai">
					<?php
					echo '<option value="all">Trạng thái</option>';
					$huong_rent = get_terms( [ 
						'taxonomy'   => 'trang-thai',
						'hide_empty' => false,
						'parent'     => 0,
					] );
					foreach ( $huong_rent as $huong_rent ) {
						echo '<option value="' . $huong_rent->slug . '">' . $huong_rent->name . '</option>';
					}
					?>
				</select>
			</div>
		</form>
		<?php
	}

	public function render_filter() {
		?>
		<div class="filter-form">
			<p class="title-widget"><?= esc_html__( 'Danh mục nhà đất', 'bat-dong-san' ); ?></p>
			<ul class="danh_muc">
				<?php
				$danh_muc = get_terms( [ 
					'taxonomy'   => 'danh-muc-nha-dat',
					'hide_empty' => false,
					'parent'     => 0,
				] );
				foreach ( $danh_muc as $value ) {
					$class = ( is_tax( 'danh-muc-nha-dat', $value->slug ) ) ? 'active' : '';
					?>
					<li class="<?= esc_attr( $class ); ?>">
						<span class="checkmark"></span>
						<a href="<?= get_category_link( $value->term_id ) ?>"><?= esc_html( $value->name ); ?></a>
					</li>
					<?php
				}
				?>
			</ul>
			<!--label>< ?= $value->name ?>
<input type="checkbox" name="bemat" id="< ?= esc_attr( $value->slug ) ?>"
value="< ?= esc_attr( $value->slug ) ?>">
<span class="checkmark"></span>
</!--label-->
		</div>
		<form class="filter-form">
			<p class="title-widget"><?= esc_html__( 'Giá', 'bat-dong-san' ); ?></p>
			<?php
			$gia = get_terms( [ 
				'taxonomy'   => 'gia',
				'hide_empty' => false,
				'parent'     => 0,
			] );
			foreach ( $gia as $value ) {
				?>
				<label><?= $value->name ?>
					<input type="checkbox" name="gia" id="gia" value="<?= esc_attr( $value->slug ) ?>">
					<span class="checkmark"></span>
				</label>
				<?php
			}
			?>
		</form>
		<form class="filter-form">
			<p class="title-widget"><?= esc_html__( 'Diện tích', 'bat-dong-san' ); ?></p>
			<?php
			$dien_tich = get_terms( [ 
				'taxonomy'   => 'dien-tich',
				'hide_empty' => false,
				'parent'     => 0,
			] );
			foreach ( $dien_tich as $value ) {
				?>
				<label><?= $value->name ?>
					<input type="checkbox" name="dien-tich" id="dien-tich" value="<?= esc_attr( $value->slug ) ?>">
					<span class="checkmark"></span>
				</label>
				<?php
			}
			?>
		</form>
		<form class="filter-form">
			<p class="title-widget"><?= esc_html__( 'Hướng', 'bat-dong-san' ); ?></p>
			<?php
			$be_mat = get_terms( [ 
				'taxonomy'   => 'huong',
				'hide_empty' => false,
				'parent'     => 0,
			] );
			foreach ( $be_mat as $value ) {
				?>
				<label><?= $value->name ?>
					<input type="checkbox" name="huong" id="huong" value="<?= esc_attr( $value->slug ) ?>">
					<span class="checkmark"></span>
				</label>
				<?php
			}
			?>
		</form>

		<?php
	}

	public function taxonomies_and_terms_list_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'post_type'  => 'nha-dat-mua-ban',
				'taxonomies' => 'danh-muc-nha-dat',
			),
			$atts,
			'taxonomies_and_terms_list'
		);

		$specific_taxonomies = array_map( 'trim', explode( ',', $atts['taxonomies'] ) );

		$taxonomies = get_object_taxonomies( $atts['post_type'], 'objects' );
		$output     = '';

		if ( ! empty( $taxonomies ) ) {
			foreach ( $taxonomies as $taxonomy ) {
				if ( in_array( $taxonomy->name, $specific_taxonomies ) ) {
					$output .= '<div class="taxonomy-wrapper">';
					$output .= '<h2 class="taxonomy-title">' . esc_html( $taxonomy->labels->name ) . '</h2>';

					$terms = get_terms( array(
						'taxonomy'   => $taxonomy->name,
						'hide_empty' => false,
					) );

					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						$output .= '<ul>';
						foreach ( $terms as $term ) {
							$output .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '">' . esc_html( $term->name ) . '</a></li>';
						}
						$output .= '</ul>';
					} else {
						$output .= '<p>No terms found for this taxonomy.</p>';
					}

					$output .= '</div>';
				}
			}
		} else {
			$output .= 'No taxonomies found for this post type.';
		}

		return $output;
	}

	public function taxonomies_and_terms_list_rent_shortcode( $atts ) {
		$atts = shortcode_atts(
			array(
				'post_type'  => 'nha-dat-cho-thue',
				'taxonomies' => 'danh-muc-cho-thue',
			),
			$atts,
			'taxonomies_and_terms_list'
		);

		$specific_taxonomies = array_map( 'trim', explode( ',', $atts['taxonomies'] ) );

		$taxonomies = get_object_taxonomies( $atts['post_type'], 'objects' );
		$output     = '';

		if ( ! empty( $taxonomies ) ) {
			foreach ( $taxonomies as $taxonomy ) {
				if ( in_array( $taxonomy->name, $specific_taxonomies ) ) {
					$output .= '<div class="taxonomy-wrapper">';
					$output .= '<h2 class="taxonomy-title">' . esc_html( $taxonomy->labels->name ) . '</h2>';

					$terms = get_terms( array(
						'taxonomy'   => $taxonomy->name,
						'hide_empty' => false,
					) );

					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
						$output .= '<ul>';
						foreach ( $terms as $term ) {
							$output .= '<li><a href="' . esc_url( get_term_link( $term ) ) . '">' . esc_html( $term->name ) . '</a></li>';
						}
						$output .= '</ul>';
					} else {
						$output .= '<p>No terms found for this taxonomy.</p>';
					}

					$output .= '</div>';
				}
			}
		} else {
			$output .= 'No taxonomies found for this post type.';
		}

		return $output;
	}

}