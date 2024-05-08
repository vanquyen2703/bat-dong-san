<?php
get_header(); ?>
<?php
$categories = get_the_category($post->ID);
?>
<?php get_template_part('template-parts/single/banner'); ?>
<article <?php post_class('single-blog') ?> id="<?php the_ID() ?>">
	<div class="container single-blog__wrap">
		<div class="single-blog__content">
			<div class="single-content">
				<?php the_title('<h1>', '</h1>'); ?>
				<div class="single-blog__author">
					<ul>
						<li>
							<!-- < ?php Icon::output('folder') ?> -->
							<a
								href="<?= get_category_link($categories[0]->term_id) ?>">
								<?= esc_html($categories[0]->cat_name); ?>
							</a>
						</li>
						<li>
							<!-- < ?php Icon::output('time'); ?> -->
							<?= get_the_date('M j, Y'); ?>
						</li>
					</ul>
				</div>

				<?php the_content(); ?>
			</div>
			<div class="single-tag">
				<div class="tag"><p>Tags:</p> <?php the_tags('<ul><li>', '</li><li>', '</li></ul>'); ?></div>
				<div class="share">Chia sẻ bài viết:
					<ul>
						<li><a target="_blank" rel="noopener"
								href="https://facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
								<!-- < ?php Icon::output('facebook') ?> -->
							</a></li>
						<li><a target="_blank" rel="noopener"
								href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>">
								<!-- < ?php Icon::output('twitter') ?> -->
							</a></li>
						<li><a target="_blank" rel="noopener"
								href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>">
								<!-- < ?php Icon::output('linkedin') ?> -->
							</a></li>
					</ul>
				</div>
			</div>
			<?php get_template_part('template-parts/single/related-posts') ?>
			<?php
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;
			?>
		</div>
		<div class="single-blog__sidebar">
			<?php dynamic_sidebar() ?>
		</div>
	</div>

</article>

<?php get_footer(); ?>