CREATE DATABASE hospital;

CREATE TABLE appointment (
    id int PRIMARY AUTO_INCREMENT,
    name varchar(255),
    surname varchar(255),
    id_number varchar(255),
    city varchar(255),
    department varchar(255),
    date varchar(255)
);

CREATE TABLE users (
    id int PRIMARY AUTO_INCREMENT,
    name varchar(255),
    password varchar(255)
);

INSERT INTO `users` (`id`, `name`, `password`,) VALUES (1, 'Eren', '123'),