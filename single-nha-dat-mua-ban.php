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
					$images = get_field( 'img_bds' );
					if ( $images ) : ?>
																														<ul id="imageGallery">
																															<?php foreach ( $images as $image ) : ?>
																																																								<li data-thumb="<?php echo esc_url( $image[ 'url' ] ); ?>"
																																																									data-src="<?php echo esc_url( $image[ 'url' ] ); ?>">
																																																									<img src="<?php echo esc_url( $image[ 'sizes' ][ 'large' ] ); ?>"
																																																										alt="<?php echo esc_attr( $image[ 'alt' ] ); ?>" />
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
																										<strong>Giá: <?php echo $info_bds[ 'gia' ]; ?></strong>
																									</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'dien_tich' ] ) ) : ?>
																									<li>
																									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 100 100"><path fill="#000000" d="M76.647 30.353a2 2 0 0 1-2-2v-3h-3a2 2 0 0 1 0-4h5a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2m-13.659-5h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-17.318 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-22.317 5a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h5a2 2 0 0 1 0 4h-3v3a2 2 0 0 1-2 2m0 34.635a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m0-17.318a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m5 30.977h-5a2 2 0 0 1-2-2v-5a2 2 0 0 1 4 0v3h3a2 2 0 0 1 0 4m34.635 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m-17.318 0h-8.659a2 2 0 0 1 0-4h8.659a2 2 0 0 1 0 4m30.977 0h-5a2 2 0 0 1 0-4h3v-3a2 2 0 0 1 4 0v5a2 2 0 0 1-2 2m0-13.659a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2m0-17.318a2 2 0 0 1-2-2v-8.659a2 2 0 0 1 4 0v8.659a2 2 0 0 1-2 2"></path><path fill="#000000" d="M90.216 92.216H9.784a2 2 0 0 1-2-2V9.784a2 2 0 0 1 2-2h80.432a2 2 0 0 1 2 2v80.432a2 2 0 0 1-2 2m-78.432-4h76.432V11.784H11.784z"></path></svg>
																										<strong>Diện tích: <?php echo $info_bds[ 'dien_tich' ]; ?></strong>
																									</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'so_phong_ngu' ] ) ) : ?>
																									<li>
																									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32"><path fill="#000000" d="M15 20H7v-3.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-.75c0-.946-.731-1.5-1.687-1.735a2.363 2.363 0 0 1-.123-.033c-.448-.137-3.287-.985-4.44-.982A1.75 1.75 0 0 0 7 14.75V12a3 3 0 1 0-6 0v15a2 2 0 0 0 2 2h1v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V29h18v1.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5V29h1a2 2 0 0 0 2-2v-7.504a3.5 3.5 0 0 0-3.5-3.5h-11a1.5 1.5 0 0 0-1.5 1.5zM4 11a1 1 0 0 1 1 1v10h10v.5a.5.5 0 0 0 .5.5H29v4H3V12a1 1 0 0 1 1-1"></path></svg>
																										<strong>Phòng ngủ: <?php echo $info_bds[ 'so_phong_ngu' ]; ?></strong>
																									</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'so_tang' ] ) ) : ?>
																									<li>
																									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 355 512"><path fill="#000000" d="M261.519 261.73v-44.52h28.153l61.983-50.342a7.166 7.166 0 0 0 2.924-5.775V10.914a7.165 7.165 0 0 0-7.022-7.163L159.25.002a7.139 7.139 0 0 0-6.302 3.503l-49.325 83.012c-2.225 3.055-.542 9.915 2.36 42.126c-19.534-.063-21.89-.873-25.035 2.604L3.156 208.015C.065 210.59 0 213.115 0 213.115l5.118 157.631h50.155V512h184.245l57.167-39.43a7.167 7.167 0 0 0 3.2-5.967v-160.96a7.165 7.165 0 0 0-7.165-7.165h-61.507c22.186-25.547 30.31-31.113 30.306-36.748M163.136 14.412l167.716 3.339l-60.9 64.347H122.908zM18.39 213.115l70.458-69.53l17.92.435l3.778 69.095zm221.128 280.24V366.14l46.037-39.734V462.76zm39.863-180.547l-57.644 49.75H168.89l49.558-49.75zm-32.192-53.806l-67.475 75.743l2.483-117.535h64.992zm42.83-64.66l1.7-112.244l48.53-53.43v128.796z"></path></svg>
																										<strong>Số tầng: <?php echo $info_bds[ 'so_tang' ]; ?></strong>
																									</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'huong' ] ) ) : ?>
																									<li>
																									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 48 48"><g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="m18 10l6-6m0 0l6 6m-6-6v10m-6 24l6 6m0 0l6-6m-6 6V34m14-16l6 6m0 0l-6 6m6-6H34m-24-6l-6 6m0 0l6 6m-6-6h10"></path><circle cx="24" cy="24" r="4"></circle></g></svg>
																										<strong>Hướng: <?php echo $info_bds[ 'huong' ]; ?></strong>
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
																										<strong>Nội thất: <?php echo $info_bds[ 'noi_that' ]; ?></strong>
																									</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'nha_wc' ] ) ) : ?>
										<li>
										<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16"><g fill="#000000"><path d="M10.348 7.643c0-1.112.488-1.754 1.318-1.754c.682 0 1.139.47 1.187 1.108H14v-.11c-.053-1.187-1.024-2-2.342-2c-1.604 0-2.518 1.05-2.518 2.751v.747c0 1.7.905 2.73 2.518 2.73c1.314 0 2.285-.792 2.342-1.939v-.114h-1.147c-.048.615-.497 1.05-1.187 1.05c-.839 0-1.318-.62-1.318-1.727zM4.457 11l1.02-4.184h.045L6.542 11h1.006L9 5.001H7.818l-.82 4.355h-.056L5.97 5.001h-.94l-.972 4.355h-.053l-.827-4.355H2L3.452 11z"></path><path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2z"></path></g></svg>
											<strong>WC: <?php echo $info_bds[ 'nha_wc' ]; ?></strong>
										</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'phap_ly' ] ) ) : ?>
																									<li>
																										<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 56 56">
																											<path fill="#000000"
																												d="M15.555 53.125h24.89c4.852 0 7.266-2.461 7.266-7.336V24.508c0-3.024-.328-4.336-2.203-6.258L32.57 5.102c-1.78-1.829-3.234-2.227-5.882-2.227H15.555c-4.828 0-7.266 2.484-7.266 7.36v35.554c0 4.898 2.438 7.336 7.266 7.336m.187-3.773c-2.414 0-3.68-1.29-3.68-3.633V10.305c0-2.32 1.266-3.657 3.704-3.657h10.406v13.618c0 2.953 1.5 4.406 4.406 4.406h13.36v21.047c0 2.343-1.243 3.633-3.68 3.633ZM31 21.132c-.914 0-1.29-.374-1.29-1.312V7.375l13.5 13.758Z">
																											</path>
																										</svg>
																										<strong>Pháp lý: <?php echo $info_bds[ 'phap_ly' ]; ?></strong>
																									</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'mat_tien' ] ) ) : ?>
																								<li>
																								<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 56 56"><path fill="#000000" fill-rule="evenodd" d="M46.172 30.014H9.828l3.758 3.757a2 2 0 0 1-2.829 2.829l-7.07-7.071a2.036 2.036 0 0 1-.05-.052A1.995 1.995 0 0 1 3 28.014c0-.493.178-.945.474-1.293c.063-.088.134-.171.212-.25l7.071-7.07a2 2 0 1 1 2.829 2.828L9.8 26.014h36.398l-3.785-3.785a2 2 0 1 1 2.829-2.829l7.07 7.071c.08.079.15.162.213.25c.296.348.474.8.474 1.293c0 .578-.245 1.098-.637 1.463a2.036 2.036 0 0 1-.05.052l-7.07 7.07a2 2 0 1 1-2.829-2.828z"></path></svg>
																									<strong>Mặt tiền: <?php echo $info_bds[ 'mat_tien' ]; ?></strong>
																								</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'mat_duong' ] ) ) : ?>
																								<li>
																									<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 14 14">
																										<path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"
																											d="m.5 13.5l3-13M7 .5v2M7 6v2m0 3.5v2m6.5 0l-3-13"></path>
																									</svg>
																									<strong>Mặt đường: <?php echo $info_bds[ 'mat_duong' ]; ?></strong>
																								</li>
									<?php endif; ?>
									<?php if ( ! empty( $info_bds[ 'gara_oto' ] ) ) : ?>
																				<li>
																				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512 512"><path fill="#000000" d="M256 44.158L19.76 165.816L32 173.937l224-112l224 112l12.24-8.12L256 44.157zm0 37.904l-215 107.5V495h30V203h370v292h30V189.562zM92 223v18h328v-18zm0 36v18h328v-18zm100 36c-8.5 0-14.393 5.524-18.95 11.6s-8.276 13.701-11.478 22.24c-4.27 11.389-7.54 24.334-9.248 36.887c-8.722-2.235-22.048-4.431-24.324 2.273c-2.354 6.934 7.344 13.583 16.668 18.217c-.32 1.067-.63 2.17-.906 3.344C141.969 397.18 141 406.6 141 416s.969 18.82 2.762 26.44c1.272 5.406 3.108 9.766 4.744 12.56h214.988c1.636-2.794 3.472-7.154 4.744-12.56C370.031 434.82 371 425.4 371 416s-.969-18.82-2.762-26.44a57 57 0 0 0-.906-3.343c9.324-4.634 19.022-11.283 16.668-18.217c-2.276-6.704-15.602-4.508-24.324-2.273c-1.707-12.553-4.977-25.498-9.248-36.887c-3.202-8.539-6.922-16.165-11.479-22.24C334.393 300.524 328.5 295 320 295zm0 18h128c-.5 0 1.607.476 4.55 4.4c2.944 3.925 6.224 10.299 9.022 17.76c3.673 9.795 6.488 21.437 8.028 32.414C318.195 361.125 292.18 361 256 361s-62.195.125-85.6 6.574c1.54-10.977 4.355-22.62 8.028-32.414c2.798-7.461 6.078-13.835 9.021-17.76c2.944-3.924 5.051-4.4 4.551-4.4m-16 87a16 16 0 0 1 16 16a16 16 0 0 1-16 16a16 16 0 0 1-16-16a16 16 0 0 1 16-16m160 0a16 16 0 0 1 16 16a16 16 0 0 1-16 16a16 16 0 0 1-16-16a16 16 0 0 1 16-16m-183 73v22h30v-22zm176 0v22h30v-22z"></path></svg>
																					<strong>Gara: <?php echo $info_bds[ 'gara_oto' ]; ?></strong>
																				</li>
									<?php endif; ?>
								</ul>
					<?php endif; ?>
				</div>

				<div class="single__bds--ct">
					<?php the_content(); ?>
				</div>
				<?php get_template_part( 'template-parts/single/related-bds-mua-ban' ); ?>

			</div>
			<div class="single__bds--sidebar">
			<?php dynamic_sidebar( 'sidebar-bds' ) ?>
			</div>
		</div>
	</div>
</article <?php get_footer(); ?>