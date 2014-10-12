<?php


function check_if_happy($number, $limit)
{
    $sum = 0;
    while($number != 0) {
        $number_part = $number % 10;
        $number = (int)($number /10);
        $sum = $sum + pow($number_part, 2);

    }

    if($sum == 0) {
        echo "0\n";
        return 0;
    }

    if($sum == 1) {
        echo "1\n";
        return 1;
    } else {
        if ($limit == 1000) {
            echo "0\n";
            return 0;
        }
        check_if_happy($sum, ++$limit);
    }
}

$fh = fopen($argv[1], "r");

while (true) {
    $number = fgets($fh);
    if($number === false) {
        break;
    }

    // convert the number to int
    $number = (int)$number;

    // send the number to function and check if it's happy number
    check_if_happy($number, 0);
}