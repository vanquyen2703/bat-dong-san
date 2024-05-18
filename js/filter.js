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
	}

	select_district();
} );