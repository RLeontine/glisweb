CREATE OR REPLACE VIEW contenuti_view AS
    SELECT
	contenuti.id,
	contenuti.id_pagina,
	contenuti.id_popup,
	contenuti.id_immagine,
	contenuti.id_prodotto,
	contenuti.id_articolo,
	contenuti.id_marchio,
	contenuti.id_categoria_prodotti,
	contenuti.id_notizia,
	contenuti.id_categoria_notizie,
	contenuti.id_evento,
	contenuti.id_categoria_eventi,
	contenuti.id_file,
	contenuti.id_risorsa,
	contenuti.id_audio,
	contenuti.id_video,
	contenuti.id_lingua,
	contenuti.title,
	contenuti.keywords,
	contenuti.h1,
	contenuti.h2,
	contenuti.h3,
	contenuti.abstract,
	contenuti.cappello,
	contenuti.testo,
	contenuti.alt,
	contenuti.og_title,
	contenuti.og_type,
	contenuti.og_image,
	contenuti.og_audio,
	contenuti.og_video,
	contenuti.og_determiner,
	contenuti.og_description,
	contenuti.path_custom,
	contenuti.url_custom,
	contenuti.rewrite_custom,
	contenuti.specifiche,
	contenuti.label_menu,
	contenuti.h1 AS __label__
    FROM contenuti
    ORDER BY __label__
;