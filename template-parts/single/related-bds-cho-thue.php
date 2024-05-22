<?php
$args  = array(
	'post_type'      => 'nha-dat-cho-thue',
	'posts_per_page' => 3,
	'post__not_in'   => array( get_the_ID() ),
);
$query = new WP_Query( $args );
if ( ! $query->have_posts() ) {
	return;
}
?>
<section class="related-product">
		<h2>
			<?= esc_html__( 'Bất động sản tương tự', 'bat-dong-san' ); ?>
		</h2>
		<div class="related-product__wrap">
			<?php
			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					?>
																			<div class="related-product__item">
																				<div class="entry-thumbnail">
																					<a href="<?php the_permalink(); ?>">
																						<?php the_post_thumbnail(); ?>
																					</a>
																				</div>
																				<div class="entry-content">
																					<h3><a href="<?php the_permalink(); ?>">
																							<?php the_title(); ?>
																						</a></h3>
																				</div>
																			</div>
																			<?php
				endwhile;
			endif;
			?>
		</div>
</section>