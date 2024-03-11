<?php

[$N,$k] = array_map('intval',explode(" ", trim(fgets(STDIN))));
// var_dump(g2(100003450230));
$t = $N;
if ($k === 0) {
    echo $N . PHP_EOL;
} else {
    for ($i = 0; $i < $k; $i++) {
        $t = f($t);
    }
    echo $t . PHP_EOL;
}
function f(int $x) {
    return g1($x)-g2($x);
}
function g1(int $x) {
    $str = (string) $x;
    $a = str_split($str);
    rsort($a);
    return (int)implode("", $a);
}
function g2(int $x) {
    $str = (string) $x;
    $a = str_split($str);
    sort($a);
    return (int)implode("", $a);
}
