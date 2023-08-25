<?php

$N = (int) fgets(STDIN);
$arr = array_map(function ($v) {
return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
$count = [];
for ($i = 0; $i <= 99999; $i++) {
    $count[$i] = 0;
}
foreach ($arr as $v) {
    $count[$v]++;
}
$result = 0;
for ($i = 1; $i <= 49999; $i++) {
    $result += $count[$i] * $count[100000 - $i];
}
$result += $count[50000] * ($count[50000]-1) / 2;

echo $result . PHP_EOL;
