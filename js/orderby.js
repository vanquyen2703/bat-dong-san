jQuery( function ( $ ) {
	var clickEvent = 'ontouchstart' in window ? 'touchstart' : 'click';

	let $window = window,
		$body = $( 'body' );

	function orderBy() {
		$( '#orderby' ).on( 'change', function () {
			var order = $( this ).val();
			if ( order === 'asc' ) {
				sortProductsPriceAscending();
			} else if ( order === 'desc' ) {
				sortProductsPriceDescending();
			} else {
				$( ".list-bds__show" ).load( location.href + " .list-bds__show>*", "" );
			}
		} );
	}

	function grid_product() {
		var to = "list";
		$( ".grid" ).click( function () {
			$( ".grid" ).removeClass( "active" );
			$( this ).addClass( "active" );
			var view = $( this ).attr( 'data-grid' );
			console.log( view );
			switch_view( view );
		} );
	}
	function switch_view( to ) {
		var from = ( to == 'list' ) ? 'grid' : 'list';
		var $product_show = $( '.list-bds__show' );
		$product_show.removeClass( from + '-view' ).addClass( to + '-view' );
	}

	function sortProductsPriceAscending() {
		var gridItems = $( '.product-post' );
		gridItems.sort( function ( a, b ) {
			return $( '.product-card', a ).data( "price" ) - $( '.product-card', b ).data( "price" );
		} );
		console.log( gridItems );
		$( ".list-product__show" ).append( gridItems );
	}

	function sortProductsPriceDescending() {
		var gridItems = $( '.product-post' );
		gridItems.sort( function ( a, b ) {
			return $( '.product-card', b ).data( "price" ) - $( '.product-card', a ).data( "price" );
		} );
		$( ".list-product__show" ).append( gridItems );
	}

	var $filterCheckboxes = $( 'input[type="checkbox"]' );
	var filterFunc = function () {

		var selectedFilters = {};

		$filterCheckboxes.filter( ':checked' ).each( function () {

			if ( !selectedFilters.hasOwnProperty( this.name ) ) {
				selectedFilters[ this.name ] = [];
			}

			selectedFilters[ this.name ].push( this.value );
		} );
		// create a collection containing all of the filterable elements
		var $filteredResults = $( '.bds-post' );

		// loop over the selected filter name -> (array) values pairs
		$.each( selectedFilters, function ( name, filterValues ) {
			console.log( filterValues );
			// filter each .flower element
			$filteredResults = $filteredResults.filter( function () {

				var matched = false,
					currentFilterValues = $( this ).data( 'category' ).split( ' ' );
				    console.log( currentFilterValues );

				// loop over each category value in the current .flower's data-category
				$.each( currentFilterValues, function ( _, currentFilterValue ) {
					console.log( currentFilterValue );
					if ( $.inArray( currentFilterValue, filterValues ) != -1 ) {
						matched = true;
						return false;
					}
				} );
				// if matched is true the current .flower element is returned
				return matched;

			} );
		} );
		$( '.bds-post' ).hide().filter( $filteredResults ).show();
	};

	$filterCheckboxes.on( 'change', filterFunc );

	orderBy();
	grid_product();
} );
