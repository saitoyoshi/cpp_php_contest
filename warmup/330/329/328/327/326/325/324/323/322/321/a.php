<?php

$N = (int) trim(fgets(STDIN));
$str = (string)$N;
$len = strlen($str);
if ($len === 1) {
    echo "Yes" . PHP_EOL;
    exit;
}
$arr = str_split($str);
$first = array_shift($arr);
foreach ($arr as $v) {
    if ($v >= $first) {
        echo "No" . PHP_EOL;
        exit;
    }
    $first = $v;
}
echo "Yes" . PHP_EOL;
