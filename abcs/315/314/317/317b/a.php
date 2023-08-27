<?php

$N = (int) fgets(STDIN);
$arr = array_map('intval',explode(" ", trim(fgets(STDIN))));
sort($arr);
$range = range($arr[0], $arr[$N-1]);
for ($i = 0; $i < $N; $i++) {
    if ($arr[$i] !== $range[$i]) {
        echo $range[$i] . PHP_EOL;
        exit;

    }
}
