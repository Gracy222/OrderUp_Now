<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'cravingkitchen';

// Connect to the database
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die('Could not connect: ' . mysqli_error());
}
$sql1 = "INSERT INTO Drivers (name, phone,status)
        VALUES ('Rahul Sharma', '9876543210', 1)";
$sql2 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Priya Singh', '8765432109', 1)";
$sql3 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Anil Sharma', '7654321098', 1)";
$sql4 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Neha Patel', '6543210987', 1)";
$sql5 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Rahul Gupta', '9543210987', 1)";
$sql6 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Pooja Verma', '9321098765', 1)";
$sql7 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Sanjay Mehta', '910987654', 1)";
$sql8 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Ritu Desai', '8210987654', 1)";
$sql9 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Amit Shah', '9109876543', 1)";
$sql10 = "INSERT INTO Drivers (name, phone,status)
VALUES ('Sunita Mishra', '9876543210', 1)";

// Execute the queries
$sql_queries = [$sql1, $sql2, $sql3, $sql4, $sql5, $sql6, $sql7, $sql8, $sql9, $sql10];
foreach ($sql_queries as $sql) {
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
}
// Close connection
mysqli_close($conn);
?>
