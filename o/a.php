<?php

function gcd(int $A, int $B): int {
    while (1) {
        if ($A > $B) {
            $A = $A % $B;
        } else {
            $B = $B % $A;
        }
        if ($A === 0) {
            return $B;
        }
        if ($B === 0) {
            return $A;
        }
    }
}
[$A,$B] = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));
echo gcd($A,$B) . PHP_EOL;
