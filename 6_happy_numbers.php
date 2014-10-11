<?php

function split_numbers($number)
{
    $arr = array();

    while((int)$number != 0) {


        $number_part = $number %10;
        $number = $number / 10;
        array_push($arr, $number_part);
    }

    return array($arr, count($arr) );
}

function check_if_happy($arr)
{
    $sum = 0;
    for($i=0; $i<$arr[1]; $i++) {
        $sum = $sum + pow($arr[1][$i], 2);
    }
    if ($sum == 1) {
        return 1;
    } else {
        echo $sum."\n";
        check_if_happy(split_numbers($sum));
    }

}

$fh = fopen($argv[1], "r");

while (true) {
    $sum = 0;
    $number = fgets($fh);
    if($number === false) {
        break;
    }

    echo check_if_happy(split_numbers($number));
}