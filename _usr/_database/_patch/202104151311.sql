ALTER TABLE `obiettivi_tipologie_documenti` ADD UNIQUE KEY `unico` (`id_obiettivo`,`id_tipologia`), ADD KEY `id_obiettivo` (`id_obiettivo`), ADD KEY `id_tipologia` (`id_tipologia`);
