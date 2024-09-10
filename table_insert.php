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
$sql1 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('belgium waffle', 'labbipet, 22kms', '94943 90245')";
$sql2 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('subway', 'fortune murali park road,31 kms', ' 9494676247')";
$sql3 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('pizza hut', 'labbipet, 22.5kms', '1800 202 2022')";
$sql4 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('minerva coffee shop by minerva grand', 'labbipet, 22.1kms', '866 667 8888')";
$sql5 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('kfc', 'lakshmipuram, 31.7kms', '70326 80435')";
$sql6 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('Mc Donalds', 'auto nagar 22.2kms', '89283 04271')";
$sql7 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('frozen bottle', 'labbipet, 22.7kms', '98858 85969')";
$sql8 = "INSERT INTO Restaurants (name, address, phone)
        VALUES ('Mehfil-E-Biryani', 'Brodipet, 31.7kms', '9030107684')";

// Execute the queries
$sql_queries = [$sql1, $sql2, $sql3, $sql4, $sql5, $sql6, $sql7, $sql8];
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
