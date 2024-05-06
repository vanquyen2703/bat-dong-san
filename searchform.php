<?php // phpcs:disable ?>
<form action="/" method="get" class="search-form">
	<input type="hidden" name="post_type" value="post">
	<input type="text" name="s" placeholder="<?php esc_attr_e( 'Tìm kiếm...', 'bat-dong-san' ) ?>">
	<button type="submit"><svg>
			<use xlink:href="#icon-search"></use>
		</svg></button>
</form>