<?php

// 定理 : 一番長い辺が他のN−1 辺の長さの合計よりも真に短い場合に限り、条件を満たす N 角形が描ける。

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
$longest = array_pop($arr);
$sum = array_sum($arr);
if ($longest < $sum) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
