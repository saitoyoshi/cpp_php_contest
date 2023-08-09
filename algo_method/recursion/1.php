<?php

$N = (int) fgets(STDIN);
echo f($N) . PHP_EOL;
function f($x) {
    if ($x === 0) return 0;
    return f($x-1) + $x;
}
