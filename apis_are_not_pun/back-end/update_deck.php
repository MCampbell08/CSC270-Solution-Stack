<?php 

include 'dbconfig.php';

$query = "update deck
    set 
    name = '".$mysqli->real_escape_string($_POST['name'])."',
    board = '".$mysqli->real_escape_string($_POST['board'])."',
    trucks = '".$mysqli->real_escape_string($_POST['trucks'])."',
    wheels = '".$mysqli->real_escape_string($_POST['wheels'])."',
    bearings = '".$mysqli->real_escape_string($_POST['bearings'])."'
    where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";

    if($mysqli->query($query)){
        header("Location: index.php");
        exit();
    } else {
        echo "Database Error: Unable to update record.";
    }

    $mysqli->close();
?>