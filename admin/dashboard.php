<?php
require_once "../includes/auth_check.php";
require_once "../config/database.php";
include "../includes/header.php"; // include header + navbar

// Only admin
if ($_SESSION['role_id'] != 1) die("Access denied!");

// Fetch metrics from database
$totalRooms = $pdo->query("SELECT COUNT(*) FROM rooms")->fetchColumn();
$bookedRooms = $pdo->query("SELECT COUNT(*) FROM rooms WHERE status='booked'")->fetchColumn();
$totalBookings = $pdo->query("SELECT COUNT(*) FROM bookings")->fetchColumn();
$totalRevenueRooms = $pdo->query("SELECT SUM(total_price) FROM bookings")->fetchColumn();
$totalRevenueFood = $pdo->query("SELECT SUM(total_price) FROM food_orders")->fetchColumn();
$totalRevenue = $totalRevenueRooms + $totalRevenueFood;
?>

<h1 class="mb-4">Admin Dashboard</h1>
<p class="mb-4">Welcome, <strong><?= $_SESSION['name']; ?></strong>!</p>

<div class="row mb-4">
  <div class="col-md-3 mb-3">
    <div class="card p-4 text-center">
      <h3>Total Rooms</h3>
      <h2><?= $totalRooms ?></h2>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card p-4 text-center">
      <h3>Booked Rooms</h3>
      <h2><?= $bookedRooms ?></h2>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card p-4 text-center">
      <h3>Total Bookings</h3>
      <h2><?= $totalBookings ?></h2>
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <div class="card p-4 text-center">
      <h3>Total Revenue</h3>
      <h2>$<?= number_format($totalRevenue, 2) ?></h2>
    </div>
  </div>
</div>

<?php include "../includes/footer.php"; ?>
