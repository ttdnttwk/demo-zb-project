<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
