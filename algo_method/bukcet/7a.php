<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
$bucket = array_fill(0,100001, 0);
for ($i = 0; $i < $N; $i++) {
    $bucket[$arr[$i]]++;
}
$sum_a = array_sum($arr);
for ($i = 0; $i < $Q; $i++) {
    $query = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($query[0] === 0) {
        $v = $query[1];
        $bucket[$v]++;
        $sum_a += $v;
    } elseif ($query[0] === 1) {
        $x = $query[1];
        $y = $query[2];
        $sum_a += $y * $bucket[$x];
        $sum_a -= $x * $bucket[$x];
        $bucket[$y] += $bucket[$x];
        $bucket[$x] = 0;
    } else {
        echo $sum_a . PHP_EOL;
    }
}
