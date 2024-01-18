<?php

$x = (int) trim(fgets(STDIN));
$r = intdiv($x,10);
// var_dump($r);
if ($x < 0 && $x % 10 !== 0) {
    $r--;
}
echo $r . PHP_EOL;
