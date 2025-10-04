CREATE DATABASE fashion_store;

USE fashion_store;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    stock INT,
    sold INT DEFAULT 0
);

-- Sample data
INSERT INTO products (name, price, stock, sold) VALUES
('Casual Shirt', 25.00, 50, 10),
('Summer Dress', 40.00, 30, 5),
('Stylish Shoes', 60.00, 20, 2);
