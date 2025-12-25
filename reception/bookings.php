<?php
require_once "../includes/auth_check.php";

if ($_SESSION['role_id'] != 2) {
    die("Access denied!");
}

require_once "../config/database.php";

// Handle check-in
if(isset($_GET['checkin'])) {
    $booking_id = $_GET['checkin'];
    $stmt = $pdo->prepare("UPDATE bookings SET status='checked-in' WHERE id=:id");
    $stmt->execute(['id'=>$booking_id]);
}

// Handle check-out
if(isset($_GET['checkout'])) {
    $booking_id = $_GET['checkout'];
    $stmt = $pdo->prepare("UPDATE bookings SET status='checked-out' WHERE id=:id");
    $stmt->execute(['id'=>$booking_id]);

    // Make room available again
    $stmt = $pdo->prepare("UPDATE rooms SET status='available' WHERE id=(SELECT room_id FROM bookings WHERE id=:id)");
    $stmt->execute(['id'=>$booking_id]);
}

// Fetch all bookings
$bookings = $pdo->query("
    SELECT b.*, r.room_number, r.type 
    FROM bookings b
    JOIN rooms r ON b.room_id = r.id
    ORDER BY b.id DESC
")->fetchAll();
?>

<h1>Manage Bookings</h1>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Guest Name</th>
        <th>Email</th>
        <th>Room</th>
        <th>Check-In</th>
        <th>Check-Out</th>
        <th>Total Price</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
    <?php foreach($bookings as $b): ?>
    <tr>
        <td><?php echo $b['id']; ?></td>
        <td><?php echo $b['guest_name']; ?></td>
        <td><?php echo $b['guest_email']; ?></td>
        <td><?php echo $b['room_number'].' ('.$b['type'].')'; ?></td>
        <td><?php echo $b['check_in']; ?></td>
        <td><?php echo $b['check_out']; ?></td>
        <td><?php echo $b['total_price']; ?></td>
        <td><?php echo $b['status']; ?></td>
        <td>
            <?php if($b['status'] == 'booked'): ?>
                <a href="?checkin=<?php echo $b['id']; ?>">Check-In</a>
            <?php elseif($b['status'] == 'checked-in'): ?>
                <a href="?checkout=<?php echo $b['id']; ?>">Check-Out</a>
            <?php else: ?>
                -
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
