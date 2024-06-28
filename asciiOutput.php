<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $character = $_POST['ascii'];
    $number = $_POST['num'];

    // Check if single lowercase character
    if (strlen($character) == 1 && ctype_lower($character)) {
        $asciiValue = ord($character) + 3;
        $newChar = chr($asciiValue);
        echo "<h1>$character = $asciiValue ($newChar)</h1>";
    } else {
        echo "Please enter a valid lowercase letter (a-z).<br>";
    }
    
} else {
    echo "Invalid request method.";
}