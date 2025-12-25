<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HotelSphere</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
body {
    font-family: 'Inter', sans-serif;
    background-color: #f5f5f7;
    color: #1c1c1e;
}
.navbar-brand {
    font-weight: 700;
    font-size: 1.5rem;
}
.nav-link {
    font-weight: 500;
}
.card {
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}
.btn-primary {
    background-color: #0a84ff;
    border: none;
    border-radius: 8px;
}
.btn-primary:hover {
    background-color: #0066cc;
}
.table {
    background-color: #fff;
    border-radius: 12px;
}
h1, h2, h3 {
    font-weight: 600;
}
</style>
</head>
<body>
<?php include "navbar.php"; ?>
<div class="container mt-4">


