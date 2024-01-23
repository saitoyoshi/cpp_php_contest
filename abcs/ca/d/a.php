<?php

$N = (int) trim(fgets(STDIN));
// var_dump(sn($N));
if ($N % sn($N) === 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
function sn($n) {
    $s = str_split((string)$n);
    $result = 0;
    foreach ($s as $v) {
        $result += (int)$v;
    }
    return $result;
}
