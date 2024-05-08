<?php get_header(); ?>
<?php
$category_id = get_queried_object_id();
$category_desc = get_term_meta($category_id, 'desc_cate', true);
$category_bg_image_id = get_term_meta($category_id, 'anh_background_danh_muc', true);
$category_bg_image_id_mb = get_term_meta($category_id, 'anh_background_danh_muc_mb', true);
$image = wp_get_attachment_image_src($category_bg_image_id, 'full');
$image_mb = wp_get_attachment_image_src($category_bg_image_id_mb, 'full');

if (!empty($image_mb)):
	$image_url = $image_mb;
else:
	$image_url = $image;
endif;
?>
<section class="banner">
	<img class="banner--desk" src="<?php echo $image[0] ?>" width="100%" height="655" alt="Sơn JYMEC">
	<img class="banner--mb" src="<?php echo $image_url[0] ?>" width="100%" height="auto" alt="Sơn JYMEC">
	<div class="banner__wrapper">
		<div class="banner__content">
			<h1 class="banner__content--heading">
				<?php the_archive_title(); ?>
			</h1>
			<div class="banner__content--desc">
				<?php echo wp_kses_post(wpautop($category_desc)); ?>
			</div>
		</div>
	</div>
</section>
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