jQuery( function ( $ ) {
	function select_district() {
		var defaultDistrict = '<option value="all">Chọn Quận/Huyện</option>';
		$( '#city' ).on( 'change', function () {
			var city = $( this ).find( 'option:selected' ).attr( 'data-ip' );
			var data = {
				action: 'display_district',
				city: city
			};
			$.post( filter.url, data ).done( function ( response ) {
				$( '#districts' ).html( response.data );
			} );
		} );
		$( '#city_rent' ).on( 'change', function () {
			var city_rent = $( this ).find( 'option:selected' ).attr( 'data-ip' );
			var data = {
				action: 'display_district_rent',
				city_rent: city_rent
			};
			$.post( filter.url, data ).done( function ( response ) {
				$( '#districts_rent' ).html( response.data );
			} );
		} );
	}

	// var $filterCheckboxes = $( 'input[type="checkbox"]' );
	// var filterFunc = function () {
	// 	var selectedFilters = {};

	// 	$filterCheckboxes.filter( ':checked' ).each( function () {

	// 		if ( !selectedFilters.hasOwnProperty( this.name ) ) {
	// 			selectedFilters[ this.name ] = [];
	// 		}

	// 		selectedFilters[ this.name ].push( this.value );
	// 	} );
	// 	var data = {
	// 		action: 'filter_sidebar',
	// 		name: selectedFilters,
	// 	};
	// 	$.post( filter.url, data ).done( function ( response ) {
	// 		console.log( response );
	// 		$( '.list-bds__post' ).html( response.data );
	// 	} );
	// };

	// $filterCheckboxes.on( 'change', filterFunc );

	select_district();
	//filter_sidebar();
} );