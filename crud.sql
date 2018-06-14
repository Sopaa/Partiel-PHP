-- Création de la table

CREATE TABLE `partiel_20180614`.`message` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`posted_at` DATETIME NOT NULL,
`message` VARCHAR(300) NOT NULL,
PRIMARY KEY (`id`));
-- Insertion
INSERT INTO `message`(
  `id`,
  `posted_at`,
  `message`
)
VALUES(
  'id',
  'posted_at',
  'message'
)
;
INSERT INTO `message` SET
  `id`= 'id',
  `posted_at` = 'posted_at',
  `message` = 'message'
-- Mise à jour
UPDATE
  `message`
SET
  `id`= '1',
  `posted_at` = '19 janv. 2038',
  `message` = 'nomalement ca marche plus les ordis'
WHERE
`id` = 1;
-- Supression
DELETE FROM `message` WHERE `id` = 2;