<?php

$N = (int) fgets(STDIN);
$arr = array_map(function($v) {
    return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$a = 0;
$b = 0;
$c = 0;
$d = 0;
foreach ($arr as $v) {
    if (100 === $v) $a++;
    elseif (200 === $v) $b++;
    elseif (300 === $v) $c++;
    else $d++;
}

echo ($a * $d + $b * $c) . PHP_EOL;
