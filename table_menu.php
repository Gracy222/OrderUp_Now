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

$sql1 = "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (1,' Butter Burger', 107.62)";
$sql2 = "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (1,' Cocoa Butter Burger', 175.71)";
$sql3 = "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (1,' Chocolate Milk Burger', 155.71)";
$sql4 = "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (1,'Triple Chocolate Burger', 175.71)";

$sql5 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (2,'Sandwich', 209.00)";
$sql6 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (2,'Sandwich', 259.00)";
$sql7 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (2,' Delite Sandwich', 199.00)";
$sql8 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (2,'Chicken Sandwich', 279.00)";
$sql9 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (2,' Chicken Sandwich', 249.00)";
$sql10 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (2,' Chicken Sandwich', 249.00)";

$sql11 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (3,'Chicken pie', 179.00)";
$sql12 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (3,'Chicken pie', 379.00)";
$sql13 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (3,'Chicken Pie', 319.00)";
$sql14 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (3,'Triple Chicken Feast', 409.00)";
$sql15 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (3,'Chicken Pie', 319.00)";
$sql16 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (3,'Chicken Pie', 319.00)";

$sql17 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (4,'Fries', 85.00)";
$sql18 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (4,'Plaintain sausage', 100.00)";
$sql19 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (4,'Veggie Plantain', 120.00)";
$sql20 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (4,'chicken pie', 120.00)";
$sql21 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (4,'Onion Sandwich', 140.00)";
$sql22 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (4,'Spagetti', 120.00)";

$sql23 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (5,'Ginger Pro Burger', 239.05)";
$sql24 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (5,'Chicken Ginger Burger - Classic with Cheese', 224.05)";
$sql25 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (5,'Ginger Burger with Cheese', 213.57)";
$sql26 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (5,'Chicken Bucket for Two', 599.05)";
$sql27 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (5,'Chicken Bucket Meal', 499.05)";
$sql28 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (5,'All in One Chicken Bucket', 548.57)";

$sql29= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Spicy Burger', 239.05)";
$sql30= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Chicken Burger - Classic with Cheese', 141.65)";
$sql31= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Veg Burger Combo', 384.76)";
$sql32 = "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Chicken Burger Combo', 384.76)";
$sql33= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Fries (Regular)', 85.71)";
$sql34= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Fries (Medium)', 119.05)";
$sql35= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (6,'Fries (Large)', 139.05)";

$sql36= "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (7,'Nutty Chocolate Milkshake', 279.00)";
$sql37= "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (7,'Red wine Milkshake', 239.00)";
$sql38= "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (7,'Milkshake', 289.00)";
$sql39= "INSERT INTO Menu (restaurant_id ,item_name , price)
        VALUES (7,'Nutty Chocolate Ice Cream Dessert Jar', 269.00)";


$sql40= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (8,' Chicken 2pcs',349.00)";
$sql41= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (8,'Special Chicken ', 444.00)";
$sql42= "INSERT INTO Menu (restaurant_id ,item_name , price)
VALUES (8,'FSpecial Chicken Fry Piece 3pcs', 444.00)";
// Execute the queries

$sql_queries = [$sql1, $sql2, $sql3, $sql4, $sql5, $sql6, $sql7, $sql8,$sql9,$sql10, $sql11,$sql11, $sql12, $sql13, $sql14, $sql15, $sql16, $sql17, $sql18,$sql19,$sql20, $sql21,
$sql22, $sql23, $sql24, $sql25, $sql26, $sql27, $sql28, $sql29,$sql30,$sql31, $sql32,$sql33, $sql34, $sql35, $sql36, $sql37, $sql38, $sql39, $sql40,$sql41,$sql42 ];
foreach ($sql_queries as $sql) {
    if (mysqli_query($conn, $sql)) {
        echo "New records created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
}

// Close connection
mysqli_close($conn);
?>
