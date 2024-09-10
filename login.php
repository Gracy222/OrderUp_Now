<?php
session_start();
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = "cravingkitchen";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check username and password (without hashing)
$sql = "SELECT * FROM Users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Username and password match, set up session
    $_SESSION['username'] = $username;
    // Redirect to index.html
    echo "<script>alert('thankyou for logging in');window.location.href = 'cart.php';</script>";
} else {
    // Username and/or password do not match
    echo "<script>alert('Invalid username or password');window.location.href = 'index.html';</script>";
}

$conn->close();
?>