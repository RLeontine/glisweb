ALTER TABLE `todo` ADD `id_indirizzo` INT NULL DEFAULT NULL AFTER `id_luogo`, ADD INDEX (`id_indirizzo`) ;