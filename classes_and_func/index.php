<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        function greet($greeting, $name='Bob'){
            echo strtoupper($greeting.", ".$name." <br />");
        }

        greet("Hello");
        greet("Howdy", "Sally");

        function check_age($age){
            if($age < 18) {
                echo "Young whippersnapper<br />";
            }elseif($age >= 18 && $age <= 40){
                echo "Prime of your life<br />";
            }else{
                echo "Older than dirt<br />";
            }
        }

        check_age(51);
        check_age(17);

        include 'people.php';
        $sally = new People('Sally', 24);
        $sally->speaks();
        $sally->age = 25;
        $sally->get_info();
        echo $sally->type;

        $harry = new Monster('Harry', 45, 'werewolf'); 
    ?>
</body>
</html>