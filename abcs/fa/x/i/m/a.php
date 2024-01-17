<?php

$N = str_split((string) trim(fgets(STDIN)));
// var_dump($N);
$n = 0;
foreach ($N as $v) {
    $v = (int)$v;
    $n += $v;
}
if ($n % 9 === 0) {
    echo 'Yes' . PHP_EOL;
} else {
    echo 'No' . PHP_EOL;
}
