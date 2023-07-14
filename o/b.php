<?php

function gcd(int $A, int $B): int {
    if ($A === 0) {
        return $B;
    }
    if ($B === 0) {
        return $A;
    }
    if ($A > $B) {
        $r = $A % $B;
       return gcd($r, $B);
    } else {
        $r = $B % $A;
        return gcd($A, $r);
    }
}
[$A,$B] = array_map(fn($v) => (int)$v, explode(" ", trim(fgets(STDIN))));
echo gcd($A,$B) . PHP_EOL;
