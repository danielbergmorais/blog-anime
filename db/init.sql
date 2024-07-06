CREATE DATABASE IF NOT EXISTS laravel;
USE laravel;

CREATE USER IF NOT EXISTS 'berg'@'%' IDENTIFIED BY 'f1r3l1nkshr1n3';
GRANT ALL ON `laravel`.* TO 'berg'@'%';