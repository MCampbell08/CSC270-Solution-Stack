<?php include 'header.php'; ?>

<h3>List of Decks</h3>

<table class="gridtable">
  <tr>
    <th>Id</th>
    <th>Board</th>
    <th>Trucks</th>
    <th>Wheels</th>
    <th>Created</th>
    <th>Updated</th>
    <th></th>
    <th></th>
  </tr>
  <?php

include 'dbconfig.php';

$query = "select * from decks";

$result = $mysqli->query( $query );

$num_results = $result->num_rows;
if( $num_results > 0){ 

    while( $row = $result->fetch_assoc() ){

        extract($row);

        echo "<tr>";
        echo "        <td>{$id}</td>";
        echo "        <td>{$board}</td>";
        echo "        <td>{$trucks}</td>";
        echo "        <td>{$wheels}</td>";
        echo "        <td>{$created}</td>";
        echo "        <td>{$updated}</td>";
        echo "        <td><a href='edit.php?id={$id}'>Edit</a></td>";
        echo "        <td><a href='delete_person.php?id={$id}'>Delete</a></td>";
        echo "    </tr>";
    }

}else{
    //if database table is empty
}

//disconnect from database
$result->free();
$mysqli->close();

?>  

</table>
  <p>
    <div id="menu">
      <a href="create.php">Add new deck</a>
    </div>
  </p>
  
<?php include 'footer.php'; ?>