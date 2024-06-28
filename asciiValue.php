<?php

if(isset($_POST["submit"])){
    $character = $_POST["ascii"];
    $number = $_POST["number"];
    
    if(strlen($character) == 1 && ctype_lower($character)){
        $value = ord($character) + $number;
        $newalphabet = chr($value);
        echo "<h2>$character = $value ($newalphabet)</h2>";
    }else{
        echo "Please input Valid lower (a-z) alphabet";
    }
}




?>

<form action="" method="post">
    <input type="text" placeholder="Enter Alphabet" name="ascii">
    <input type="number" placeholder="Enter Alphabet" name="number">
    <input type="submit" name="submit" value="Submit">
</form>