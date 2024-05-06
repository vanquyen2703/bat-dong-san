</main>

<footer class="footer">
	<div class="footer__columns container">
		<div class="footer__column">
			<a class="footer__logo" href="<?= esc_url( home_url( '/' ) ) ?>"></a>
			<?php // phpcs:ignore ?>
		</div>
		<div class="footer__column footer__contact">
			<h3><?php esc_html_e( 'Giữ liên lạc với chúng tôi', 'bat-dong-san' ) ?></h3>

		</div>
		<div class="footer__column">
			<div class="footer__block">
				<h3><?php esc_html_e( 'VMC Circle', 'bat-dong-san' ) ?></h3>
				<?php
				wp_nav_menu( [ 
					'menu_class'     => 'no-list',
					'container'      => '',
					'theme_location' => 'footer-circle',
				] );
				?>
			</div>

			<div class="footer__block">
				<h3><?php esc_html_e( 'Theo dõi chúng tôi', 'bat-dong-san' ) ?></h3>

				<div class="social-icons flex">
				</div>
			</div>
		</div>

		<div class="footer__column">
			<h3><?php esc_html_e( 'Tin tức - sự kiện', 'bat-dong-san' ) ?></h3>
			<?php
			wp_nav_menu( [ 
				'menu_class'     => 'no-list',
				'container'      => '',
				'theme_location' => 'footer-menu',
			] );
			?>
		</div>
	</div>
	<div class="footer__copyright">
		<?= wp_kses_post( sprintf( __( 'Bản quyền %d thuộc về %s. Bảo lưu mọi quyền. Phát triển bởi %s.', 'bat-dong-san' ), gmdate( 'Y' ), get_bloginfo( 'name' ), '<a href="https://FluxDigital.vn" target="_blank">FluxDigital</a>' ) ) ?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>