<?php
// config/database.php

$host = "dpg-d56fclbe5dus73co3jsg-a";
$port = "5432";
$dbname = "hotelsphere";
$username = "hotelsphere_user";
$password = "9VnTVm5p9RaJISfc1qetj39ZKMPotqcA";

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}