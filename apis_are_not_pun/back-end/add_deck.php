<?php
echo $_POST['name'] + '<br>';
//include database connection
include 'dbconfig.php';
//$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
$query = "insert into decks
    set
    name = '".$mysqli->real_escape_string($_POST['name'])."',
    board = '".$mysqli->real_escape_string($_POST['board'])."',
    trucks = '".$mysqli->real_escape_string($_POST['trucks'])."',
    wheels = '".$mysqli->real_escape_string($_POST['wheels'])."',
    bearings  = '".$mysqli->real_escape_string($_POST['bearings'])."'";

//execute the query
if( $mysqli->query($query) ) {
    //if saving success
    header("Location: ..\front-end\index.php"); /* Redirect browser, MUST occur before anything is output to page */
    exit();
}else{
    //if unable to create new record
    echo "Database Error: Unable to create record.";
}
//close database connection
$mysqli->close();
?>
