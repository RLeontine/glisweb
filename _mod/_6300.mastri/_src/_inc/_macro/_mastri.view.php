<?php

    /**
     *
     *
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

    // tabella della vista
    $ct['view']['table'] = 'mastri';
    
    // id della vista
    $ct['view']['id'] = md5( $ct['view']['table'] );

    // pagina per la gestione degli oggetti esistenti
	$ct['view']['open']['page'] = 'mastri.form';

    // campi della vista
	$ct['view']['cols'] = array(
        'id' => '#',
        '__label__' => 'nome'
	);

    // stili della vista
	$ct['view']['class'] = array(
        'id' => 'text-left d-md-table-cell',
        '__label__' => 'text-left',
    );

    // macro di default
	require DIR_SRC_INC_MACRO . '_default.view.php';

   