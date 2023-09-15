<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$keys = range(1,$N);
$called = [];
foreach ($keys as $key) {
    $called[$key] = false;
}
for ($i = 1; $i <= $N; $i++) {
    if ($called[$i] === false) {
        $called[$arr[$i-1]] = true;
    }
}
$b = [];
foreach ($called as $num => $v) {
    if ($v === false) {
        $b[] = $num;
    }
}
echo count($b) . PHP_EOL;
echo implode(" ", $b) . PHP_EOL;
