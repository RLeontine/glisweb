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

    // debug
	// print_r( $_SESSION );

    // tabella della vista
    $ct['view']['table'] = 'task';
    
    // id della vista
    $ct['view']['id'] = md5( $ct['view']['table'] );

    // pagina per la gestione degli oggetti esistenti
	$ct['view']['open']['page'] = 'task.form';

     // campi della vista
	$ct['view']['cols'] = array(
	    'id' => '#',
	    'pianificazione' => 'pianificato',
	    'priorita' => 'priorità',
	    'nome' => 'attività',
	    'cliente' => 'da fare per',
	    'responsabile' => 'assegnato a',
	    'progresso' => 'ore',
	    'completato' => 'stato',
	    'id_priorita' => 'id_priorita'
	);

    // stili della vista
	$ct['view']['class'] = array(
	    'id' => 'd-none d-md-table-cell',
	    'id_priorita' => 'd-none',
	    'pianificazione' => 'text-left no-wrap',
	    'cliente' => 'text-left d-none d-md-table-cell',
	    'nome' => 'text-left',
	    'priorita' => 'text-left',
	    'responsabile' => 'text-left no-wrap d-none d-sm-table-cell',
	    'progresso' => 'text-right no-wrap d-none d-sm-table-cell',
	    'completato' => 'text-left'
	);

    // inclusione filtri speciali
	$ct['etc']['include']['filters'] = 'inc/task.view.filters.html';

    // tendina clienti
	$ct['etc']['select']['clienti'] = mysqlCachedQuery(
        $cf['memcache']['connection'], 
        $cf['mysql']['connection'], 
        'SELECT id, __label__ FROM anagrafica_view WHERE se_interno = 1 OR se_cliente = 1');

    // preset filtro custom task completati
	if( ! isset( $_REQUEST['__view__'][ $ct['view']['id'] ]['__filters__']['completato']['EQ'] ) ) {
	    $_REQUEST['__view__'][ $ct['view']['id'] ]['__filters__']['completato']['EQ'] = 0;
    }
    
    // preset ordinamento
	if( ! isset( $_REQUEST['__view__'][ $ct['view']['id'] ]['__sort__'] ) ) {
	    $_REQUEST['__view__'][ $ct['view']['id'] ]['__sort__']['pianificazione'] = 'ASC';
    }
    
    if( ! isset( $_REQUEST['__view__'][ $ct['view']['id'] ]['__extra__']['assegnato'] ) || $_REQUEST['__view__'][ $ct['view']['id'] ]['__extra__']['assegnato'] == '__me__' ) {
		$_REQUEST['__view__'][ $ct['view']['id'] ]['__extra__']['assegnato'] = '__me__';
		if( isset( $_SESSION['account']['id_anagrafica'] ) ) {
		    $_REQUEST['__view__'][ $ct['view']['id'] ]['__filters__']['id_responsabile']['EQ'] = $_SESSION['account']['id_anagrafica'];
		}
	    } elseif( $_REQUEST['__view__'][ $ct['view']['id'] ]['__extra__']['assegnato'] == '__nessuno__' ) {
		$_REQUEST['__view__'][ $ct['view']['id'] ]['__extra__']['assegnato'] = '__nessuno__';
		if( isset( $_SESSION['account']['id_anagrafica'] ) ) {
		    $_REQUEST['__view__'][ $ct['view']['id'] ]['__filters__']['id_responsabile']['NL'] = true;
		}
	}
    
    // macro di default
    require DIR_SRC_INC_MACRO . '_default.view.php';
    
    foreach ( $ct['view']['data'] as &$row ){
	    if( $row['completato'] == 2 ){ $row['completato']='completato';  }
	    else {
	    if( $row['completato'] == 1 ){ $row['completato']='in revisione';  }
	    else { $row['completato']='';  }
	    }
	}

   