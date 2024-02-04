<?php



$random_int = 7;

function inc () {
    global $random_int;
    static $value = 1;
    echo $random_int + $value . "<br>";
    $value++;
}

inc();
inc();
inc();
inc();