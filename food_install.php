<?php
require_once "config/database.php";

// Menu items
$pdo->exec("
CREATE TABLE IF NOT EXISTS menu_items (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price NUMERIC(10,2) NOT NULL,
    status VARCHAR(20) DEFAULT 'available',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
");

// Food orders
$pdo->exec("
CREATE TABLE IF NOT EXISTS food_orders (
    id SERIAL PRIMARY KEY,
    booking_id INT NOT NULL REFERENCES bookings(id),
    status VARCHAR(20) DEFAULT 'pending',
    total_price NUMERIC(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
");

// Food order items
$pdo->exec("
CREATE TABLE IF NOT EXISTS food_order_items (
    id SERIAL PRIMARY KEY,
    order_id INT NOT NULL REFERENCES food_orders(id),
    menu_item_id INT NOT NULL REFERENCES menu_items(id),
    quantity INT NOT NULL,
    price NUMERIC(10,2) NOT NULL
);
");

echo "Food ordering tables created! Delete food_install.php now.";
