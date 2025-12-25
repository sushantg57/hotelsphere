<?php
require_once "../includes/auth_check.php";

if ($_SESSION['role_id'] != 2) {
    die("Access denied!");
}
?>

<h1>Reception Dashboard</h1>
<p>Welcome, <?php echo $_SESSION['name']; ?>!</p>
<a href="../auth/logout.php">Logout</a>
