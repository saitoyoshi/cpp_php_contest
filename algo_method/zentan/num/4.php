<?php

function gcd(int $x, int $y): int {
    if ($y === 0) return $x;
    return gcd($y, $x % $y);
}

[$A, $B] = array_map('intval',explode(" ", trim(fgets(STDIN))));
echo gcd($A,$B) . PHP_EOL;
