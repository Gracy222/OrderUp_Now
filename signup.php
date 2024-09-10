<?php
session_start();
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = "OrderUp_Now";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Form data
$name = $_POST['name'];
$username = $_POST['username2'];
$phone = $_POST['phone'];
$password = $_POST['password2'];
$sql = "INSERT INTO Users(name, username, password, phone) VALUES ('$name', '$username', '$password', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('thankyou for signing in');window.location.href = 'index.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$conn->close();
?>