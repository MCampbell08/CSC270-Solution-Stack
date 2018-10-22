<?php
echo $_POST['board'] + '<br>';

include 'dbconfig.php';

$query = "insert into decks
    set
    board = '".$mysqli->real_escape_string($_POST['board'])."',
    trucks = '".$mysqli->real_escape_string($_POST['trucks'])."',
    wheels = '".$mysqli->real_escape_string($_POST['wheels'])."',
    bearings = '".$mysqli->real_escape_string($_POST['bearings'])."'";
    
if($mysqli->query($query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Database Error: UNable to create record."
}
$mysqli->close();
?>