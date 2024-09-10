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
mysqli_close($conn);
?>