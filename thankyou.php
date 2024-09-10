<?php
// Configuration
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'cravingkitchen';

// Connect with database
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    die('Could not connect: ' . $conn->connect_error);
}

// Retrieve phone number from URL
$phone = $_GET['phone'];

// Fetch order details from the database
$sql_order = "SELECT * FROM Orders WHERE phone = '$phone'";
$result_order = $conn->query($sql_order);

// Fetch driver details associated with the order
$sql_driver = "SELECT * FROM Drivers WHERE status = 1";
$result_driver = $conn->query($sql_driver);
$driver = $result_driver->fetch_assoc();
if ($driver) {
    $driver_id = $driver['driver_id']; // Assuming there's an 'id' column in the Drivers table
    $update_driver_sql = "UPDATE Drivers SET status = 0 WHERE driver_id = $driver_id";
    $conn->query($update_driver_sql);
}
// Display order details
?>
<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <style>
        body {
            background-image: bzflush;
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        .order-details {
            max-width: 700px;
            color : #ffffff;
            margin-top: 160px;
            margin-left : 500px;
            text-align: center;
            background-color:white;
            color:black;
        }
        .driver-details {
            max-width: 700px;
            color : #ffffff;
            margin-top: 10px;
            margin-left : 500px;
            text-align: center;
            background-color:white;
            color:black;
        }
    </style>
</head>
<body>
    <div class="order-details">
        <h2 style="font-size:60px">Order Details</h2>
        <?php
        if ($result_order->num_rows > 0) {
            while ($row = $result_order->fetch_assoc()) {
                echo "<p>Address: " . $row['address'] . "</p>";
                echo "<p>Phone: " . $row['phone'] . "</p>";
                echo "<p>Order Total: " . $row['order_total'] . "</p>";
                echo "<p>Items: " . $row['items'] . "</p><br/>";
            }
        } else {
            echo "<p>No order found for this phone number.</p>";
        }
        ?>
    </div>
    <div class="driver-details">
        <h2 style="font-size:40px">Delivery Details</h2>
        <?php
        if ($driver) {
            echo "<p>Name: " . $driver['name'] . "</p>";
            echo "<p>Phone: " . $driver['phone'] . "</p>";
        } else {
            echo "<p>No driver assigned for this order.</p>";
        }
        ?>
    </div>
</body>
</html>
