<?php include 'header.php'; ?>

<h3>Deck Details</h3>
<form id="form" action="..\back-end\add_deck.php" method="post">
    <label for="name">Skater Name: </label>
    <input type="text" name="name" />
    <br>
    <label for="board">Board: </label>
    <select type="text" name="board" >
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
        <option value="Independent">Independent</option>
        <option value="Krux">Krux</option>
        <option value="Royal">Royal</option>
        <option value="Venture">Venture</option>
        <option value="Thunder">Thunder</option>
    </select>
    <br>
    <label for="wheels">Trucks: </label>
    <select type="text" name="wheels" >
        <option value="Bones">Bones</option>
        <option value="Spitfire">Krux</option>
        <option value="Enjoi">Royal</option>
        <option value="Alien_Workshop">Alien Workshop</option>
        <option value="Santa_Cruz">Santa Cruz</option>
    </select>
    <br>
    <label for="bearings">Trucks: </label>
    <select type="text" name="bearings" >
        <option value="Bones">Bones</option>
        <option value="Grizzly">Guizzly</option>
        <option value="Flip">Flip</option>
        <option value="DGK">DGK</option>
        <option value="Diamond">Diamoond</option>
    </select>
    <br>
    <input type="submit" value="Add Deck">
</form>

<?php include 'footer.php'; ?>