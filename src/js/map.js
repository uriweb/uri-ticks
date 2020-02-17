/**
 * MAP
 *
 * @package uri-ticks
 */

( function() {

	'use strict';

  window.addEventListener( 'load', init, false );

  let data;

  function init() {

    data = {
      map: document.getElementById( 'uri-tick-map' ),
      regions: {},
    }

    const regions = data.map.querySelectorAll( '.region-group g' );
    for ( let i = 0; i < regions.length; i++ ) {
			const r = regions[i];
			setupRegion( r );
      data.regions[r.getAttribute( 'id' ).replace( 'map-region-', '')] = r;
    }

  }

	function setupRegion( r ) {
		r.addEventListener( 'click', handleRegionClick.bind( null, r ), false );
	}

	function handleRegionClick( r ) {

		const className = 'active';

		for ( const key in data.regions ) {
			data.regions[key].classList.remove( className );
		}

		r.classList.add( className );

	}

})();
