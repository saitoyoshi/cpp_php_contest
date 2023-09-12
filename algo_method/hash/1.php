<?php

$N = (int) fgets(STDIN);
$a = [];
$arr = explode(" ", trim(fgets(STDIN)));
// var_dump($arr);exit;
foreach ($arr as $s) {
    if (array_key_exists($s,$a)) {
        $a[$s]++;
    } else {
        $a[$s] = 1;
    }
}
$Q = (int) fgets(STDIN);
for ($i = 0; $i < $Q; $i++) {
    $s = trim(fgets(STDIN));
    if (array_key_exists($s, $a)) {
        echo $a[$s] . PHP_EOL;
    } else {
        echo 0 . PHP_EOL;
    }
}
