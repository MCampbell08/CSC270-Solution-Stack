<?php include 'header.php'; ?>

<?php

include '..\back-end\dbconfig.php';

$query = "select id, name, board, trucks, wheels, bearings
from decks
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

$result = $mysqli->query( $query );
if(!$result){
    print "There was an mysql error :" . $mysqli->error;
}

$row = $result->fetch_assoc();

$id = $row['id'];
$name = $row['name'];
$board = $row['board'];
$trucks = $row['trucks'];
$wheels = $row['wheels'];
$bearings = $row['bearings'];
?>

<h3>Update Details</h3>
<form id="form" action="..\back-end\update_deck.php" method="post">
        <input type="hidden" name="id" value='<?php echo $id;  ?>'/>
    <label for="name">Skater Name: </label>
    <input type="text" name="name" value='<?php echo $name; ?>'/>
    <br>
    <label for="board">Board: </label>
    <select type="text" name="board" >
        <option selected='<?php echo $board;  ?>'><?php echo $board;  ?></option>
        <option value="Plan_B">Plan B</option>
        <option value="Element">Element</option>
        <option value="Zero">Zero</option>
        <option value="Girl">Girl</option>
        <option value="Baker">Baker</option>
        <option value="Almost">Almost</option>
    </select>
    <br>
    <label for="trucks">Trucks: </label>
    <select type="text" name="trucks" >
        <option selected='<?php echo $trucks;  ?>'><?php echo $trucks;  ?></option>
        <option value="Independent">Independent</option>
        <option value="Krux">Krux</option>
        <option value="Royal">Royal</option>
        <option value="Venture">Venture</option>
        <option value="Thunder">Thunder</option>
    </select>
    <br>
    <label for="wheels">Trucks: </label>
    <select type="text" name="wheels" >
        <option selected='<?php echo $wheels;  ?>'><?php echo $wheels;  ?></option>
        <option value="Bones">Bones</option>
        <option value="Spitfire">Krux</option>
        <option value="Enjoi">Royal</option>
        <option value="Alien_Workshop">Alien Workshop</option>
        <option value="Santa_Cruz">Santa Cruz</option>
    </select>
    <br>
    <label for="bearings">Trucks: </label>
    <select type="text" name="bearings" >
        <option selected='<?php echo $bearings;  ?>'><?php echo $bearings;  ?></option>
        <option value="Bones">Bones</option>
        <option value="Grizzly">Guizzly</option>
        <option value="Flip">Flip</option>
        <option value="DGK">DGK</option>
        <option value="Diamond">Diamoond</option>
    </select>
    <br>
    <input type="submit" value="Update Deck">
</form>

<?php
$result->free();
$mysqli->close();
?>

<?php include 'footer.php'; ?>