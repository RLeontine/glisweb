CREATE OR REPLACE VIEW `tipologie_orari_inps_view` AS
	SELECT
	tipologie_orari_inps.*,
	CONCAT( tipologie_orari_inps.id, ' - ', tipologie_orari_inps.nome ) AS __label__
	FROM tipologie_orari_inps
	ORDER BY __label__
;