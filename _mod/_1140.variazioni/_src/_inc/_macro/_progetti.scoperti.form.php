<?php

    /**
     *
     * form che calcola e mostra l'elenco dei candidati sostituti per l'attività corrente
     *
     *
     *
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

    // tabella gestita
	$ct['form']['table'] = 'progetti';

    // se ho un progetto, estraggo le attività scoperte ad esso relative e per ciascuna calcolo l'elenco dei sostituti
    if( !empty( $_REQUEST[ $ct['form']['table'] ]['id'] ) ){

        // richiamo la funzione che ritorna l'array degli operatori coi punteggi
        $ct['etc']['operatori'] = elencoSostitutiProgetto( $_REQUEST[ $ct['form']['table'] ]['id'] );

    }

     // modal per la conferma di invio richiesta sostituzione
     $ct['page']['contents']['metro'][NULL][] = array(
        'modal' => array('id' => 'richiesta', 'include' => 'inc/progetti.scoperti.form.modal.richiesta.html' )
    );
    
	// macro di default
	require DIR_SRC_INC_MACRO . '_default.form.php';

    require DIR_SRC_INC_MACRO . '_default.tools.php';

   