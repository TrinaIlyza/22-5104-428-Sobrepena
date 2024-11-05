<?php
$password = "";
do {
    echo "Please enter your password: ";
    $password = trim(fgets(STDIN)); 
    if ($password !== "password123") {
        echo "Incorrect password." . PHP_EOL;
    }
} while ($password !== "password123");

echo "Access Granted." . PHP_EOL;
?>