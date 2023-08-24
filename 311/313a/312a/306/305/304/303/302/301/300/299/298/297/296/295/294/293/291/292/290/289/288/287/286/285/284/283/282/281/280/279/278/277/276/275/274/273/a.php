<?php

$N = (int) fgets(STDIN);
echo f($N) . PHP_EOL;
function f($n) {
    if ($n === 0) return 1;
    return $n * f($n-1);
}
