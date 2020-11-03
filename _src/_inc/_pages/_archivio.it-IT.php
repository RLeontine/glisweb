<?php

    // lingua di questo file
	$l = 'it-IT';

    // pagina dell'archivio
	$p['archivio'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'archivio' ),
	    'h1'		=> array( $l		=> 'archivio' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'archivio.html' ),
	    'macro'		=> array( '_src/_inc/_macro/_archivio.php' ),
	    'parent'		=> array( 'id'		=> NULL ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> array(	'archivio' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'archivio' ),
									'priority'	=> 930 ) )
	);

	// vista indirizzi
	$p['indirizzi.view'] = array(
		'sitemap'		=> false,
		'title'		=> array( $l		=> 'indirizzi' ),
		'h1'		=> array( $l		=> 'indirizzi' ),
		'parent'		=> array( 'id'		=> 'archivio' ),
		'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'default.view.html' ),
		'macro'		=> array( '_src/_inc/_macro/_indirizzi.view.php' ),
		'etc'		=> array( 'tabs'	=> array( 'indirizzi.view' ) ),
		'auth'		=> array( 'groups'	=> array(	'roots' ) ),
		'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'indirizzi' ),
									'priority'	=> '050' ) )
	);

	// gestione indirizzi
	$p['indirizzi.form'] = array(
		'sitemap'		=> false,
		'title'		=> array( $l		=> 'gestione' ),
		'h1'		=> array( $l		=> 'gestione' ),
		'parent'		=> array( 'id'		=> 'indirizzi.view' ),
		'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'indirizzi.form.html' ),
		'macro'		=> array( '_src/_inc/_macro/_indirizzi.form.php' ),
		'auth'		=> array( 'groups'	=> array(	'roots' ) ),
		'etc'		=> array( 'tabs'	=> array( 'indirizzi.form',
												'indirizzi.form.associazioni' ) )
		
	);

	// gestione associazione indirizzi
	$p['indirizzi.form.associazioni'] = array(
		'sitemap'		=> false,
		'title'		=> array( $l		=> 'associazione' ),
		'h1'		=> array( $l		=> 'associazione' ),
		'parent'		=> array( 'id'		=> 'indirizzi.view' ),
		'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'indirizzi.form.associazioni.html' ),
		'macro'		=> array( '_src/_inc/_macro/_indirizzi.form.associazioni.php' ),
		'etc'		=> array( 'tabs'	=> $p['indirizzi.form']['etc']['tabs'] ),
		'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);
	
?>
