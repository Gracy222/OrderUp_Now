<?php
$host='localhost:3306';
$user='root';
$pass='';
//connect with database servername,username,password
$conn=mysqli_connect($host,$user,$pass);
//if the above host with username and pass is not there
if(!$conn)
{
    die('Could not connect: '.mysqli_error());
}
$sql="CREATE DATABASE cravingkitchen";
    if(mysqli_query($conn,$sql))
    {
        echo "Database created successfully";
    }
    else{
        echo "Error in creating database : ". mysqli_error($conn);
    }
mysqli_close($conn);
?>