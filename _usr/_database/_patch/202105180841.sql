ALTER TABLE `progetti` ADD CONSTRAINT `progetti_ibfk_34_nofollow` FOREIGN KEY (`id_mastro_attivita_default`) REFERENCES `mastri`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;