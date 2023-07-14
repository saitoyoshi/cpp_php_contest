<?php

function gcd(int $A, int $B): int {
    if ($B === 0) {
        return $A;
    } else {
        return gcd($B, $A % $B);
    }
}
[$A,$B] = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));
echo gcd($A,$B) . PHP_EOL;
