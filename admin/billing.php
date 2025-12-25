<?php
require_once "../includes/auth_check.php";

if ($_SESSION['role_id'] != 1) die("Access denied!");

require_once "../config/database.php";
include "../includes/header.php"; // include header + navbar
// Fetch all bookings with room & food
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

<h1>Centralized Billing</h1>

<table border="1" cellpadding="5">
<tr>
<th>Guest</th>
<th>Room</th>
<th>Room Price</th>
<th>Food Price</th>
<th>Total Bill</th>
</tr>

<?php foreach($bookings as $b): ?>
<tr>
<td><?php echo $b['guest_name']; ?></td>
<td><?php echo $b['room_number'].' ('.$b['room_type'].')'; ?></td>
<td><?php echo $b['room_price']; ?></td>
<td><?php echo $b['food_price']; ?></td>
<td><?php echo $b['room_price'] + $b['food_price']; ?></td>
</tr>
<?php endforeach; ?>
</table>
<?php include "../includes/footer.php"; ?>
