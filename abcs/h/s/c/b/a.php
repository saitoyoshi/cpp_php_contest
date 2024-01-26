<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$S = array_sum($arr);
$tmp = [];
$v = 0;
for ($i = 0; $i < $N; $i++) {
    $v += $arr[$i];
    $tmp[] = abs($S-2*$v);
}
// var_dump($tmp);
echo min($tmp) . PHP_EOL;
