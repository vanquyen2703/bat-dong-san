<?php
namespace Flux;

class TemplateHooks {
	public function __construct() {
		add_action( 'haston_ordering', [ $this, 'orderby' ] );
	}

	public function orderby() {
		?>
				<div class="haston-ordering">
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