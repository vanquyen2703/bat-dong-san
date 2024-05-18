<?php get_header(); ?>
<?php
$args[] = array( 'relation' => 'AND' );
if ( isset( $_GET['loai_nha_dat'] ) && $_GET['loai_nha_dat'] != 'all' ) {
	$args[] = [ 
		'taxonomy' => 'danh-muc-nha-dat',
		'field'    => 'slug',
		'terms'    => $_GET['loai_nha_dat'],
	];
}
if ( isset( $_GET['city'] ) && $_GET['city'] != 'all' && $_GET['districts'] == 'all' ) {
	$args[] = [ 
		'taxonomy' => 'dia-diem',
		'field'    => 'slug',
		'terms'    => $_GET['city'],
	];

}
if ( isset( $_GET['districts'] ) && $_GET['districts'] != 'all' ) {
	$args[] = [ 
		'taxonomy' => 'dia-diem',
		'field'    => 'slug',
		'terms'    => $_GET['districts'],
	];
}
if ( isset( $_GET['dien_tich'] ) && $_GET['dien_tich'] != 'all' ) {
	$args[] = [ 
		'taxonomy' => 'dien-tich',
		'field'    => 'slug',
		'terms'    => $_GET['dien_tich'],
	];
}
if ( isset( $_GET['gia'] ) && $_GET['gia'] != 'all' ) {
	$args[] = [ 
		'taxonomy' => 'gia',
		'field'    => 'slug',
		'terms'    => $_GET['gia'],
	];
}
$data      = [ 
	'post_type' => 'nha-dat-mua-ban',
	'tax_query' => $args,
];
$the_query = new WP_Query( $data );

?>
<section class="list-product">
	<div class="container list-product__wrap">

		<?php if ( $the_query->have_posts() ) : ?>
			<div class="entries">
				<?php
				global $count;
				$count = 1;
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					get_template_part( 'template-parts/content', 'bds' );
					$count++;
				}
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
				]
			);
			?>
		<?php else : ?>
			<?php //get_template_part( 'template-parts/content/none' );
				echo 'ko có bài viết nào';
				?>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>