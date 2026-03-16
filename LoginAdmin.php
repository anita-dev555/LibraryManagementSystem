<?php
session_start();

// Database connection
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

// Query
$sql = "SELECT * FROM admins WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($result)) {
    if (password_verify($password, $row['password'])) {
        $_SESSION['admin'] = $row['username'];
        echo "<script>alert('Login Successful'); window.location.href='admin_service_dashboard.php';</script>";
    } else {
        echo "<script>alert('Invalid Email or Password'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid Email or Password'); window.history.back();</script>";
}

mysqli_close($conn);
?>
