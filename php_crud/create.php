<?php include 'header.php'; ?>

<h3>Customer Details</h3>
<form id="form" action="add_person.php" method="post">
  <label for="name">Name: </label>
  <input type="text" name="name" />
  <br>
  <label for="age">Age: </label>
  <input type="text" name="age" />
  <br>
  <label for="species">Species: </label>
  <select name="species">
    <option value="Human">Human</option>
    <option value="Vampire">Vampire</option>
    <option value="Werewolf">Werewolf</option>
    <option value="Zombie">Zombie</option>
  </select>
  <br>
  <input type="submit" value="Add Person">
</form>

<?php include 'footer.php'; ?>