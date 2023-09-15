<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$max = max($arr);
$a = [];
for ($i = 1; $i <= $N; $i++) {
    if ($arr[$i-1] === $max) {
        $a[$i] = -1;
    } else {
        $a[$i] = $arr[$i-1];
    }
}
$r = array_keys($arr, max($a));
echo $r[0] + 1 . PHP_EOL;
