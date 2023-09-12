<?php

function hash30($s) {
    $a2ivalues = range(1,26);
    $a2ikeys = range('a', 'z');
    $a2i = array_combine($a2ikeys, $a2ivalues);
    // var_dump($a2i);
    $letters = str_split($s);
    $res = 0;
    $e = 0;
    foreach ($letters as $letter) {
        $res += (30 ** $e) * $a2i[$letter];
        $e++;
    }
    return $res;
}
$N = (int) fgets(STDIN);
$arr = explode(" ", trim(fgets(STDIN)));
$a = array_fill(0,30*30*30*30,0);
foreach ($arr as $s) {
    $a[hash30($s)]++;
}
$Q = (int) fgets(STDIN);

for ($i = 0; $i < $Q; $i++) {
    $s = trim(fgets(STDIN));
    echo $a[hash30($s)] . PHP_EOL;
}
