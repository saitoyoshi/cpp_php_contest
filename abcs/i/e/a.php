<?php

[$a,$b,$c,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// a:1,b:0,c-1
$atimes = min($a,$k);
$btimes = min($b,$k-$atimes);
$ctimes = min($c,$k-$atimes-$btimes);
$sum = 0;
$sum += $atimes;
if ($ctimes > 0) {
    $sum -= $ctimes;
}
echo $sum . PHP_EOL;
