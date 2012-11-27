DROP DATABASE IF EXISTS Survey;

CREATE DATABASE Survey;

USE Survey;

CREATE TABLE Registration
(
	userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(30) NOT NULL,
	password int NOT NULL,
	city varchar(30) NOT NULL,
	states varchar(30) NOT NULL,
	postalcode int NOT NULL,
	phonenumber int NOT NULL,
	email varchar(30) NOT NULL,
	country varchar(30) NOT NULL
);

CREATE TABLE Users
(
	userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(30) NOT NULL,
	password int NOT NULL,
	email varchar(30) NOT NULL
);

CREATE TABLE Contact_Details
(
        userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        companyname varchar(30),
        position varchar(30),
        city varchar(30),
        states varchar(30),
        phone int,
        website varchar(30),
        country varchar(30),
        comments varchar(150)
);

CREATE TABLE Car_Survey
(
        userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(30),
        email varchar(30),
        country varchar(30),
        gender varchar(30),
        agegroup varchar(30),
        typeofcar varchar(30),
        seats int,
        doors int,
        cylinders int,
        fuel varchar(30),
        ageofcar varchar(30),
        colour varchar(30),
        transmission varchar(30),
        engineposition varchar(30)
);

CREATE TABLE Music_Survey
(
        userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(30),
        email varchar(30),
        country varchar(30),
        gender varchar(30),
        agegroup varchar(30),
        musicgenres varchar(30)
);

CREATE TABLE Sport_Survey
(
        userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        sex varchar(30),
        age varchar(30),
        country varchar(30),
        sportclub varchar(30),
        favorathlete varchar(30),
        favorsport varchar(30),
        oftendosport varchar(30),
        watchedsport varchar(30),
        oftenwatchtv varchar(30),
        oftensportevent varchar(30),
        oftensportpage varchar(30)
);

CREATE TABLE Contact_us
(
        userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username varchar(30) NOT NULL,
        email varchar(30) NOT NULL,
        address varchar(50) NOT NULL,
        comment varchar(150)
);

