<?php

$s = str_split(trim(fgets(STDIN)));
$a = range('a','z');
$r = [];
foreach ($s as $v) {
        if(!isset($r[$v])) {
            $r[$v] = 0;
        } else {
            $r[$v]++;
        }
}
ksort($r);
// var_dump($r);exit;
$m = max($r);
foreach ($r as $key => $v) {
    if ($v === $m) {
        echo $key . PHP_EOL;
        exit;
    }
}
// echo array_keys($r,)
