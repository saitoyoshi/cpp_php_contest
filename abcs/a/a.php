<?php

$t = [];
$N = (int) trim(fgets(STDIN));
for ($i = 100000000; $i < 1000000000; $i++) {
    $s = (string)$i;
    if ($s[0] === $s[1] && $s[4] === $s[5] && $s[6] === $s[8]) {
        $N--;
    }
    if ($N === 0) {
        echo $s . PHP_EOL;
    }
}
// echo $t[$N-1] . PHP_EOL;
