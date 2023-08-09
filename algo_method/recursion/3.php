<?php

$N = (int) fgets(STDIN);
echo fib($N) . PHP_EOL;
function fib($x) {
    if ($x === 0) return 0;
    if ($x === 1) return 1;
    return fib($x-1) + fib($x-2);
}
