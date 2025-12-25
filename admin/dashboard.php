<?php
require_once "../includes/auth_check.php";
require_once "../config/database.php";

// Only admin
if ($_SESSION['role_id'] != 1) die("Access denied!");

// Total rooms
$total_rooms = $pdo->query("SELECT COUNT(*) FROM rooms")->fetchColumn();

// Total booked rooms
$booked_rooms = $pdo->query("SELECT COUNT(*) FROM rooms WHERE status='booked'")->fetchColumn();

// Total bookings
$total_bookings = $pdo->query("SELECT COUNT(*) FROM bookings")->fetchColumn();
?>

<h1>Admin Dashboard</h1>
<p>Welcome, <?php echo $_SESSION['name']; ?>!</p>
<p>Total Rooms: <?php echo $total_rooms; ?></p>
<p>Booked Rooms: <?php echo $booked_rooms; ?></p>
<p>Total Bookings: <?php echo $total_bookings; ?></p>
<p><a href="../auth/logout.php">Logout</a></p>
