<?php

$N = (int) trim(fgets(STDIN));
$r = intdiv($N,10);
if ($N < 0 && $N %10 !==0) {
    $r--;
}
echo $r . PHP_EOL;
