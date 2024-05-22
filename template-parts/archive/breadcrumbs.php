<div class="breadcrumbs">
	<div class="breadcrumb__wrap">
		<div class="container">
		<h1 class="archive-title">
			<?php
			$current_term = get_queried_object();
			if ( is_archive() && ! is_tax() && ! is_category() && ! is_tag() ) {
				echo post_type_archive_title( '', false );
			} elseif ( is_tax() || is_category() || is_tag() ) {
				echo esc_html( $current_term->name );
			}
			?>
		</h1>
			<?php
			if ( function_exists( 'yoast_breadcrumb' ) ) {
				yoast_breadcrumb( '<div id="breadcrumbs">', '</div>' );
			}
			?>
		</div>
	</div>
</div>