<?php
require_once "config/database.php";

// Create roles table
$pdo->exec("
CREATE TABLE IF NOT EXISTS roles (
    id SERIAL PRIMARY KEY,
    role_name VARCHAR(50) UNIQUE NOT NULL
);
");

// Insert default roles
$roles = ['admin', 'reception', 'kitchen'];
foreach ($roles as $role) {
    $stmt = $pdo->prepare("INSERT INTO roles (role_name) VALUES (:role) ON CONFLICT (role_name) DO NOTHING");
    $stmt->execute(['role' => $role]);
}

// Create users table
$pdo->exec("
CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL REFERENCES roles(id),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
");

// Insert first admin user
$adminEmail = "admin@hotelsphere.com";
$adminPassword = password_hash("admin123", PASSWORD_DEFAULT);

// Check if admin exists
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute(['email' => $adminEmail]);
if ($stmt->rowCount() == 0) {
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, role_id) VALUES (:name, :email, :password, 1)");
    $stmt->execute([
        'name' => 'Admin',
        'email' => $adminEmail,
        'password' => $adminPassword
    ]);
}

echo "Installation complete! Delete install.php for security.";
