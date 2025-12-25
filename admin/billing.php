<?php
require_once "../includes/auth_check.php";
require_once "../config/database.php";
include "../includes/header.php"; // header + navbar

if ($_SESSION['role_id'] != 1) die("Access denied!");

// Fetch all bookings with room & food totals
$bookings = $pdo->query("
SELECT b.id AS booking_id, b.guest_name, b.room_id, r.room_number, r.type AS room_type, b.total_price AS room_price,
       COALESCE(SUM(fo.total_price),0) AS food_price
FROM bookings b
JOIN rooms r ON b.room_id = r.id
LEFT JOIN food_orders fo ON fo.booking_id = b.id
GROUP BY b.id, r.room_number, r.type, b.total_price
ORDER BY b.id DESC
")->fetchAll();
?>

<h1 class="mb-4">Centralized Billing</h1>

<div class="card p-3 mb-4">
<table class="table table-hover align-middle mb-0">
<thead>
<tr>
<th>Guest</th>
<th>Room</th>
<th>Room Price</th>
<th>Food Price</th>
<th>Total Bill</th>
</tr>
</thead>
<tbody>
<?php foreach($bookings as $b): ?>
<tr>
<td><?= htmlspecialchars($b['guest_name']) ?></td>
<td><?= htmlspecialchars($b['room_number'].' ('.$b['room_type'].')') ?></td>
<td>$<?= number_format($b['room_price'],2) ?></td>
<td>$<?= number_format($b['food_price'],2) ?></td>
<td>$<?= number_format($b['room_price'] + $b['food_price'],2) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include "../includes/footer.php"; ?>
