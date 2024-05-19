<?php get_header(); ?>
<?php
// Lấy các giá trị tìm kiếm
$loai_nha_dat = isset( $_GET[ 'loai_nha_dat' ] ) ? $_GET[ 'loai_nha_dat' ] : 'all';
$city         = isset( $_GET[ 'city' ] ) ? $_GET[ 'city' ] : 'all';
$districts    = isset( $_GET[ 'districts' ] ) ? $_GET[ 'districts' ] : 'all';
$dien_tich    = isset( $_GET[ 'dien_tich' ] ) ? $_GET[ 'dien_tich' ] : 'all';
$gia          = isset( $_GET[ 'gia' ] ) ? $_GET[ 'gia' ] : 'all';

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

// Tạo dòng tiêu đề và thông điệp tìm kiếm
$search_message = 'Kết quả tìm kiếm: ' . implode( ', ', $search_terms );

?>
<section class="list-product">
	<div class="container list-product__wrap">
		<h1 class="title-search"><?php echo $search_message; ?></h1>
		<?php
		$args[] = array( 'relation' => 'AND' );
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
		if ( isset( $_GET[ 'post_type' ] ) ) {
			$post_type = $_GET[ 'post_type' ];
		}
		$data = [ 
			'post_type' => $post_type,
			'tax_query' => $args,
		];

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
				echo 'Không có bài viết nào';
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