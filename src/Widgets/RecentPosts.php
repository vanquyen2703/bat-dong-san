<?php
namespace Jymec\Widgets;

use Jymec\Icon;

class RecentPosts extends \WP_Widget {
	protected $defaults;

	public function __construct() {
		$this->defaults = array(
			'title' => esc_html__( 'Title', 'jymec_theme' ),
			'id'    => 2,
		);
		parent::__construct(
			'jymec_theme-recent-posts',
			esc_html__( 'Recent Posts 1', 'jymec_theme' )
		);
	}

	/**
	 * How to display the widget on the screen.
	 *
	 * @param array $args     Widget parameters.
	 * @param array $instance Widget instance.
	 */
	public function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		$titlewd  = apply_filters( 'widget_title', $instance[ 'title' ] );
		$id       = apply_filters( 'widget_id', $instance[ 'id' ] );
		$args     = [
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'post_status'    => 'publish',
			'no_found_rows'  => true,
		];
		$query    = new \WP_Query( $args );
		?>
		<!--widget content-->
		<aside class="widget news-sidebar">
			<p class="widget-title">
				<?= esc_html( $titlewd ); ?>
			</p>
			<div class="news-sidebar__wrap">
				<?php
				$i = 1;
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						$categories = get_the_category();
						?>
						<div class="news-sidebar__item">
							<div class="entry-thumbnail">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
							</div>
							<div class="entry-content">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
								<div class="entry-date">
									<p class="folder">
										<?php Icon::output( 'folder' ); ?>
										<a href="<?= get_category_link( $categories[ 0 ]->term_id ); ?>">
											<?= esc_html( $categories[ 0 ]->cat_name ); ?>
										</a>
									</p>
								</div>
							</div>
						</div>
						<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</aside>
		<?php
	}
	/**
	 * Update the widget settings.
	 *
	 * @param array $new_instance New widget instance.
	 * @param array $old_instance Old widget instance.
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance           = $old_instance;
		$instance[ 'title' ]  = sanitize_text_field( $new_instance[ 'title' ] );
		$instance[ 'number' ] = absint( $new_instance[ 'number' ] );
		$instance[ 'id' ]     = absint( $new_instance[ 'id' ] );
		return $instance;
	}

	/**
	 * Widget form.
	 *
	 * @param array $instance Widget instance.
	 *
	 * @return void
	 */
	public function form( $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
				<?php esc_html_e( 'Title:', 'jymec_theme' ); ?>
			</label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
				name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
				value="<?php echo esc_attr( $instance[ 'title' ] ); ?>">
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>">
				<?php esc_html_e( 'ID category:', 'jymec_theme' ); ?>
			</label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'id' ) ); ?>"
				name="<?php echo esc_attr( $this->get_field_name( 'id' ) ); ?>"
				value="<?php echo absint( $instance[ 'id' ] ); ?>">
		</p>
		<?php
	}

}
