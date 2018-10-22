<?php include 'header.php'; ?>

<?php 
//include database connection
include 'dbconfig.php';

//select the specific database record to update
$query = "select id, name, age, species
from people
where id='".$mysqli->real_escape_string($_REQUEST['id'])."'
limit 0,1";

//execute the query
$result = $mysqli->query( $query );

//get the result
$row = $result->fetch_assoc();

//assign the result to certain variable so our html form will be filled up with values
$id = $row['id'];
$name = $row['name'];
$age = $row['age'];
$species = $row['species'];
?>

<h3>Update Details</h3>
<form id="form" action="update_person.php" method="post">
    <input type="hidden" name="id" value='<?php echo $id;  ?>'/>
  <label for="name">Name: </label>
  <input type="text" name="name" value='<?php echo $name;  ?>'/>
  <br>
  <label for="age">Age: </label>
  <input type="text" name="age" value='<?php echo $age;  ?>'/>
  <br>
  <label for="species">Species: </label>
  <select name="species">
    <option selected='<?php echo $species;  ?>'><?php echo $species;  ?></option>
    <option value="Human">Human</option>
    <option value="Vampire">Vampire</option>
    <option value="Werewolf">Werewolf</option>
    <option value="Zombie">Zombie</option>
  </select>
  <br>
  <input type="submit" value="Update Person">
</form>

<?php
//disconnect from database
$result->free();
$mysqli->close();
?>

<?php include 'footer.php'; ?>