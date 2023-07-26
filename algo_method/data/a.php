<?php

$Q = (int) fgets(STDIN);
$arr = [3,1,4,1,5,9,2,6,5,3];
for ($i = 1; $i <= $Q; $i++) {
    [$cmd,$k,$v] = array_map(function ($v) {
        return (int) $v;
    }, explode(" ", trim(fgets(STDIN))));
    if ($cmd === 0) {
        echo $arr[$k] . PHP_EOL;
    } else {
        $arr[$k] = $v;
    }
}
