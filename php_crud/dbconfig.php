<?php
//set connection variables

$host = "localhost";
$username = "mcampbell";
$password = "Pass_1234";
$db_name = "crud_demo"; //database name
//connect to mysql server
$mysqli = new mysqli($host, $username, $password, $db_name);

//check if any connection error was encountered
if(mysqli_connect_errno()) {
echo "Error: Could not connect to database.";
exit;
}