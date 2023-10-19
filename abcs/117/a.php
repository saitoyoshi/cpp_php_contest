<?php

[$a,$b] = array_map('intval',explode(" ", trim(fgets(STDIN))));
$e = [];
if ($a >= $b) {
    for ($i = 0; $i < $a; $i++) {
        $e[$i] = $i+1;
    }
    for ($i = $a; $i < $a+$b-1; $i++) {
        $e[$i] = -($i-$a+1);
    }
    $sum = 0;
    for ($i = 0; $i < $a+$b-1; $i++) {
        $sum += $e[$i];
    }
    $e[$a+$b-1] = -$sum;
} else {
    for ($i = 0; $i < $a-1; $i++) {
        $e[$i] = $i+1;
    }
    for ($i = $a; $i < $a+$b; $i++) {
        $e[$i] = -($i-$a+1);
    }
    $sum1 = $sum2 = 0;
    for ($i = 0; $i < $a-1; $i++) {
        $sum1 += $e[$i];
    }
    for ($i = $a; $i < $a+$b; $i++) {
        $sum2 += $e[$i];
    }
    $e[$a-1] = -($sum1+$sum2);
}
echo implode(" ", $e) . PHP_EOL;
