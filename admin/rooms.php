<?php
require_once "../includes/auth_check.php";

if ($_SESSION['role_id'] != 1) {
    die("Access denied!");
}

require_once "../config/database.php";

// Add new room
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $room_number = $_POST['room_number'];
    $type = $_POST['type'];
    $price = $_POST['price'];

    $stmt = $pdo->prepare("INSERT INTO rooms (room_number, type, price) VALUES (:room_number, :type, :price)");
    $stmt->execute([
        'room_number' => $room_number,
        'type' => $type,
        'price' => $price
    ]);

    $message = "Room added successfully!";
}

// Fetch all rooms
$rooms = $pdo->query("SELECT * FROM rooms ORDER BY id DESC")->fetchAll();
?>

<h1>Manage Rooms</h1>
<?php if(isset($message)) echo "<p style='color:green;'>$message</p>"; ?>

<form method="POST">
    <input type="text" name="room_number" placeholder="Room Number" required>
    <input type="text" name="type" placeholder="Type (Single, Double, Suite)" required>
    <input type="number" step="0.01" name="price" placeholder="Price" required>
    <button type="submit">Add Room</button>
</form>

<h2>All Rooms</h2>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Room Number</th>
        <th>Type</th>
        <th>Price</th>
        <th>Status</th>
    </tr>
    <?php foreach($rooms as $r): ?>
    <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['room_number']; ?></td>
        <td><?php echo $r['type']; ?></td>
        <td><?php echo $r['price']; ?></td>
        <td><?php echo $r['status']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
