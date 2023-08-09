<?php

$N = (int) fgets(STDIN);
$fib = array_fill(0,$N+1,-1);
// var_dump($fib);
$fib[0] = 0;
$fib[1] = 1;
echo func($N,$fib) . PHP_EOL;
function func($x, $fib) {
    if ($fib[$x] !== -1) return $fib[$x];
    $fib[$x] = func($x-1,$fib) + func($x-2,$fib);
    return $fib[$x];
}
