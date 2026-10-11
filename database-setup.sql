-- Database Setup for Shoe Store Website
-- Create database and products table

CREATE DATABASE IF NOT EXISTS shoe_store;
USE shoe_store;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    brand VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    description TEXT,
    durability VARCHAR(50)
);

-- Insert sample shoe data
INSERT INTO products (name, brand, price, description, durability) VALUES
('Air Max Running', 'Nike', 89.99, 'Comfortable running shoes', '⭐⭐⭐⭐'),
('Ultraboost', 'Adidas', 119.99, 'High-performance sneakers', '⭐⭐⭐⭐'),
('Suede Classic', 'Puma', 69.99, 'Casual classic style', '⭐⭐⭐½'),
('Chuck Taylor', 'Converse', 55.00, 'Timeless canvas design', '⭐⭐⭐'),
('Old Skool', 'Vans', 60.00, 'Iconic skate shoes', '⭐⭐⭐½'),
('Timberland 6-Inch Boot', 'Timberland', 165.00, 'Waterproof & durable', '⭐⭐⭐⭐⭐'),
('Leather Loafer', 'Clarks', 95.00, 'Elegant formal footwear', '⭐⭐⭐⭐'),
('Memory Foam Sneaker', 'Skechers', 75.00, 'Light & comfortable', '⭐⭐⭐½'),
('574 Classic', 'New Balance', 80.00, 'Durable everyday shoe', '⭐⭐⭐⭐⭐'),
('Nano Training', 'Reebok', 90.00, 'Built for intense workouts', '⭐⭐⭐⭐'),
('Classic Clog', 'Crocs', 49.99, 'Light & easy to clean', '⭐⭐⭐'),
('Arizona Sandal', 'Birkenstock', 85.00, 'Contoured cork footbed', '⭐⭐⭐⭐⭐'),
('Ace Leather Sneaker', 'Gucci', 580.00, 'Luxury designer footwear', '⭐⭐⭐⭐'),
('Charged Rogue', 'Under Armour', 85.00, 'Performance running shoe', '⭐⭐⭐⭐');
