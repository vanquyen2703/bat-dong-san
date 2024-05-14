jQuery(function ($) {

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
		const menu_toggle = document.querySelector('.toggle-menu');
		const view_menu = document.querySelector('.nav');
		const close_menu = document.querySelector('.close-menu');
		const body = document.querySelector('body');

		menu_toggle.addEventListener('click', () => {
			view_menu.classList.toggle('open');
			body.classList.toggle('menu-open'); 
			menu_toggle.classList.toggle('icon_close');
		});

		body.addEventListener('click', (event) => {
			const isClickInsideMenu = view_menu.contains(event.target);
			const isClickInsideMenuToggle = menu_toggle.contains(event.target);
			if (!isClickInsideMenu && !isClickInsideMenuToggle) {
				view_menu.classList.remove('open');
				body.classList.remove('menu-open'); 
				menu_toggle.classList.remove('icon_close');
			}
		});
	}

	function toggleSubmenu() {
		const nav = document.querySelector( '.nav' );
		if ( !nav ) {
			return;
		}

		const buttons = [ ...nav.querySelectorAll( '.sub-menu-toggle' ) ];

		buttons.forEach( button => {
			button.addEventListener( 'click', e => {
				e.preventDefault();
				const a = button.previousElementSibling, li = a.closest( 'li' );
				if ( li.classList.contains( 'is-open' ) ) {
					button.setAttribute( 'aria-expanded', 'false' );
					a.setAttribute( 'aria-expanded', 'false' );
				} else {
					button.setAttribute( 'aria-expanded', 'true' );
					a.setAttribute( 'aria-expanded', 'true' );
				}
				li.classList.toggle( 'is-open' );
			} );
		} );

		function closeOtherSubmenus( allButtons, currentButton ) {
			allButtons.forEach( otherButton => {
				if ( otherButton !== currentButton ) {
					const otherA = otherButton.previousElementSibling,
						otherLi = otherA.closest( 'li' );
					otherButton.setAttribute( 'aria-expanded', 'false' );
					otherA.setAttribute( 'aria-expanded', 'false' );
					otherLi.classList.remove( 'is-open' );
				}
			} );
		}
	}

	function tabFilter(){
		$('.tabs-stage .tab-item').hide();
		$('.tabs-stage div:first').show();
		$('.tabs-nav li:first').addClass('tab-active');
	
		$('.tabs-nav a').on('click', function(event){
		  event.preventDefault();
		  $('.tabs-nav li').removeClass('tab-active');
		  $(this).parent().addClass('tab-active');
		  $('.tabs-stage .tab-item').hide();
		  $($(this).attr('href')).show();
		});
	}

	// slickSlide();
	toggleMenu();
	toggleSubmenu()
	tabFilter()
});
