<?php
require_once "../includes/auth_check.php";

include "../includes/header.php";

if ($_SESSION['role_id'] != 2) {
    die("Access denied!");
}

require_once "../config/database.php";

// Fetch available rooms
$rooms = $pdo->query("SELECT * FROM rooms WHERE status='available'")->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $room_id = $_POST['room_id'];
    $guest_name = $_POST['guest_name'];
    $guest_email = $_POST['guest_email'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    // Calculate total price
    $stmt = $pdo->prepare("SELECT price FROM rooms WHERE id = :id");
    $stmt->execute(['id' => $room_id]);
    $price = $stmt->fetchColumn();

    $days = (strtotime($check_out) - strtotime($check_in)) / (60*60*24);
    $total = $price * $days;

    // Insert booking
    $stmt = $pdo->prepare("INSERT INTO bookings (room_id, guest_name, guest_email, check_in, check_out, total_price) VALUES (:room_id,:guest_name,:guest_email,:check_in,:check_out,:total_price)");
    $stmt->execute([
        'room_id'=>$room_id,
        'guest_name'=>$guest_name,
        'guest_email'=>$guest_email,
        'check_in'=>$check_in,
        'check_out'=>$check_out,
        'total_price'=>$total
    ]);

    // Update room status
    $stmt = $pdo->prepare("UPDATE rooms SET status='booked' WHERE id=:id");
    $stmt->execute(['id'=>$room_id]);

    $message = "Room booked successfully!";
}
?>

<h1 class="mb-4">Book a Room</h1>

<div class="card p-4 mb-4">
<form method="post" action="book_room_submit.php">
<div class="mb-3">
<label for="guest_name" class="form-label">Guest Name</label>
<input type="text" class="form-control" id="guest_name" name="guest_name" required>
</div>
<div class="mb-3">
<label for="room_id" class="form-label">Select Room</label>
<select class="form-select" id="room_id" name="room_id" required>
<option value="">-- Select Room --</option>
<?php foreach($availableRooms as $room): ?>
<option value="<?= $room['id'] ?>"><?= $room['room_number'].' ('.$room['type'].')' ?></option>
<?php endforeach; ?>
</select>
</div>
<button type="submit" class="btn btn-primary w-100">Book Room</button>
</form>
</div>
<?php include "../includes/footer.php"; ?>
