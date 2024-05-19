<?php

$property_rent = get_field( 'bat_dong_san_cho_thue' );
$query         = new WP_Query(
	array(
		'post_type'      => 'nha-dat-cho-thue',
		'posts_per_page' => 8,
		'post_status'    => 'publish',
		'no_found_rows'  => true,
	),
);
if ( ! $query->have_posts() ) {
	return;
}

?>
<section class="property">
	<div class="container">
		<h2 class="section-heading">
			<?= esc_html( $property_rent[ 'tieu_de_rent' ] ); ?>
		</h2>
		<?php
		$categories = get_terms(
			array(
				'taxonomy'   => 'danh-muc-cho-thue', // Thay 'category' bằng slug của taxonomy bạn muốn lấy
				'orderby'    => 'count', // Sắp xếp theo số lượng bài viết
				'order'      => 'DESC', // Sắp xếp từ lớn đến nhỏ
				'hide_empty' => false, // Ẩn các danh mục không có bài viết
				'number'     => 5, // Số lượng danh mục bạn muốn hiển thị
			),
		);

		if ( ! empty( $categories ) ) {
			echo '<ul class="list-cate">';
			foreach ( $categories as $category ) {
				echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li>';
			}
			echo '</ul>';
		}
		?>
		<div class="property__wrap">
			<?php
			global $count;
			while ( $query->have_posts() ) :
				$query->the_post();
				get_template_part( 'template-parts/content-bds' );
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>