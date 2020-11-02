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

	// vista indirizzi archivio
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

	// gestione indirizzi archivio
	$p['indirizzi.form'] = array(
		'sitemap'		=> false,
		'title'		=> array( $l		=> 'gestione' ),
		'h1'		=> array( $l		=> 'gestione' ),
		'parent'		=> array( 'id'		=> 'indirrizzi.view' ),
		'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'indirizzi.form.html' ),
		'macro'		=> array( '_src/_inc/_macro/_indirizzi.form.php' ),
		'auth'		=> array( 'groups'	=> array(	'roots' ) ),
		'etc'		=> array( 'tabs'	=> array( 'indirizzi.form',
												'indirizzi.form.associazione' ) )
		
	);

	// gestione associazione indirizzi
	$p['indirizzi.form.associazione'] = array(
		'sitemap'		=> false,
		'title'		=> array( $l		=> 'associazione' ),
		'h1'		=> array( $l		=> 'associazione' ),
		'parent'		=> array( 'id'		=> 'indirizzi.view' ),
		'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'indirizzi.form.associazione.html' ),
		'macro'		=> array( '_src/_inc/_macro/_indirizzi.form.associazione.php' ),
		'etc'		=> array( 'tabs'	=> $p['indirizzi.form']['etc']['tabs'] ),
		'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);
	
    // pagina degli strumenti
	$p['strumenti'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'strumenti' ),
	    'h1'		=> array( $l		=> 'strumenti' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_athena/', 'schema' => 'strumenti.html' ),
	    'macro'		=> array( '_src/_inc/_macro/_strumenti.php' ),
	    'parent'		=> array( 'id'		=> NULL ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> array(	'strumenti' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'strumenti' ),
									'priority'	=> '950' ) )
	);

/*
    // pagina gestione cron
	$p['cron'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'cron' ),
	    'h1'		=> array( $l		=> 'cron' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'macro'		=> array( '_src/_inc/_macro/_cron.view.php' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'gestione cron' ),
									'priority'	=> 50 ) )
	);

    // pagina gestione cron
	$p['cron_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'cron.gestione.html' ),
	    'macro'		=> array( '_src/_inc/_macro/_cron.gestione.php' ),
	    'parent'		=> array( 'id'		=> 'cron' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> array(	'cron_gestione' ) )
	);

    // pagina gestione job
	$p['job'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'job' ),
	    'h1'		=> array( $l		=> 'job' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'macro'		=> array( '_src/_inc/_macro/_job.view.php' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'gestione job' ),
									'priority'	=> 100 ) )
	);

    // pagina gestione singolo job
	$p['job_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'job.gestione.html' ),
	    'macro'		=> array( '_src/_inc/_macro/_job.gestione.php' ),
	    'parent'		=> array( 'id'		=> 'job' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);

    // coda mail in uscita
	$p['mail_out'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'mail in uscita' ),
	    'h1'		=> array( $l		=> 'mail in uscita' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'macro'		=> array( '_src/_inc/_macro/_mail.out.view.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'gestione mail' ),
									'priority'	=> 100 ) ),
	    'etc'		=> array( 'tabs'	=> array(	'mail_out',
									'mail_sent',
									'template_mail' ) )
	);

    // gestione mail in uscita
	$p['mail_out_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'mail.out.gestione.html' ),
	    'parent'		=> array( 'id'		=> 'mail_out' ),
	    'macro'		=> array( '_src/_inc/_macro/_mail.out.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);

    // coda mail inviate
	$p['mail_sent'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'mail inviate' ),
	    'h1'		=> array( $l		=> 'mail inviate' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'macro'		=> array( '_src/_inc/_macro/_mail.sent.view.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> $p['mail_out']['etc']['tabs'] )
	);

    // gestione mail inviate
	$p['mail_sent_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'mail.sent.gestione.html' ),
	    'parent'		=> array( 'id'		=> 'mail_sent' ),
	    'macro'		=> array( '_src/_inc/_macro/_mail.sent.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);

    // vista template mail
	$p['template_mail'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'template' ),
	    'h1'		=> array( $l		=> 'template' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'macro'		=> array( '_src/_inc/_macro/_template.mail.view.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> $p['mail_out']['etc']['tabs'] )
	);

    // gestione template mail
	$p['template_mail_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'template.mail.gestione.html' ),
	    'parent'		=> array( 'id'		=> 'template_mail' ),
	    'macro'		=> array( '_src/_inc/_macro/_template.mail.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> array(	'template_mail_gestione',
									'template_mail_gestione_contenuti',
									'template_mail_gestione_allegati' ) )
	);

    // gestione contenuti template mail
	$p['template_mail_gestione_contenuti'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'testo' ),
	    'h1'		=> array( $l		=> 'testo' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'template.mail.gestione.contenuti.html' ),
	    'parent'		=> array( 'id'		=> 'template_mail' ),
	    'macro'		=> array( '_src/_inc/_macro/_template.mail.gestione.php', '_src/_inc/_macro/_template.mail.gestione.contenuti.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> $p['template_mail_gestione']['etc']['tabs'] )
	);

    // gestione allegati template mail
	$p['template_mail_gestione_allegati'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'allegati' ),
	    'h1'		=> array( $l		=> 'allegati' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'template.mail.gestione.allegati.html' ),
	    'parent'		=> array( 'id'		=> 'template_mail' ),
	    'macro'		=> array( '_src/_inc/_macro/_template.mail.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> $p['template_mail_gestione']['etc']['tabs'] )
	);

    // coda SMS in uscita
	$p['sms_out'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'SMS in uscita' ),
	    'h1'		=> array( $l		=> 'SMS in uscita' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'macro'		=> array( '_src/_inc/_macro/_sms.out.view.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'gestione SMS' ),
									'priority'	=> 100 ) ),
	    'etc'		=> array( 'tabs'	=> array(	'sms_out',
									'sms_sent' ) )
	);

    // gestione SMS in uscita
	$p['sms_out_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'sms.out.gestione.html' ),
	    'parent'		=> array( 'id'		=> 'sms_out' ),
	    'macro'		=> array( '_src/_inc/_macro/_sms.out.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);

    // coda SMS inviati
	$p['sms_sent'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'SMS inviati' ),
	    'h1'		=> array( $l		=> 'SMS inviati' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'macro'		=> array( '_src/_inc/_macro/_sms.sent.view.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'etc'		=> array( 'tabs'	=> $p['sms_out']['etc']['tabs'] )
	);

    // gestione SMS inviati
	$p['sms_sent_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'sms.sent.gestione.html' ),
	    'parent'		=> array( 'id'		=> 'sms_sent' ),
	    'macro'		=> array( '_src/_inc/_macro/_sms.sent.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);

    // visualizzazione log
	$p['log'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'log' ),
	    'h1'		=> array( $l		=> 'log' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'view.html' ),
	    'parent'		=> array( 'id'		=> 'strumenti' ),
	    'macro'		=> array( '_src/_inc/_macro/_log.view.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) ),
	    'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'gestione log' ),
									'priority'	=> 850 ) )
	);

    // gestione mail in uscita
	$p['log_gestione'] = array(
	    'sitemap'		=> false,
	    'title'		=> array( $l		=> 'gestione' ),
	    'h1'		=> array( $l		=> 'gestione' ),
	    'template'		=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'log.gestione.html' ),
	    'parent'		=> array( 'id'		=> 'log' ),
	    'macro'		=> array( '_src/_inc/_macro/_log.gestione.php' ),
	    'auth'		=> array( 'groups'	=> array(	'roots' ) )
	);

    // gestione configurazione
	if( ! file_exists( DIR_BASE . 'src/config/external/config.json' ) ) {
	    $p['configurazione'] = array(
		'sitemap'		=> false,
		'title'		=> array( $l		=> 'configurazione' ),
		'h1'		=> array( $l		=> 'configurazione' ),
		'template'	=> array( 'path'	=> '_src/_templates/_standard/', 'schema' => 'configurazione.gestione.html' ),
		'parent'	=> array( 'id'		=> 'strumenti' ),
		'macro'		=> array( '_src/_inc/_macro/_configurazione.gestione.php' ),
		'auth'		=> array( 'groups'	=> array(	'roots' ) ),
		'etc'		=> array( 'tabs'	=> array(	'configurazione' ) ),
		'menu'		=> array( 'admin'	=> array(	'label'		=> array( $l => 'configurazione' ),
									'priority'	=> 900 ) )
	    );
	}
*/
?>
