<?php

    /**
     *
     *
     *
     * @todo documentare
     * @todo filtrare la tendina dei gruppi in base all'account connesso
     *
     * @file
     *
     */

    // tabella gestita
    $ct['form']['table'] = 'mastri';
    
    
    // tabella della vista
	$ct['view']['table'] = '__report_mastri__';
    $ct['view']['data']['__report_mode__'] = 1;

    // id della vista
    $ct['view']['id'] = md5( $ct['view']['table'] );


    // pagina per la gestione degli oggetti esistenti
	$ct['view']['open']['page'] = 'documenti.articoli.form';
    $ct['view']['open']['table'] = 'documenti_articoli';
    $ct['view']['open']['field'] = 'id_riga';

    // campi della vista
	$ct['view']['cols'] = array(
	    'id' => '#',
        'data_lavorazione' => 'data',
	    'descrizione' => 'riga',
        'id_articolo' => 'articolo',
        'quantita' => 'quantità',
        'importo' => 'importo',
        'id_riga' => 'id_riga',
        'cliente' => 'cliente',
        'emittente' => 'emittente',
        'id_tipologia' => 'id_tipologia'
	);

    // stili della vista
	$ct['view']['class'] = array(
	    'id' => 'd-none',
        'id_riga' => 'd-none',
        'id_tipologia' => 'd-none',
        'data_lavorazione' => 'text-left',
	    'descrizione' => 'text-left',
        'id_articolo' => 'text-left',
        'importo' => 'text-right',
        'cliente' => 'text-left',
        'emittente' => 'text-left'
	);

    $ct['etc']['include']['filters'] = 'inc/documenti.articoli.view.filters.html';

        // tendina categoria
	$ct['etc']['select']['tipologie_documenti'] = mysqlCachedQuery(
	    $cf['memcache']['connection'],
	    $cf['mysql']['connection'],
	    'SELECT id, __label__ FROM tipologie_documenti_view'
	);

     // tendina mittenti
	$ct['etc']['select']['id_emittenti'] = mysqlCachedIndexedQuery(
	    $cf['memcache']['index'],
	    $cf['memcache']['connection'],
	    $cf['mysql']['connection'],
	    'SELECT id, __label__ FROM anagrafica_view WHERE se_azienda_gestita = 1'
	);

    // tendina destinatari
	$ct['etc']['select']['id_destinatari'] = mysqlCachedIndexedQuery(
	    $cf['memcache']['index'],
	    $cf['memcache']['connection'],
	    $cf['mysql']['connection'],
	    'SELECT id, __label__ FROM anagrafica_view WHERE se_cliente = 1'
	);

    // tendina articoli
	$ct['etc']['select']['id_articoli'] = mysqlCachedIndexedQuery(
	    $cf['memcache']['index'],
	    $cf['memcache']['connection'],
	    $cf['mysql']['connection'],
	    'SELECT id, __label__ FROM articoli_view'
	);

    // preset filtro custom progetti aperti
	$ct['view']['__restrict__']['id']['EQ'] = $_REQUEST[ $ct['form']['table'] ]['id'];
  
    // gestione default
	require DIR_SRC_INC_MACRO . '_default.view.php';

    // trasformazione icona attivo/inattivo
	///foreach( $ct['view']['data'] as &$row ) {
	//}

    // macro di default
	require DIR_SRC_INC_MACRO . '_default.form.php';
