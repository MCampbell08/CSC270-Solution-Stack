<?php 

$host = "localhost";
$username = "mcampbell";
$password = "Pass_1234";
$db_name = "deck_collection"

$mysqli = new mysqli($host, $username, $password, $db_name);

if(mysqli_connect_errno()) {
    echo "Error: Could not connect to the database.";
    exit;
}

?>