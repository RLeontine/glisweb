<?php

    /**
     *
     *
     *
     * @todo documentare
     * 
     *
     * @file
     *
     */


    // tendina contratti
        $ct['etc']['select']['contratti'] = mysqlCachedIndexedQuery(
        $cf['cache']['index'],
        $cf['memcache']['connection'],
        $cf['mysql']['connection'],
        'SELECT id, __label__ FROM contratti_view'
    );

    // tendina turni
    foreach( range( 1, 9 ) as $turno ) {
        $ct['etc']['select']['turni'][] =  array( 'id' => $turno, '__label__' => $turno );
    }

    //tendina periodi
    $ct['etc']['select']['periodi'] = array(
    //    array( 'id' => 0, '__label__' => 'non si ripete' ),
    //    array( 'id' => 1, '__label__' => 'giorno' ),
        array( 'id' => 2, '__label__' => 'settimana' ),
        array( 'id' => 3, '__label__' => 'mese' ),
    //    array( 'id' => 4, '__label__' => 'anno' )
    );

  	//tendina giorni della settimana
  	$ct['etc']['select']['giorni_settimana'] = array(
		array( 'id' => 0, '__label__' => 'lunedì' ),
		array( 'id' => 1, '__label__' => 'martedì' ),
		array( 'id' => 2, '__label__' => 'mercoledì' ),
		array( 'id' => 3, '__label__' => 'giovedì' ),
		array( 'id' => 4, '__label__' => 'venerdì' ),
		array( 'id' => 5, '__label__' => 'sabato' ),
		array( 'id' => 6, '__label__' => 'domenica' )
    );
     
    

