jQuery(function ($) {
	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

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

	function counterNumber() {
		var run = false;
		if (!$body.hasClass('page-template-home-page')) {
			return;
		}

		$window.scroll(function () {
			var top = $('.number-home').offset().top - window.innerHeight;

			if (run || $window.scrollTop() <= top) {
				return;
			}

			$('.count').each(function () {
				$(this).prop('Counter', 0).animate({
					Counter: $(this).text()
				}, {
					duration: 4000,
					easing: 'swing',
					step: function (now) {
						$(this).text(Math.ceil(now));
					}
				});
			});

			run = true;
		});
	}

	function popupLogout() {
		$('.popup-modal').magnificPopup({
			type: 'inline',
			preloader: false,
			modal: true
		});
		$(document).on('click', '.popup-modal-dismiss', function (e) {
			e.preventDefault();
			$.magnificPopup.close();
		});
	}

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

	slickSlide();
	counterNumber();
	popupLogout();
	toggleMenu();
});
