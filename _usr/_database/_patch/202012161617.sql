ALTER TABLE `anagrafica_view_static` ADD `stato_civile` ENUM('Celibe/Nubile','Coniugato/a','Divorziato/a','Separato/a', 'Vedovo/a') NULL DEFAULT NULL AFTER `sesso`;