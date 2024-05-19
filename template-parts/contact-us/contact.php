<section class="contact">
	<div class="container">
		<div class="contact__wrapper">
		<?php
		if ( function_exists( 'yoast_breadcrumb' ) ) {
			yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
		}
		?>
		<h1 class="title-page"><?php echo get_the_title(); ?></h1>
		<?php echo the_content(); ?>
		</div>
	</div>
</section>