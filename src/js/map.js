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

		const wrapper = document.getElementById( 'uri-tick-map-wrapper' );
		if ( null === wrapper ) {
			return false;
		}

    data = {
      map: document.getElementById( 'uri-tick-map' ),
			months: [ 'january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december', ],
      regions: {},
			slider: document.getElementById( 'uri-tick-map-timeframe' ),
			species: {},
			wrapper,
    }

		data.wrapper.setAttribute( 'data-active-region', '' );
    const regions = data.map.querySelectorAll( '.region-group g' );
    for ( let i = 0; i < regions.length; i++ ) {
			const r = regions[i];
			setupRegion( r );
      data.regions[r.getAttribute( 'id' ).replace( 'map-region-', '')] = r;
    }

		const species = data.wrapper.querySelectorAll( '.species-region' );
		for ( let i = 0; i < species.length; i++ ) {

			const s = species[i];
			const activity = s.querySelectorAll( 'ul' );

			const alist = {};
			for ( let j = 0; j < activity.length; j++ ) {
				const a = activity[j];
				alist[a.getAttribute( 'class' ).replace( 'activity-', '' )] = a;
			}

			data.species[s.getAttribute( 'id' ).replace( 'species-region-', '' )] = {
				el: s,
				activity: alist,
			};

    }

		const labels = data.wrapper.querySelectorAll( '.time-slider-label' );
		for ( let i = 0; i < labels.length; i++ ) {
			setupLabel( labels[i] );
		}

		data.selectors = {
			region: data.wrapper.querySelector( '.species-menu-select-region select' ),
			month: data.wrapper.querySelector( '.species-menu-select-month select' ),
		};

		data.selectors.region.addEventListener( 'change', handleSelectRegion, false );
		data.selectors.month.addEventListener( 'change', handleSelectMonth, false );

		data.slider.addEventListener( 'change', function() {
			const v = data.slider.value;
			changeTimeframe( v );
		}, false );
		changeTimeframe( data.slider.value );

  }

	function setupRegion( r ) {
		r.addEventListener( 'click', handleRegionClick.bind( null, r ), false );
	}

	function handleRegionClick( r ) {
		const active = r.getAttribute( 'id' ).replace( 'map-region-', '' );
		data.wrapper.setAttribute( 'data-active-region', active );
		data.selectors.region.value = active;
	}

	function setupLabel( l ) {
		const n = l.getAttribute( 'data-label-name' );
		const i = data.months.indexOf( n ) + 1;
		l.addEventListener( 'click', function() {
			data.slider.value = i;
			changeTimeframe( i );
		}, false );
	}

	function changeTimeframe( i ) {
		const value = i * 1 - 1;
		data.wrapper.setAttribute( 'data-active-month', data.months[value] );
		data.selectors.month.value = data.months[value];
	}

	function handleSelectRegion() {
		const r = data.selectors.region.value;
		data.wrapper.setAttribute( 'data-active-region', r );
	}

	function handleSelectMonth() {
		const m = data.selectors.month.value;
		const i = data.months.indexOf( m ) + 1;
		data.slider.value = i;
		changeTimeframe( i );
	}

})();
