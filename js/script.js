jQuery(function ($) {
	let $window = window,
		$body = $('body');

	function slickSlide() {
		$('.new-home__inner').slick({
			slidesToShow: 4,
			dots: false,
			arrows: true,
			autoplay: false,
			rows: 0,
			autoplaySpeed: 4000,
			responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 600,
					settings: {
						dots: true,
						slidesToShow: 1
					}
				}
			]
		});
	};

	function toggleMenu() {
		const search = document.querySelector('.search-open'),
			search_form = document.querySelector('.header-search__form'),
			menu_toggle = document.querySelector('.toggle-menu'),
			view_menu = document.querySelector('.nav'),
			bg = document.querySelector('.bgDart');
		close_menu = document.querySelector('.close-menu');
		body = document.querySelector('body');

		search.addEventListener('click', () => {
			search_form.classList.toggle('header-search__open');
			bg.classList.toggle('open');
		});
		menu_toggle.addEventListener('click', () => {
			view_menu.classList.toggle('open');
			bg.classList.toggle('open');
			search_form.classList.remove('header-search__open');
			body.classList.toggle('menu-open');
			menu_toggle.classList.toggle('icon_close');
		});
		body.addEventListener('click', (event) => {
			const isClickInsideMenu = view_menu.contains(event.target);
			const isClickInsideMenuToggle = menu_toggle.contains(event.target);
			if (!isClickInsideMenu && !isClickInsideMenuToggle) {
				view_menu.classList.remove('open');
				bg.classList.remove('open');
				body.classList.remove('menu-open');
				menu_toggle.classList.toggle('icon_close');
			}
		});
	}

	// slickSlide();
	toggleMenu();
});
