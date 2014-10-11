<?php


$fh = fopen($argv[1], "r");

while (true) {
    $sum = 0;
    $number = fgets($fh);
    if($number === false) {
        break;
    }

    while((int)$number != 0) {

        $number_part = $number %10;
        $sum = $sum + $number_part;
        $number = $number / 10;
    }


    echo $sum."\n";
}