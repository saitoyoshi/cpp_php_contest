<?php

$N = (int) trim(fgets(STDIN));

if ($N % f($N) === 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
function f($n) {
    $s = str_split((string)$n);;
    $r = 0;
    foreach ($s as $v) {
        $r += (int)$v;
    }
    return $r;

}
