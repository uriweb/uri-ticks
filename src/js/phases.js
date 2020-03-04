/**
 * PHASES
 *
 * @package uri-ticks
 */

( function() {
	'use strict';

	window.addEventListener( 'load', init, false );

	let data;

	function init() {
		const wrapper = document.getElementById( 'uri-tick-phases-wrapper' );
		if ( null === wrapper ) {
			return false;
		}

		data = {
			map: document.getElementById( 'uri-tick-map' ),
			regions: {},
			wrapper,
		};

		const regions = data.map.querySelectorAll( '.region-group g' );
		for ( let i = 0; i < regions.length; i++ ) {
			const r = regions[ i ];
			setupRegion( r );
			data.regions[ r.getAttribute( 'id' ).replace( 'map-region-', '' ) ] = r;
		}
	}

	function setupRegion( r ) {
		r.addEventListener( 'click', handleRegionClick.bind( null, r ), false );
	}

	function handleRegionClick( r ) {
		const active = r.getAttribute( 'id' ).replace( 'map-region-', '' );
		data.wrapper.setAttribute( 'data-active-region', active );
	}
}() );
