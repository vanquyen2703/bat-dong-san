<?php
get_header(); ?>

<article <?php post_class( 'single__bds' ) ?> id="<?php the_ID() ?>">
	<div class="container">
		<?php
		if ( function_exists( 'yoast_breadcrumb' ) ) {
			yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
		}
		?>

		<div class="single__bds--wrap">
			<div class="single__bds--content">
				<div class="single__bds--gallery">
					<?php
					$images_rent = get_field( 'img_bds' );
					if ( $images_rent ) : ?>
									<ul id="imageGallery">
										<?php foreach ( $images_rent as $image_rent ) : ?>
													<li data-thumb="<?php echo esc_url( $image_rent[ 'url' ] ); ?>"
														data-src="<?php echo esc_url( $image_rent[ 'url' ] ); ?>">
														<img src="<?php echo esc_url( $image_rent[ 'sizes' ][ 'large' ] ); ?>"
															alt="<?php echo esc_attr( $image_rent[ 'alt' ] ); ?>" />
													</li>
										<?php endforeach; ?>
									</ul>
					<?php endif; ?>
				</div>
				<?php the_title( '<h1>', '</h1>' ); ?>
				<div class="single__bds--info">

					<?php
					$info_bds = get_field( 'info_bds' );
					if ( $info_bds ) : ?>
							<ul>
								<?php if ( ! empty( $info_bds[ 'gia' ] ) ) : ?>
															<li>
																<?php Flux\Icon::output( 'money' ) ?>
																<strong><?php echo $info_bds[ 'gia' ]; ?></strong>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'dien_tich' ] ) ) : ?>
															<li>

																<strong><?php echo $info_bds[ 'dien_tich' ]; ?></strong>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'so_phong_ngu' ] ) ) : ?>
															<li>
																<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
																	<path fill="#000000"
																		d="M8 5c-.5 0-1 .21-1.39.6S6 6.45 6 7v3c-.53 0-1 .19-1.41.59S4 11.47 4 12v5h1.34L6 19h1l.69-2h8.67l.64 2h1l.66-2H20v-5c0-.53-.19-1-.59-1.41S18.53 10 18 10V7c0-.55-.2-1-.61-1.4S16.5 5 16 5M8 7h3v3H8m5-3h3v3h-3m-7 2h12v3H6Z">
																	</path>
																</svg>
																<?php echo $info_bds[ 'so_phong_ngu' ]; ?>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'so_tang' ] ) ) : ?>
															<li>
																<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
																	<g fill="none" stroke="#000000" stroke-width="1.5">
																		<path stroke-linecap="round" d="M22 22H2"></path>
																		<path d="M21 22v-7.5a1.5 1.5 0 0 0-1.5-1.5h-3a1.5 1.5 0 0 0-1.5 1.5V22"></path>
																		<path stroke-linecap="round" stroke-linejoin="round"
																			d="M15 22V9M9 22V5c0-1.414 0-2.121.44-2.56C9.878 2 10.585 2 12 2c1.414 0 2.121 0 2.56.44C15 2.878 15 3.585 15 5v0">
																		</path>
																		<path stroke-linecap="round"
																			d="M9 22V9.5A1.5 1.5 0 0 0 7.5 8h-3A1.5 1.5 0 0 0 3 9.5V16m0 6v-2.25"></path>
																	</g>
																</svg>
																<?php echo $info_bds[ 'so_tang' ]; ?>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'huong' ] ) ) : ?>
															<li>
																<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
																	<g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
																		stroke-width="2">
																		<path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5s-7-5-7-5"></path>
																		<path
																			d="M12 13a1 1 0 1 0 0-2a1 1 0 0 0 0 2m9 4v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2">
																		</path>
																	</g>
																</svg>
																<?php echo $info_bds[ 'huong' ]; ?>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'noi_that' ] ) ) : ?>
															<li>
																<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
																	<g fill="none" stroke="#000000" stroke-linecap="round" stroke-width="1.5">
																		<path
																			d="M8 18H5.556A3.556 3.556 0 0 1 2 14.444V12a2 2 0 1 1 4 0v1.2a.8.8 0 0 0 .8.8h10.4a.8.8 0 0 0 .8-.8V12a2 2 0 1 1 4 0v2.444A3.556 3.556 0 0 1 18.444 18H12">
																		</path>
																		<path
																			d="M15 5c.93 0 1.394 0 1.78.077a4 4 0 0 1 3.143 3.143C20 8.606 20 9.07 20 10M4 10c0-.93 0-1.394.077-1.78A4 4 0 0 1 7.22 5.077C7.606 5 8.07 5 9 5h2m9 14v-1M4 19v-1">
																		</path>
																	</g>
																</svg>
																<?php echo $info_bds[ 'noi_that' ]; ?>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'phap_ly' ] ) ) : ?>
															<li>
																<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 56 56">
																	<path fill="#000000"
																		d="M15.555 53.125h24.89c4.852 0 7.266-2.461 7.266-7.336V24.508c0-3.024-.328-4.336-2.203-6.258L32.57 5.102c-1.78-1.829-3.234-2.227-5.882-2.227H15.555c-4.828 0-7.266 2.484-7.266 7.36v35.554c0 4.898 2.438 7.336 7.266 7.336m.187-3.773c-2.414 0-3.68-1.29-3.68-3.633V10.305c0-2.32 1.266-3.657 3.704-3.657h10.406v13.618c0 2.953 1.5 4.406 4.406 4.406h13.36v21.047c0 2.343-1.243 3.633-3.68 3.633ZM31 21.132c-.914 0-1.29-.374-1.29-1.312V7.375l13.5 13.758Z">
																	</path>
																</svg>
																<?php echo $info_bds[ 'phap_ly' ]; ?>
															</li>
								<?php endif; ?>
								<?php if ( ! empty( $info_bds[ 'mat_duong' ] ) ) : ?>
															<li>
																<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 14 14">
																	<path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
																		d="m.5 13.5l3-13M7 .5v2M7 6v2m0 3.5v2m6.5 0l-3-13"></path>
																</svg>
																<?php echo $info_bds[ 'mat_duong' ]; ?>
															</li>
								<?php endif; ?>
							</ul>
					<?php endif; ?>
				</div>

				<?php the_content(); ?>
			</div>
			<div class="single__bds--sidebar">
				<?php dynamic_sidebar() ?>
			</div>
		</div>
	</div>
</article <?php get_footer(); ?>