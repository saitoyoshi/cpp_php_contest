<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

rsort($arr);
$sum = 0;
for ($i = 1; $i <= 2 * $N; $i+=2) {
    $sum += $arr[$i];
}
echo $sum . PHP_EOL;
