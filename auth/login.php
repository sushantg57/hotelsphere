<?php
session_start();
require_once "../config/database.php";
$error = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Get user by email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    if ($user) {
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password correct → set session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role_id'] = $user['role_id'];
            $_SESSION['name'] = $user['name'];

            // Redirect based on role
            switch ($user['role_id']) {
                case 1: // Admin
                    header("Location: ../admin/dashboard.php");
                    exit;
                case 2: // Reception
                    header("Location: ../reception/dashboard.php");
                    exit;
                case 3: // Kitchen
                    header("Location: ../kitchen/dashboard.php");
                    exit;
                default:
                    $error = "Invalid role!";
            }
        } else {
            $error = "Incorrect password!";
        }
    } else {
        $error = "User not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - HotelSphere</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>

<h2>Login</h2>

<?php if ($error): ?>
    <p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="POST">
    <label>Email</label><br>
    <input type="email" name="email" required><br><br>

    <label>Password</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

</body>
</html>


