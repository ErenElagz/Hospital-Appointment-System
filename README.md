# Hospital Appointment Otomation System 
## Featurws
- Login - Logout System
- Login Page
- Database table on the Admin Page
- CRUD Operations
- Update - Delete Pages
- Nice UI
- Personal and Appointment Sections

## Installation
Firstly Run this Queries
```bash
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
```
Or;
- Create Hospital Database
- Create Appointment Table
    - id int PRIMARY AUTO_INCREMENT,
    - name varchar(255),
    - surname varchar(255),
    - id_number varchar(255),
    - city varchar(255),
    - department varchar(255),
    - date varchar(255)
- Create Users Table
    - id int PRIMARY AUTO_INCREMENT,
    - name varchar(255),
    - password varchar(255)


### Attention 
Maybe Your PHPmyAdmin Username and password be different. Check in the src/php/dbcon.php

## Usage
- index.php is login page
- Create a user in the PHPmyAdmin and Login
- and you going to direct to home.php. Its the Control Panel, You can add appointment and Its will show in the table.
- if you want to change information any appointment click to UPDATE in the row and go to Update.php or DELETE to delete.php

## Languages and Libraries
 1. HTML
 2. CSS (Bootstrap 5)
 3. LottieFiles (For animation...)
 4. JS (Just a little bit code part)
 5. PHP
 6. SQL (Just basic a few query)

## Screenshots


## Licance
This project wa my end of term project. I dont add any Licance. Good Luck <3
  
## Contact
If you have any question or feedback, contact me via email to elagzeren@gmail.com
