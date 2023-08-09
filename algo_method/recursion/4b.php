<?php

$N = (int) fgets(STDIN);
$fib = array_fill(0,$N+1,-1);
echo func($N) . PHP_EOL;
function func($x) {
    global $fib;
    if ($fib[$x] !== -1) return $fib[$x];
    if ($x === 0) return $fib[$x] = 0;
    if ($x === 1) return $fib[$x] = 1;
    return $fib[$x] = func($x-1) + func($x-2);
}
