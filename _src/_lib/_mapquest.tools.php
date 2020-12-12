<?php

    /**
     * libreria per la geolocalizzazione tramite Mapquest
     *
     *
     *
     *
     *
     * @todo finire di documentare
     *
     * @file
     *
     */

    /**
     *
     *
     *
     * @todo documentare
     *
     */
    function mapquestGetCoords( $key, $civico, $indirizzo, $citta, $stato, $url = 'http://www.mapquestapi.com/geocoding/v1/address' ) {

	    if( ! empty( $key ) ) {

		    $result = restCall(
			$url . '?key=' . $key,
			METHOD_POST,
			array(
			    'location' => $civico . ', ' . $indirizzo . ', ' . $citta . ', ' . $stato
			)
		    );

		    // print_r( $result );

		    // writeToFile( $key . PHP_EOL . print_r( $result, true ), 'var/log/mapquest/' . string2urlRewrite( $civico . ', ' . $indirizzo . ', ' . $citta . ', ' . $stato ) . '.log' );

		    // TODO qui loggare in caso di problemi

		    foreach( $result['results'][0]['locations'] as $location ) {
			if( $location['geocodeQuality'] == 'POINT' || $location['geocodeQuality'] == 'ADDRESS' || $location['geocodeQuality'] == 'STREET' ) {
#			if( $location['geocodeQuality'] == 'POINT' || $location['geocodeQuality'] == 'ADDRESS' ) {
			    $qResults[ substr( $location['geocodeQualityCode'], 2, 3 ) ] = $location;
			}
		    }

		    if( ! empty( $qResults ) ) {

			ksort( $qResults );

			// print_r( $qResults );

			$bResult = array_shift( $qResults );

			// return $result['results'][0]['locations'][0]['latLng'];
			return array_merge( $bResult['latLng'], array( 'cap' => $bResult['postalCode'] ) );

		    } else {

			return NULL;

		    }

	    } else {

		logWrite( 'nessuna chiave Mapquest impostata per lo stage corrente', 'geocode', LOG_CRIT );

		return false;

	    }

    }

    /**
     *
     *
     *
     * @todo implementare
     * @todo documentare
     *
     */
    function mapquestGetCachedCoords( $m, $key, $civico, $indirizzo, $citta, $stato, $t = MEMCACHE_DEFAULT_TTL, $url = 'http://www.mapquestapi.com/geocoding/v1/address' ) {

	// calcolo la chiave della query
	    $k = 'MAPQUEST_' . md5( $civico . $indirizzo . $citta . $stato );

	// cerco il valore in cache
	    $r = memcacheRead( $m, $k );

	// se il valore non è stato trovato
	    if( empty( $r ) || $t === false ) {
		$r = mapquestGetCoords( $key, $civico, $indirizzo, $citta, $stato, $url );
		memcacheWrite( $m, $k, $r, $t );
	    }

	// restituisco il risultato
	    return $r;

    }
