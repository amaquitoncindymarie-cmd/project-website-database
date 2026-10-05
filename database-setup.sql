CREATE DATABASE shoe_store;
USE shoe_store;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO products (name, price) VALUES
('Running Shoes', 1500.00),
('Casual Sneakers', 1200.00),
('Formal Leather Shoes', 2000.00);
