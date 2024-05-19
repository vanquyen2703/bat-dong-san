</main>
<?php
$phone_number   = get_theme_mod( 'footer_phone_number', '0912 345 678' );
$phone_number_2 = get_theme_mod( 'footer_phone_number_2', '0912 345 678' );
$hotline        = get_theme_mod( 'footer_hotline', '18001234' );
$hotline_2      = get_theme_mod( 'footer_hotline_2', '18001234' );
$email          = get_theme_mod( 'footer_email', 'example@example.com' );
$facebook       = get_theme_mod( 'facebook', '#' );
$instagram      = get_theme_mod( 'intagram', '#' );
$youtube        = get_theme_mod( 'youtube', '#' );
$twitter        = get_theme_mod( 'twitter', '#' );

?>
<footer class="footer">
	<div class="container">
		<div class="footer__columns">
			<div class="footer__column footer__left">
				<div class="logo-ft">
					<?php the_custom_logo(); ?>
				</div>
				<div class="content-ft">
					<?php dynamic_sidebar( 'footer-1' ) ?>
				</div>

				<div class="social-icons flex">
					<?php if ( $facebook ) : ?>
														<a href="<?php echo esc_html( $facebook ); ?>">
														<?php Flux\Icon::output( 'facebook' ) ?>
													</a>
					<?php endif ?>
					<?php if ( $instagram ) : ?>
														<a href="<?php echo esc_html( $instagram ); ?>">
														<?php Flux\Icon::output( 'instagram' ) ?>
													</a>
					<?php endif ?>
					<?php if ( $youtube ) : ?>
														<a href="<?php echo esc_html( $youtube ); ?>">
														<?php Flux\Icon::output( 'youtube' ) ?>
													</a>
					<?php endif ?>
					<?php if ( $twitter ) : ?>
														<a href="<?php echo esc_html( $twitter ); ?>">
														<?php Flux\Icon::output( 'twitter' ) ?>
													</a>
					<?php endif ?>
				</div>
			</div>
			<div class="footer__column footer__right">
				<div class="footer__right--top">
					<div class="contact-item">
						<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
							class="FirstSection_footerContactIcon__yw9_s">
							<path
								d="M18.93 21.5002C18.86 21.5002 18.78 21.5002 18.71 21.4902C18.7 21.4902 18.69 21.4902 18.68 21.4902C14.21 21.4902 9.99003 19.7702 6.86003 16.6402C3.73003 13.5102 2.01003 9.27023 2.01003 4.72023C1.95003 4.09023 2.19003 3.38023 2.68003 2.84023C3.17003 2.31023 3.85003 2.00023 4.56003 2.00023H7.28003C7.87003 1.98023 8.50003 2.21023 8.97003 2.62023C10.19 3.67023 10.81 6.72023 10.54 8.01023C10.34 8.90023 9.67003 9.53023 9.12003 10.0302C10.22 11.7802 11.71 13.2602 13.46 14.3602C13.97 13.8102 14.6 13.1402 15.48 12.9502C16.78 12.6702 19.85 13.3002 20.89 14.5302C21.3 15.0102 21.51 15.6102 21.5 16.2402V18.9402C21.5 19.6402 21.2 20.3302 20.66 20.8202C20.19 21.2602 19.56 21.5002 18.93 21.5002ZM18.78 19.9902C19.14 20.0202 19.43 19.9202 19.65 19.7102C19.87 19.5002 20 19.2202 20 18.9402V16.2302C20 16.2202 20 16.2202 20 16.2102C20.01 15.9502 19.92 15.7002 19.75 15.5002C19.17 14.8102 16.73 14.2202 15.79 14.4202C15.35 14.5102 14.93 14.9702 14.52 15.4202C14.38 15.5702 14.25 15.7102 14.12 15.8502C13.88 16.0902 13.51 16.1402 13.22 15.9702C10.84 14.6202 8.86003 12.6502 7.51003 10.2702C7.34003 9.97023 7.39003 9.60023 7.63003 9.37023C7.76003 9.24023 7.91003 9.10023 8.06003 8.97023C8.51003 8.56023 8.97003 8.14023 9.06003 7.71023C9.26003 6.79023 8.67003 4.36023 7.98003 3.77023C7.79003 3.59023 7.54003 3.48023 7.28003 3.50023H4.56003C4.27003 3.50023 3.99003 3.63023 3.79003 3.85023C3.59003 4.07023 3.48003 4.36023 3.51003 4.65023C3.51003 8.87023 5.08003 12.7302 7.93003 15.5802C10.77 18.4202 14.62 19.9902 18.76 19.9902C18.77 19.9902 18.77 19.9902 18.78 19.9902Z"
								fill="#2C2C2C"></path>
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M14.2547 2.91726C14.3005 2.50558 14.6713 2.20892 15.083 2.25465C16.8076 2.44625 18.3378 3.27852 19.5301 4.4694C20.724 5.66177 21.5519 7.19372 21.7455 8.91632C21.7917 9.32794 21.4955 9.69912 21.0839 9.74538C20.6723 9.79163 20.3011 9.49544 20.2548 9.08381C20.1043 7.74378 19.4569 6.51622 18.4701 5.53073C17.4819 4.54375 16.2557 3.89416 14.9173 3.74548C14.5057 3.69975 14.209 3.32894 14.2547 2.91726ZM13.764 6.35645C13.8433 5.9499 14.2372 5.68463 14.6438 5.76395C15.4867 5.92841 16.3679 6.30715 17.0305 6.96974C17.6931 7.63232 18.0718 8.51351 18.2363 9.35645C18.3156 9.76299 18.0503 10.1569 17.6438 10.2362C17.2372 10.3155 16.8433 10.0502 16.764 9.64369C16.6408 9.01231 16.3694 8.42997 15.9698 8.0304C15.5702 7.63083 14.9879 7.35937 14.3565 7.23619C13.95 7.15687 13.6847 6.76299 13.764 6.35645Z"
								fill="#2C2C2C"></path>
						</svg>
						<a href="tel:<?php echo esc_html( $hotline ); ?>">
							<span class="txt">Hotline</span><br>
							<span class="number"><?php echo esc_html( $hotline ); ?></span>
						</a>
					</div>
					<div class="contact-item">
						<svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
							class="FirstSection_footerContactIcon__yw9_s">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M16.0004 4.8499C9.84242 4.8499 4.85039 9.84193 4.85039 15.9999V17.8166H8.00039C9.94259 17.8166 11.5171 19.391 11.5171 21.3332V25.3332C11.5171 27.2754 9.94259 28.8499 8.00039 28.8499H4.00039C3.53095 28.8499 3.15039 28.4693 3.15039 27.9999V15.9999C3.15039 8.90304 8.90353 3.1499 16.0004 3.1499C23.0972 3.1499 28.8504 8.90304 28.8504 15.9999V27.9999C28.8504 28.4693 28.4698 28.8499 28.0004 28.8499H24.0004C22.0582 28.8499 20.4837 27.2754 20.4837 25.3332V21.3332C20.4837 19.391 22.0582 17.8166 24.0004 17.8166H27.1504V15.9999C27.1504 9.84193 22.1584 4.8499 16.0004 4.8499ZM27.1504 19.5166H24.0004C22.9971 19.5166 22.1837 20.3299 22.1837 21.3332V25.3332C22.1837 26.3366 22.9971 27.1499 24.0004 27.1499H27.1504V19.5166ZM4.85039 19.5166V27.1499H8.00039C9.00371 27.1499 9.81706 26.3366 9.81706 25.3332V21.3332C9.81706 20.3299 9.00371 19.5166 8.00039 19.5166H4.85039Z"
								fill="currentColor"></path>
						</svg>
						<a href="tel:<?php echo esc_html( $hotline_2 ); ?>">
							<span class="txt">Hỗ trợ khách hàng</span><br>
							<span class="number"><?php echo esc_html( $hotline_2 ); ?></span>
						</a>
					</div>
					<div class="contact-item">
						<svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
							class="FirstSection_footerContactIcon__yw9_s">
							<path fill-rule="evenodd" clip-rule="evenodd"
								d="M14.6671 3.8499C12.191 3.8499 10.1837 5.85716 10.1837 8.33324C10.1837 10.8093 12.191 12.8166 14.6671 12.8166C17.1431 12.8166 19.1504 10.8093 19.1504 8.33324C19.1504 5.85716 17.1431 3.8499 14.6671 3.8499ZM8.48372 8.33324C8.48372 4.91827 11.2521 2.1499 14.6671 2.1499C18.082 2.1499 20.8504 4.91827 20.8504 8.33324C20.8504 11.7482 18.082 14.5166 14.6671 14.5166C11.2521 14.5166 8.48372 11.7482 8.48372 8.33324ZM26.6671 7.8499C25.7994 7.8499 25.0316 8.46301 24.8247 9.28529C24.7101 9.74054 24.2482 10.0167 23.7929 9.90212C23.3377 9.78753 23.0615 9.3256 23.1761 8.87035C23.5707 7.30272 25.0099 6.1499 26.6671 6.1499C28.668 6.1499 30.1837 7.8068 30.1837 9.77046C30.1837 11.2111 29.1808 11.9423 28.5481 12.4036C28.5324 12.415 28.517 12.4262 28.5018 12.4373C27.7721 12.9704 27.5171 13.207 27.5171 13.6666C27.5171 14.136 27.1365 14.5166 26.6671 14.5166C26.1976 14.5166 25.8171 14.136 25.8171 13.6666C25.8171 12.2849 26.8026 11.57 27.4167 11.1244C27.445 11.1039 27.4724 11.084 27.499 11.0646C28.2036 10.5499 28.4837 10.2855 28.4837 9.77046C28.4837 8.67385 27.6588 7.8499 26.6671 7.8499ZM26.6671 15.4833C27.1365 15.4833 27.5171 15.8638 27.5171 16.3333V16.3466C27.5171 16.816 27.1365 17.1966 26.6671 17.1966C26.1976 17.1966 25.8171 16.816 25.8171 16.3466V16.3333C25.8171 15.8638 26.1976 15.4833 26.6671 15.4833ZM3.15039 24.3332C3.15039 20.9183 5.91876 18.1499 9.33372 18.1499H20.0004C23.4154 18.1499 26.1837 20.9183 26.1837 24.3332V26.9999C26.1837 27.4693 25.8032 27.8499 25.3337 27.8499C24.8643 27.8499 24.4837 27.4693 24.4837 26.9999V24.3332C24.4837 21.8572 22.4765 19.8499 20.0004 19.8499H9.33372C6.85765 19.8499 4.85039 21.8572 4.85039 24.3332V26.9999C4.85039 27.4693 4.46983 27.8499 4.00039 27.8499C3.53095 27.8499 3.15039 27.4693 3.15039 26.9999V24.3332Z"
								fill="currentColor"></path>
						</svg>
						<a href="mailto:<?php echo esc_html( $email ); ?>">
							<span class="txt">Liên hệ làm đối tác</span><br>
							<span class="number"><?php echo esc_html( $email ); ?></span>
						</a>
					</div>
				</div>
				<div class="footer__right--bottom">
					<div class="column-item">
						<h3><?= esc_html__( 'HƯỚNG DẪN', 'bat-dong-san' ); ?></h3>
						<?php
						wp_nav_menu(
							[ 
								'theme_location' => 'footer-1',
								'menu_id'        => 'footer-1',
								'container'      => false,
							],
						);
						?>
					</div>
					<div class="column-item">
						<h3><?= esc_html__( 'QUY ĐỊNH', 'bat-dong-san' ); ?></h3>
						<?php
						wp_nav_menu(
							[ 
								'theme_location' => 'footer-2',
								'menu_id'        => 'footer-2',
								'container'      => false,
							],
						);
						?>
					</div>
					<div class="column-item">
						<h3><?= esc_html__( 'ĐĂNG KÝ NHẬN TIN', 'bat-dong-san' ); ?></h3>
						<div class="form_subcribe">
							<?php echo do_shortcode( '[fluentform id="2"]' ); ?>
						</div>
						<div class="certi-ft">
							<?php dynamic_sidebar( 'footer-4' ) ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="container">
			<div class="hr"></div>
			<?= wp_kses_post( sprintf( __( 'Bản quyền %d thuộc về %s. Bảo lưu mọi quyền. Phát triển bởi %s.', 'bat-dong-san' ), gmdate( 'Y' ), get_bloginfo( 'name' ), '<a href="https://FluxDigital.vn" target="_blank">FluxDigital</a>' ) ) ?>
		</div>
	</div>

	<div class="social-button">
		<div class="social-button-content social-hotline">
			<a href="tel:<?= esc_html( $hotline ); ?>" class="call-icon" rel="nofollow">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/hotline.png' ); ?>" width="30px"
					height="30px" alt="hotline">
				<div class="animated alo-circle"></div>
			</a>
		</div>
		<div class="social-button-content social-hotline">
			<a href="tel:<?= esc_html( $hotline_2 ); ?>" class="call-icon" rel="nofollow">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/hotline.png' ); ?>" width="30px"
					height="30px" alt="hotline">
				<div class="animated alo-circle"></div>
			</a>
		</div>
		<div class="social-button-content social-mess">
			<a href="<?php echo esc_html( $facebook ); ?>" class="mess-icon" rel="nofollow" target="_blank">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/mess.png' ); ?>" width="30px"
					height="30px" alt="mess">
				<div class="animated alo-circle"></div>
			</a>
		</div>
		<div class="social-button-content social-zalo">
			<a href="https://zalo.me/<?php echo esc_html( $phone_number ); ?>" class="zalo-icon" rel="nofollow" target="_blank">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/zalo.png' ); ?>" width="30px"
					height="30px" alt="zalo">
				<div class="animated alo-circle"></div>
			</a>
		</div>
		<div class="social-button-content social-zalo">
			<a href="https://zalo.me/<?php echo esc_html( $phone_number_2 ); ?>" class="zalo-icon" rel="nofollow" target="_blank">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/images/zalo.png' ); ?>" width="30px"
					height="30px" alt="zalo">
				<div class="animated alo-circle"></div>
			</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>