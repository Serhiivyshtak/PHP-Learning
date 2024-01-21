<?php
$date_string = "22 January 2024 16:30";
$parsed = date_parse_from_format("d F Y H:i", $date_string);
var_dump($parsed);

echo $parsed["year"]; 

