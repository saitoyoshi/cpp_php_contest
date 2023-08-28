<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
// $arr[$i] * $arr[$j] -> S^2
//2*( $a[$i] * $a[$j]) + $a[$i] * $a[$i] = S^2
$sum = array_sum($arr);
$S = $sum ** 2;
$U = 0;
for ($i = 0; $i < $N; $i++) {
    $U += $arr[$i] ** 2;
}
echo ($S - $U) / 2 . PHP_EOL;
