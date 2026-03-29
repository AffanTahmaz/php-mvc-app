CREATE DATABASE IF NOT EXISTS mvc_app;
USE mvc_app;

CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    naziv VARCHAR(50)
);

INSERT INTO roles (naziv) VALUES ('Admin'), ('User');

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ime VARCHAR(100),
    prezime VARCHAR(100),
    email VARCHAR(100),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);
