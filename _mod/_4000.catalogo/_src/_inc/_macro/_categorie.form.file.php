<?php

    /**
     * macro form pagine
     *
     *
     *
     * -# definizione della tabella del modulo
     * -# popolazione delle tendine
     *
     *
     *
     *
     *
     *
     * @todo documentare
     *
     * @file
     *
     */

    // tabella gestita
	$ct['form']['table'] = 'categorie_prodotti';

    // sotto tabella gestita
	$ct['form']['subtable'] = 'file';

    // tendina ruolo immagini
	$ct['etc']['select']['ruoli_file'] = mysqlCachedIndexedQuery(
	    $cf['cache']['index'],
	    $cf['memcache']['connection'],
	    $cf['mysql']['connection'],
	    'SELECT id, __label__ FROM ruoli_file_view  '
	);

    // macro di default
	require DIR_SRC_INC_MACRO . '_default.form.php';

?>