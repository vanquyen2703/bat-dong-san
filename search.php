<?php get_header(); ?>
<?php
// Lấy các giá trị tìm kiếm
$post_type = $_GET[ 'post_type' ];

$loai_nha_dat = isset( $_GET[ 'loai_nha_dat' ] ) ? $_GET[ 'loai_nha_dat' ] : 'all';
$loai_du_an   = isset( $_GET[ 'loai_du_an' ] ) ? $_GET[ 'loai_du_an' ] : 'all';
$city         = isset( $_GET[ 'city' ] ) ? $_GET[ 'city' ] : 'all';
$quan         = isset( $_GET[ 'quan' ] ) ? $_GET[ 'quan' ] : 'all';
$phuong       = isset( $_GET[ 'phuong' ] ) ? $_GET[ 'phuong' ] : 'all';
$districts    = isset( $_GET[ 'districts' ] ) ? $_GET[ 'districts' ] : 'all';
$dien_tich    = isset( $_GET[ 'dien_tich' ] ) ? $_GET[ 'dien_tich' ] : 'all';
$gia          = isset( $_GET[ 'gia' ] ) ? $_GET[ 'gia' ] : 'all';
$muc_gia      = isset( $_GET[ 'muc_gia' ] ) ? $_GET[ 'muc_gia' ] : 'all';
$trang_thai   = isset( $_GET[ 'trang_thai' ] ) ? $_GET[ 'trang_thai' ] : 'all';

// Chuẩn bị mảng lưu trữ tên của các thuộc tính tìm kiếm
$search_terms = [];

// Lấy tên của từ khóa từ taxonomy và lưu vào mảng

if ( $loai_nha_dat != 'all' ) {
	$term = get_term_by( 'slug', $loai_nha_dat, 'danh-muc-nha-dat' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Loại nhà đất: ' . $term->name . '</span>';
	}
}
if ( $city != 'all' ) {
	$term = get_term_by( 'slug', $city, 'dia-diem' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Quận: ' . $term->name . '</span>';
	}
}

if ( $districts != 'all' ) {
	$term = get_term_by( 'slug', $districts, 'dia-diem' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Phường: ' . $term->name . '</span>';
	}
}
if ( $dien_tich != 'all' ) {
	$term = get_term_by( 'slug', $dien_tich, 'dien-tich' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Diện tích: ' . $term->name . '</span>';
	}
}
if ( $gia != 'all' ) {
	$term = get_term_by( 'slug', $gia, 'gia' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Giá: ' . $term->name . '</span>';
	}
}
//du-an
if ( $loai_du_an != 'all' ) {
	$term = get_term_by( 'slug', $loai_du_an, 'danh-muc-du-an' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Loại dự án: ' . $term->name . '</span>';
	}
}
if ( $quan != 'all' ) {
	$term = get_term_by( 'slug', $quan, 'dia-diem-du-an' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Quận: ' . $term->name . '</span>';
	}
}
if ( $phuong != 'all' ) {
	$term = get_term_by( 'slug', $phuong, 'dia-diem-du-an' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Phường: ' . $term->name . '</span>';
	}
}
if ( $muc_gia != 'all' ) {
	$term = get_term_by( 'slug', $muc_gia, 'muc-gia' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Mức giá: ' . $term->name . '</span>';
	}
}
if ( $trang_thai != 'all' ) {
	$term = get_term_by( 'slug', $trang_thai, 'trang-thai' );
	if ( $term ) {
		$search_terms[] = '<span>' . 'Trạng thái: ' . $term->name . '</span>';
	}
}

// Tạo dòng tiêu đề và thông điệp tìm kiếm
$search_message = 'Kết quả tìm kiếm: ' . implode( ', ', $search_terms );

?>
<section class="list-product">
	<div class="container list-product__wrap">
		<h1 class="title-search"><?php echo $search_message; ?></h1>
		<?php
		$args[] = array( 'relation' => 'AND' );
		if ( $post_type == 'nha-dat-mua-ban' ) {
			if ( $loai_nha_dat != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'danh-muc-nha-dat',
					'field'    => 'slug',
					'terms'    => $loai_nha_dat,
				];
			}
			if ( $city != 'all' && $districts == 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dia-diem',
					'field'    => 'slug',
					'terms'    => $city,
				];
			}
			if ( $districts != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dia-diem',
					'field'    => 'slug',
					'terms'    => $districts,
				];
			}
			if ( $dien_tich != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dien-tich',
					'field'    => 'slug',
					'terms'    => $dien_tich,
				];
			}
			if ( $gia != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'gia',
					'field'    => 'slug',
					'terms'    => $gia,
				];
			}
		}
		if ( $post_type == 'nha-dat-cho-thue' ) {
			if ( $loai_nha_dat != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'danh-muc-cho-thue',
					'field'    => 'slug',
					'terms'    => $loai_nha_dat,
				];
			}
			if ( $city != 'all' && $districts == 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dia-diem-rent',
					'field'    => 'slug',
					'terms'    => $city,
				];
			}
			if ( $districts != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dia-diem-rent',
					'field'    => 'slug',
					'terms'    => $districts,
				];
			}

			if ( $gia != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'gia_rent',
					'field'    => 'slug',
					'terms'    => $gia,
				];
			}
		}
		if ( $post_type == 'du-an' ) {
			if ( $loai_du_an != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'danh-muc-du-an',
					'field'    => 'slug',
					'terms'    => $loai_du_an,
				];
			}
			if ( $quan != 'all' && $districts == 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dia-diem-du-an',
					'field'    => 'slug',
					'terms'    => $quan,
				];
			}
			if ( $phuong != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'dia-diem-du-an',
					'field'    => 'slug',
					'terms'    => $phuong,
				];
			}

			if ( $muc_gia != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'muc_gia',
					'field'    => 'slug',
					'terms'    => $muc_gia,
				];
			}
			if ( $trang_thai != 'all' ) {
				$args[] = [ 
					'taxonomy' => 'trang_thai',
					'field'    => 'slug',
					'terms'    => $trang_thai,
				];
			}
		}
		if ( isset( $_GET[ 'post_type' ] ) ) {
			$post_type = $_GET[ 'post_type' ];
		}
		$data = [ 
			'post_type' => $post_type,
			'tax_query' => $args,
		];
		//dd( $data );
		$the_query = new WP_Query( $data );

		?>
		<div class="entries">
			<?php
			global $count;
			$count = 1;
			if ( $the_query->have_posts() ) :
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					get_template_part( 'template-parts/content', 'bds' );
					$count++;
				endwhile;
			else :
				echo 'Không có bất động sản phù hợp. Vui lòng tìm kiếm lại theo bộ lọc.';
			endif;
			?>
		</div>
		<?php
		the_posts_pagination(
			[ 
				'screen_reader_text' => '',
				'mid_size'           => 1,
				'prev_text'          => __( '<', 'bat-dong-san' ),
				'next_text'          => __( '>', 'bat-dong-san' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'bat-dong-san' ) . ' </span>',
			],
		);
		?>
	</div>
</section>

<?php get_footer(); ?>