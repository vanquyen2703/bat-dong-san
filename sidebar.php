<?php
if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside class="sidebar">
	<?php dynamic_sidebar( 'sidebar' ); ?>

	<section class="widget social">
		<h3 class="widget-title"><?php esc_html_e( 'Theo dõi chúng tôi', 'bat-dong-san' ) ?></h3>
		<div class="social-icons flex">
			<?php if ( FluxDigital\Settings::get( 'facebook' ) ) : ?>
					<a href="<?= esc_url( FluxDigital\Settings::get( 'facebook' ) ) ?>"><svg>
							<use xlink:href="#icon-facebook"></use>
						</svg></a>
			<?php endif ?>
			<?php if ( FluxDigital\Settings::get( 'instagram' ) ) : ?>
					<a href="<?= esc_url( FluxDigital\Settings::get( 'instagram' ) ) ?>"><svg>
							<use xlink:href="#icon-instagram"></use>
						</svg></a>
			<?php endif ?>
			<?php if ( FluxDigital\Settings::get( 'twitter' ) ) : ?>
					<a href="<?= esc_url( FluxDigital\Settings::get( 'twitter' ) ) ?>"><svg>
							<use xlink:href="#icon-twitter"></use>
						</svg></a>
			<?php endif ?>
			<?php if ( FluxDigital\Settings::get( 'youtube' ) ) : ?>
					<a href="<?= esc_url( FluxDigital\Settings::get( 'youtube' ) ) ?>"><svg>
							<use xlink:href="#icon-youtube"></use>
						</svg></a>
			<?php endif ?>
		</div>
	</section>
</aside>