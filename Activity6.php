<?php
$movies = [
    "The Walking Dead",
    "Avengers",
    "Coraline",
    "The Judge from Hell",
    "Love Next Door"
];

foreach ($movies as $index => $movie) {
    echo ($index + 1) . ". " . $movie . PHP_EOL;
}
?>