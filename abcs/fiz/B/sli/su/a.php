<?php

$s = trim(fgets(STDIN));
$k = strlen($s);
$remaingame = 15-$k;
$wingame = substr_count($s,'o');
$needs = 8-$wingame;
if ($needs <= $remaingame) {
    echo 'YES' . PHP_EOL;
} else {
    echo 'NO' . PHP_EOL;

}
// var_dump(strlen($s));
