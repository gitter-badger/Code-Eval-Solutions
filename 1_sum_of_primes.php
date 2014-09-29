<?php
function checkIfPrime($i)
{
    for($j = 2; $j < $i; $j++ ){
        if(0 == $i % $j){
            return false;
        }
    }

    return true;
}

$sumOfPrimes = 0;

for($i=2, $count = 0; $count < 1000; $i++){
    // check if number is prime
    if (checkIfPrime($i)){
        // if number is prime
        $count++;
        $sumOfPrimes = $sumOfPrimes + $i;
    }
}

print $sumOfPrimes;
