<?php
// Receive the cart data from the JavaScript
$data = json_decode(file_get_contents("php://input"), true);

// Connect to the database
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'OrderUp_Now';
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
$phone = $data[0]['phone'];
$address = $data[0]['address'];
$items = "";
$order_total = 0;

foreach ($data as $item) {
    if (is_array($item) && isset($item['title']) && isset($item['price'])) {
        $title = $item['title'];
        $price = $item['price'];

        $items .= $title . ": " . $price . ", ";

        $order_total += $price;
    }
}

$items = rtrim($items, ", ");

// Insert record into Orders table
$sql = "INSERT INTO Orders (address, phone, items, order_total, status) VALUES ('$address', '$phone', '$items', $order_total, 0)";
if ($conn->query($sql) === TRUE) {
    echo "<script>;window.location.href = 'thankyou.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
mysqli_close($conn);
?>
