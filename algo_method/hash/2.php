<?php

function hash30($s) {
    $a2ivalues = range(1,26);
    $a2ikeys = range('a', 'z');
    $a2i = array_combine($a2ikeys, $a2ivalues);
    // var_dump($a2i);
    $letters = str_split($s);
    $res = 0;
    $e = count($letters);
    foreach ($letters as $letter) {
        $res += (30 ** ($e-1)) * $a2i[$letter];
        $e--;
    }
    return $res % 1000003;
}
// var_dump(hash30('algo'));
$N = (int) fgets(STDIN);
$strings = explode(" ", trim(fgets(STDIN)));
$a = array_fill(0, 1000003,0);
foreach ($strings as $str) {
    $a[hash30($str)]++;
}
echo max($a) . PHP_EOL;
