<?php get_header(); ?>

<section class="archive-bds">
	<?php
	get_template_part( 'template-parts/archive/breadcrumbs' );
	?>
 <div class="archive-search">
		<div class="container">
		<?= do_shortcode( '[form_search_thue]' ) ?>
		</div>
	</div>
	<div class="container">

		<div class="list-bds__wrap" id="list-store">
			<div class="list-bds__sidebar">
				<?php dynamic_sidebar( 'sidebar-3' ) ?>
			</div>
			<div class="list-bds__content">
				<div class="list-bds__order">
					<?php do_action( 'haston_ordering' ); ?>
				</div>
				<div class="list-bds__post">

					<?php
					if ( have_posts() ) : ?>
										<div class="list-bds__show grid-view">
											<?php
											while ( have_posts() ) {
												the_post();
												get_template_part( 'template-parts/content', 'bds' );
											}
											?>
										</div>
										<?php the_posts_pagination(
											[ 
												'mid_size'  => 1,
												'prev_text' => __( '<', 'haston' ),
												'next_text' => __( '>', 'haston' ),
											],
										); ?>
<?php else : ?>
										<?php get_template_part( 'template-parts/content/none' ); ?>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>