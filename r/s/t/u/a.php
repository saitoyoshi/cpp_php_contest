<?php

function factorial(int $n): int {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
function comination(int $n, int $r): int {
    return factorial($n) / (factorial($r) * factorial($n - $r));
}
[$n,$r] = array_map(function ($v) {
return (int) $v;
}, explode(" ", trim(fgets(STDIN))));
echo comination($n,$r) . PHP_EOL;
