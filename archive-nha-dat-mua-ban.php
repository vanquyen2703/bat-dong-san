<?php get_header(); ?>

<?php
$categories = get_terms( [ 
	'taxonomy'   => 'danh-muc-nha-dat',
	'hide_empty' => false,
	'parent'     => 0,
	'meta_key'   => 'order',
	'orderby'    => 'meta_value_num',
] );
?>
<section class="list-product">
	<div class="container list-product__wrap">
		<?php foreach ( $categories as $category ) :
			?>
			<div class="list-product__item">
				<div class="list-product__thumbnail">
					<a href="<?= esc_url( get_category_link( $category->term_id ) ); ?>">
						<img alt="<?= esc_attr( $category->name ); ?>"
							src="<?= wp_get_attachment_image_url( $images['ID'], [ 540 * 2, 506 * 2 ] ); ?>" width="540"
							height="506" loading="lazy">
					</a>
				</div>
				<h2><a href="<?= esc_url( get_category_link( $category->term_id ) ); ?>">
						<?= esc_html( $category->name ); ?>
					</a></h2>
				<p class="desc">
					<?= esc_html( $category->description ); ?>
				</p>
			</div>
		<?php endforeach; ?>
	</div>
</section>

<?php get_footer(); ?>