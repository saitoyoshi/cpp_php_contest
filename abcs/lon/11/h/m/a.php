<?php

$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$m = max($arr);
$i = array_search($m,$arr);
unset($arr[$i]);
$k = (int) trim(fgets(STDIN));
$n = $m;
for ($i = 0; $i < $k; $i++) {
    $n *= 2;
}
$r = array_sum($arr) + $n;
echo $r . PHP_EOL;

// function h($a,$b,$c) {
//     $m = max($a,$b,$c);
//     return 2*$m;
// }
