<?php

    $seCliente = ( empty( $_REQUEST['anagrafica']['se_cliente'] ) )         ? false : true;
    $seLead = ( empty( $_REQUEST['anagrafica']['se_lead'] ) )               ? false : true;
    $seProspect = ( empty( $_REQUEST['anagrafica']['se_prospect'] ) )       ? false : true;
    $seFornitore = ( empty( $_REQUEST['anagrafica']['se_fornitore'] ) )     ? false : true;
    $seCollaboratore = ( empty( $_REQUEST['anagrafica']['se_collaboratore'] ) )     ? false : true;

    if( max( [ $seCliente, $seLead, $seProspect ] ) != true ) {
        $ct['page']['etc']['tabs'] = array_diff(
            $ct['page']['etc']['tabs'],
            ['anagrafica.form.cliente','anagrafica.form.offerte']
        );
    }

    if( max( [$seCliente, $seLead, $seProspect, $seFornitore ] ) != true ) {
        $ct['page']['etc']['tabs'] = array_diff(
            $ct['page']['etc']['tabs'],
            ['anagrafica.form.amministrazione']
        );
    }

    if( max( [ $seFornitore ] ) != true ) {
        $ct['page']['etc']['tabs'] = array_diff(
            $ct['page']['etc']['tabs'],
            ['anagrafica.form.fornitore']
        );
    }

    if( max( [ $seCollaboratore ] ) != true ) {
        $ct['page']['etc']['tabs'] = array_diff(
            $ct['page']['etc']['tabs'],
            ['anagrafica.form.collaboratore']
        );
    }
