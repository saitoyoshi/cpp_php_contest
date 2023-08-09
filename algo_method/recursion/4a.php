<?php

$N = (int) fgets(STDIN);
$fib = array_fill(0,$N+1,-1);
// var_dump($fib);
$fib[0] = 0;
$fib[1] = 1;
echo func($N) . PHP_EOL;
function func($x) {
    global $fib;
    if ($fib[$x] !== -1) return $fib[$x];
    $fib[$x] = func($x-1) + func($x-2);
    return $fib[$x];
}
