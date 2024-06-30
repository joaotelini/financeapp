CREATE TABLE IF NOT EXISTS `user` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`fullname` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `marks` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`description` varchar(255) NOT NULL,
	`money` float NOT NULL,
	`date_start` date NOT NULL,
	`date_end` date NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `bill_to_pay` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`description` varchar(255) NOT NULL,
	`value` float NOT NULL,
	`paid_with` varchar(255) NOT NULL,
	`installments` int NOT NULL,
	`date_payment` date NOT NULL,
	PRIMARY KEY (`id`)
);



