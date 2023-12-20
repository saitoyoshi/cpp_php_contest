<?php

function isOK($n) {
    $h = (int)floor($n / 100);
    $t = floor($n/10)%10;
    $o = $n % 10;
    // var_dump($o);
    return (($h*$t) === $o);
}

$N = (int) trim(fgets(STDIN));
for ($i = $N; $i <= 919; $i++) {
    if (isOK($i)) {
        echo $i . PHP_EOL;
        exit;
    }
}
// var_dump(isOK(144));
