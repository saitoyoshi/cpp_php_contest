<?php

function nC2(int $num) {
    return $num * ($num - 1) / 2;
}

$N = (int) fgets(STDIN);
$arr = array_map(function($v) {
    return (int)$v;
}, explode(" ", trim(fgets(STDIN))));
$a = 0;
$b = 0;
$c = 0;
foreach ($arr as $v) {
    if ($v === 1) $a++;
    elseif ($v === 2) $b++;
    else $c++;
}
$result = 0;

$result += nC2($a) + nC2($b) + nC2($c);
echo $result . PHP_EOL;
