<?php

$N = (int) fgets(STDIN);
$res = 0;
while (1) {
    $res++;
    if ($N % 2 === 0) {
        $N /= 2;
    } else {
        $N--;
    }
    if ($N === 0) {
        break;
    }
}
echo $res . PHP_EOL;
