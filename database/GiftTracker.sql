drop database GiftTracker;
CREATE DATABASE GiftTracker;

USE GiftTracker;
create table gebruiker(
persoon_ID int not null unique AUTO_INCREMENT,
firstnaam varchar(100) not null,
achternaam varchar(100) not null,
leeftijd int not null,
geslacht varchar (50) not null,
paswoord varchar (50) not null,
IsAdmin boolean,
primary key(persoon_ID));

create table prefrences(
prefrences_ID int not null unique auto_increment,
preferences_Name int not null,
primary key(prefrences_ID));

create table gift(
gift_ID int not null unique auto_increment,
gift_Name int not null,
primary key(gift_id));

create table Calender(
calender_ID int not null auto_increment,
EvenementName varchar(100) not null,
Calender_Date date
);



