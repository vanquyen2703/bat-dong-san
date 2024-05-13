<?php


$categories = get_the_category( $post->ID );

global $count;
?>
<article <?php post_class( 'news__item' ); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( $count === 1 ? 'medium_large' : 'post-thumbnail', [ 'alt' => get_the_title(), 'loading' => 'lazy' ] ) ?>
		</a>
	</div>
	<div class="entry-content">
		<h3><a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a></h3>
		<div class="content">
			<?php the_excerpt(); ?>
		</div>
		<div class="entry-date">
			<p class="folder">
				<!-- < ?= Icon::output('folder') ?> -->
				<a href="<?= get_category_link( $categories[0]->term_id ) ?>">
					<?= esc_html( $categories[0]->cat_name ); ?>
				</a>
			</p>
			<p class="date">
				<?= get_the_date( 'd-m-Y' ); ?>
			</p>
		</div>
	</div>
</article>