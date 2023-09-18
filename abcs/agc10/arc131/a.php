<?php

$a = (int) fgets(STDIN);
$b = (int) fgets(STDIN);
for ($i = $a; $i <= 1000000000000000000; $i++) {
    $x = (string)$i;
    $y = (string)(2*$i);
    if (strpos($x,$a) !== false && strpos($y,$b) !== false) {
        echo $i . PHP_EOL;
        exit;
    }
}
