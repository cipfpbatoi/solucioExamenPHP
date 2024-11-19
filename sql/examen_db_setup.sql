
-- SQL script to create the database and tables for the application

-- Create the database
CREATE DATABASE IF NOT EXISTS examen_db;
USE examen_db;

-- Create products table
CREATE TABLE IF NOT EXISTS productes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    preu DECIMAL(10, 2) NOT NULL
);

-- Insert test products
INSERT INTO productes (nom, preu) VALUES ('Producte A', 19.99);
INSERT INTO productes (nom, preu) VALUES ('Producte B', 29.99);
INSERT INTO productes (nom, preu) VALUES ('Producte C', 39.99);
