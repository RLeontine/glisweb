<?php

    // lingua di questo file
	$l = 'it-IT';
	$m = '_mod/_0600.password/';

    // reset password
	$p['password.reset'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'reimpostazione password' ),
	    'h1'		=> array( $l		=> 'reimpostazione password' ),
	    'parent'		=> array( 'id'		=> NULL ),
	    'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'password.reset.html' ),
	    'macro'		=> array( $m . '_src/_inc/_macro/_password.reset.php' )
	);

    // debug
    // die();
