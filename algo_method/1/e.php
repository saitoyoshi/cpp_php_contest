<?php

$N = (int) fgets(STDIN);
$res = 0;
$num = 0;
while (1) {
    $res++;
    if ($N % 3 === 0) {
        $N /= 3;
    } else {
        $N--;
    }
    if ($N === 0) {
        break;
    }
}
echo $res . PHP_EOL;
