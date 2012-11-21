DROP DATABASE IF EXISTS Survey;

CREATE DATABASE Survey;

USE Survey;

CREATE TABLE Welcome
(
   UserID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
   Name varchar(30) NOT NULL,
   Password int NOT NULL
);

CREATE TABLE Registration
(
	UserID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name varchar(30) NOT NULL,
	Password int NOT NULL,
	City varchar(30) NOT NULL,
	States varchar(30) NOT NULL,
	Postal_Code int NOT NULL,
	Phone int NOT NULL,
	Email varchar(30) NOT NULL,
	Country varchar(30) NOT NULL
);