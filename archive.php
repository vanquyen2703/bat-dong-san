<?php get_header(); ?>
<?php
$category_id = get_queried_object_id();
$category_desc = get_term_meta($category_id, 'desc_cate', true);
?>
<section class="post-show">
	<div class="container post-show__wrap">
		<div class="post-show__list">
			<?php if (have_posts()): ?>
							<div class="entries">
								<?php
								while (have_posts()) {
									the_post();
									get_template_part('template-parts/content', 'blog');
								}
								?>
							</div>
							<?php
							the_posts_pagination(
								[
									'mid_size' => 1,
									'prev_text' => __('<', 'jymec_theme'),
									'next_text' => __('>', 'jymec_theme'),
								]
							);
							?>
			<?php else: ?>
							<?php get_template_part('template-parts/content/none'); ?>
			<?php endif; ?>
		</div>
		<div class="post-show__sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>