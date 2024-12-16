CREATE DATABASE arska2
DEFAULT CHARACTER SET = 'utf8mb4';

CREATE TABLE `tuotteet` (
    `tuote_id` int(10) NOT NULL AUTO_INCREMENT,
    `nimi` varchar(250) NOT NULL,
    `hinta` int(10) NOT NULL,
    `kuva` varchar(250) NOT NULL,
    PRIMARY KEY (`tuote_id`)
);

CREATE TABLE `asiakkaat` (
    `asiakas_id` int(10) NOT NULL AUTO_INCREMENT,
    `as_nimi` varchar(250) NOT NULL,
    `osoite` varchar(50) NOT NULL,
    `sposti` varchar(250) NOT NULL,
    PRIMARY KEY (`asiakas_id`)
);