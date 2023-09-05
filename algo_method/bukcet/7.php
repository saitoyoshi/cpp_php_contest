<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) fgets(STDIN);
$bucket = array_fill(0,100001, 0);
for ($i = 0; $i < $N; $i++) {
    $bucket[$arr[$i]]++;
}
for ($i = 0; $i < $Q; $i++) {
    $query = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($query[0] === 0) {
        $v = $query[1];
        $bucket[$v]++;
    } elseif ($query[0] === 1) {
        $x = $query[1];
        $y = $query[2];
        $bucket[$y] += $bucket[$x];
        $bucket[$x] = 0;
    } else {
        echo mysum($bucket) . PHP_EOL;
    }
}
function mysum($bucket) {
    $sum = 0;
    for ($i = 0; $i <= 100000; $i++) {
        $sum += $bucket[$i] * $i;
    }
    return $sum;
}
