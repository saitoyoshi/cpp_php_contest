<?php

$N = (int) trim(fgets(STDIN));
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
$Q = (int) trim(fgets(STDIN));
for ($i = 0; $i < $Q; $i++) {
    [$n,$k,$x] = array_map('intval',explode(" ", trim(fgets(STDIN))));
    if ($n === 1) {
        $arr[$k-1] = $x;
    } else {
        echo $arr[$k-1] . PHP_EOL;
    }
}
