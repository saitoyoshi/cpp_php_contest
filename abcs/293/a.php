<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$keys = range(1,$N);
$called = [];
foreach ($keys as $key) {
    $called[$key] = false;
}
// var_dump($called);exit;
$b = [];
for ($i = 1; $i <= $N; $i++) {
    if ($called[$i] === true) {
    } else {
        $called[$arr[$i-1]] = true;
    }
}
$b = array_keys(array_filter($called, fn($v) => $v === false));
// var_dump($b);
echo count($b) . PHP_EOL;
echo implode(" ", $b) . PHP_EOL;
