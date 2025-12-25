<?php
require_once "../includes/auth_check.php";

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

<h1>Book a Room</h1>
<?php if(isset($message)) echo "<p style='color:green;'>$message</p>"; ?>

<form method="POST">
    <label>Guest Name</label>
    <input type="text" name="guest_name" required><br>

    <label>Guest Email</label>
    <input type="email" name="guest_email" required><br>

    <label>Room</label>
    <select name="room_id" required>
        <?php foreach($rooms as $r): ?>
        <option value="<?php echo $r['id']; ?>"><?php echo $r['room_number'].' ('.$r['type'].')'; ?></option>
        <?php endforeach; ?>
    </select><br>

    <label>Check-In</label>
    <input type="date" name="check_in" required><br>

    <label>Check-Out</label>
    <input type="date" name="check_out" required><br>

    <button type="submit">Book Room</button>
</form>
