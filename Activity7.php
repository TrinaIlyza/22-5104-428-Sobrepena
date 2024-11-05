<?php
$student = [
    "Name" => "James Darell",
    "Age" => 24,
    "Grade" => "A+",
    "City" => "Manila"
];

foreach ($student as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}
?>