<?php

include 'dbconfig.php';


$query = "DELETE FROM decks WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";

if($mysqli->query($query)) {
    header("Location: ..\front-end\index.php");
    exit();
} else {
    echo "Database Error: Unable to delete record.";
}
$mysqli->close();
?>