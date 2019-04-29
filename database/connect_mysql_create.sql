CREATE TABLE `article` (
	`id_article` INT NOT NULL AUTO_INCREMENT,
	`contenu` TEXT NOT NULL,
	`id_admin` INT NOT NULL,
	`date` DATETIME NOT NULL,
	`label` TEXT NOT NULL,
	PRIMARY KEY (`id_article`)
);

CREATE TABLE `comment` (
	`id_article` INT NOT NULL,
	`commentair` TEXT NOT NULL,
	`date_cmt` DATETIME NOT NULL,
	`usr_id` INT NOT NULL
);

CREATE TABLE `Admin` (
	`id_admin` INT NOT NULL AUTO_INCREMENT,
	`passwd` TEXT NOT NULL UNIQUE,
	`name` TEXT NOT NULL,
	PRIMARY KEY (`id_admin`)
);

CREATE TABLE `users` (
	`usr_id` INT NOT NULL AUTO_INCREMENT,
	`username` TEXT NOT NULL,
	`passwd` TEXT NOT NULL,
	PRIMARY KEY (`usr_id`)
);

ALTER TABLE `article` ADD CONSTRAINT `article_fk0` FOREIGN KEY (`id_admin`) REFERENCES `Admin`(`id_admin`);

ALTER TABLE `comment` ADD CONSTRAINT `comment_fk0` FOREIGN KEY (`id_article`) REFERENCES `article`(`id_article`);

ALTER TABLE `comment` ADD CONSTRAINT `comment_fk1` FOREIGN KEY (`usr_id`) REFERENCES `users`(`usr_id`);

