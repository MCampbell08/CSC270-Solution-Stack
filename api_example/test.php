<?php 
    header("Access-Control-Allow-Origin: *");

    $myArray = ['Sally', 'Bob', 'Harry', 'Suzette', 'Fred'];
    $arraySize = sizeof($myArray);

    $myJson = '{';
    $myJson .= '"people": [';

    if(isset($_GET['num'])){
        $num = $_GET['num'];
    } else {
        $num = $arraySize;
    }

    if($num>$arraySize || $num<1){
        $num = $arraySize;
    }

    for($i=0; $i<$num; $i++){
        $myJson .= '"'.$myArray[$i];
        if($i != $num-1) {
            .'", ';
        }
    }

    $myJson .= ']';
    $myJson .= '}';

    echo $myJson;
?>