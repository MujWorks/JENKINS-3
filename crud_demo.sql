-- Create the database
CREATE DATABASE IF NOT EXISTS crud_demo;

-- Use the database
USE crud_demo;

-- Create a table for storing items
CREATE TABLE items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL
);
