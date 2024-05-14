<?php
namespace Flux;

class TemplateHooks
{
	public function __construct()
	{
		add_action('haston_ordering', [$this, 'orderby']);
	}

	public function orderby()
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'date';
		$orderby_options = apply_filters(
			'haston_product_orderby',
			array(
				'asc'  => __('Giá thấp đến cao', 'bat-dong-san'),
				'desc' => __('Giá cao đến thấp', 'bat-dong-san'),
			),
		);
		?>
		<div class="haston-ordering">
			<div class="select-wrap">
				<p>
					<?= esc_html__('Sắp xếp theo: ', 'bat-dong-san'); ?>
				</p>
				<select name="orderby" class="orderby" id="orderby">
					<option value="#" selected>
						<?= esc_html__('Lọc bất động sản', 'bat-dong-san'); ?>
					</option>
					<?php foreach ($orderby_options as $id => $name): ?>
											<option value="<?php echo esc_attr($id); ?>">
												<?php echo wp_kses_post(sprintf(__('%s', 'bat-dong-san'), $name)); ?>
											</option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="select-wrap show-grid">
				<div id="grid" class="grid active" data-grid="grid">
					<img src="<?= get_template_directory_uri() . "/images/grid.svg"; ?>" alt="Grid">
				</div>
				<div id="grid" class="grid" data-grid="list">
					<img src="<?= get_template_directory_uri() . "/images/list.svg"; ?>" alt="List">
				</div>
			</div>
		</div>
		<?php
	}

}