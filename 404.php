<?php get_header(); ?>


<main id="main" class="site-main" role="main">

	<section class="error-404 not-found">
		<div class="container">
			<div class="error-message">
				<h1>404</h1>
			</div>
			<div class="page-content">
				<p>
					<?php esc_html__( 'Xin lỗi, Nội dung bạn tìm kiếm có vẻ như không tồn tại hoặc đã được gỡ bỏ. Hãy thử tìm kiếm lại với từ khóa khác.', 'bat-dong-san' ); ?>
				</p>
				<?php get_search_form(); ?>
				<div class="btn-navigation">
					<a class="go-back-home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php esc_html__( 'Về trang chủ', 'bat-dong-san' ); ?>
					</a>
				</div>
			</div><!-- .page-content -->
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php get_footer(); ?>