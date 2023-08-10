<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));

sort($arr);
$sum = 0;
for ($i = $N; $i < 3 * $N; $i+=2) {
    $sum += $arr[$i];
}
echo $sum . PHP_EOL;
