<div class="breadcrumbs">
	<div class="breadcrumb__wrap">
		<div class="container">
			<h1 class="archive-title">
					<?php
					$current_term = get_queried_object();
					if ( is_archive() ) {
						echo $current_term->label;
					} elseif ( is_tax() || is_category() || is_tag() ) {
						echo $current_term->name;
						var_dump( $current_term->name );
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