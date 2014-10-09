<?php

$i = 0;
$fh = fopen($argv[1], "r");

while (true) {
	$test = fgets($fh);
    if($test === false) {
        break;
    }
	$i = $i + (int)$test;
}

echo $i."\n";
