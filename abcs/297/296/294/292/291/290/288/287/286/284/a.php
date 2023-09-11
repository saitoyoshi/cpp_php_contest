<?php

$N = (int) fgets(STDIN);
for ($i = 0; $i < $N; $i++) {
    $tn = (int) fgets(STDIN);
    $arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
    $filterdArr = array_filter($arr, fn($v) => $v % 2 === 1);
    echo count($filterdArr) . PHP_EOL;
}
