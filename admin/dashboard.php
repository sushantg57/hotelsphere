<?php
require_once "../includes/auth_check.php";

// Only admin
if ($_SESSION['role_id'] != 1) {
    die("Access denied!");
}
?>

<h1>Admin Dashboard</h1>
<p>Welcome, <?php echo $_SESSION['name']; ?>!</p>
<a href="../auth/logout.php">Logout</a>
