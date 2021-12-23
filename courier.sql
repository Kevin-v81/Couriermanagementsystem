CREATE DATABASE COURIER;

USE COURIER;

CREATE TABLE customer(
    id int(10),
    name varchar(30),
    password varchar(30),
    PRIMARY KEY (id)
);

CREATE TABLE delivery(
    id int(10),
    name varchar(30),
    password varchar(30),
    PRIMARY KEY (id)
);

CREATE TABLE admin(
    id int(10),
    name varchar(30),
    password varchar(30),
    PRIMARY KEY (id)
);

CREATE TABLE details(
    id int(10),
    weight varchar(10)
    item varchar(30),
    pickup varchar(30),
    drop varchar(30),
    phoneno varchar(10),
    PRIMARY KEY (id)
);

CREATE TABLE cusdetail(
    shipment varchar(30),
    status 
)