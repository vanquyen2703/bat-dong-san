<?php
$args  = [ 
	'post_type'      => 'post',
	'posts_per_page' => 3,
];
$query = new WP_Query( $args );
?>
<section class="related-products">
	<h2>
		<?= esc_html__( 'Bài viết liên quan', 'bat-dong-san' ); ?>
	</h2>
	<div class="related-products__wrap">
		<?php
		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post();
				get_template_part( 'template-parts/content' );
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>