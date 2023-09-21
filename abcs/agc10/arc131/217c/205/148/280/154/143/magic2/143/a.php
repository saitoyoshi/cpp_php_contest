<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$sum = 0;
for ($i = 0; $i < $N; $i++) {
    for ($j = $i+1; $j < $N; $j++) {
        $sum += $arr[$i] * $arr[$j];
    }
}
echo $sum . PHP_EOL;
